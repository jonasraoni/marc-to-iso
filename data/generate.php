<?php
$file = new SplFileObject(__DIR__ . '/country-codes.csv');
try {
    $header = $file->fgetcsv();
    $marcColumn = array_search('MARC', $header);
    $isoColumn = array_search('ISO3166-1-Alpha-2', $header);
    $byMarcCode = [];
    while ([$marcColumn => $marc, $isoColumn => $iso] = $file->fgetcsv()) {
        foreach (explode(',', $marc) as $marc) {
            $byMarcCode[mb_strtoupper($marc)] = mb_strtoupper($iso);
        }
    }
} finally {
    $file = null;
}

$byMarcName = [
    // USA States
    'ALABAMA' => 'US',
    'ALASKA' => 'US',
    'AMERICAN SAMOA' => 'US',
    'ARIZONA' => 'US',
    'ARKANSAS' => 'US',
    'CALIFORNIA' => 'US',
    'COLORADO' => 'US',
    'CONNECTICUT' => 'US',
    'DELAWARE' => 'US',
    'DISTRICT OF COLUMBIA' => 'US',
    'FEDERATED STATES OF MICRONESIA' => 'US',
    'FLORIDA' => 'US',
    'GEORGIA' => 'US',
    'GUAM' => 'US',
    'HAWAII' => 'US',
    'IDAHO' => 'US',
    'ILLINOIS' => 'US',
    'INDIANA' => 'US',
    'IOWA' => 'US',
    'KANSAS' => 'US',
    'KENTUCKY' => 'US',
    'LOUISIANA' => 'US',
    'MAINE' => 'US',
    'MARSHALL ISLANDS' => 'US',
    'MARYLAND' => 'US',
    'MASSACHUSETTS' => 'US',
    'MICHIGAN' => 'US',
    'MINNESOTA' => 'US',
    'MISSISSIPPI' => 'US',
    'MISSOURI' => 'US',
    'MONTANA' => 'US',
    'NEBRASKA' => 'US',
    'NEVADA' => 'US',
    'NEW HAMPSHIRE' => 'US',
    'NEW JERSEY' => 'US',
    'NEW MEXICO' => 'US',
    'NEW YORK (STATE)' => 'US',
    'NORTH CAROLINA' => 'US',
    'NORTH DAKOTA' => 'US',
    'NORTHERN MARIANA ISLANDS' => 'US',
    'OHIO' => 'US',
    'OKLAHOMA' => 'US',
    'OREGON' => 'US',
    'PALAU' => 'US',
    'PENNSYLVANIA' => 'US',
    'PUERTO RICO' => 'US',
    'RHODE ISLAND' => 'US',
    'SOUTH CAROLINA' => 'US',
    'SOUTH DAKOTA' => 'US',
    'TENNESSEE' => 'US',
    'TEXAS' => 'US',
    'UTAH' => 'US',
    'VERMONT' => 'US',
    'VIRGIN ISLANDS' => 'US',
    'VIRGINIA' => 'US',
    'WASHINGTON (STATE)' => 'US',
    'WEST VIRGINIA' => 'US',
    'WISCONSIN' => 'US',
    'WYOMING' => 'US',

    // Canadian States
    'ALBERTA' => 'CA',
    'BRITISH COLUMBIA' => 'CA',
    'MANITOBA' => 'CA',
    'NEW BRUNSWICK' => 'CA',
    'NEWFOUNDLAND AND LABRADOR' => 'CA',
    'NORTHWEST TERRITORIES' => 'CA',
    'NOVA SCOTIA' => 'CA',
    'NUNAVUT' => 'CA',
    'ONTARIO' => 'CA',
    'PRINCE EDWARD ISLAND' => 'CA',
    'QUÉBEC (PROVINCE)' => 'CA',
    'SASKATCHEWAN' => 'CA',
    'YUKON TERRITORY' => 'CA',

    // Others
    'SPANISH NORTH AFRICA' => 'ES',
    'SPRATLY ISLAND' => 'VN',

    // United Kingdom
    'ENGLAND' => 'GB',
    'NORTHERN IRELAND' => 'GB',
    'SCOTLAND' => 'GB',
    'WALES' => 'GB',

    // Territories UK
    'ISLE OF MAN' => 'GB',
    'JERSEY' => 'GB',
    'GUERNSEY' => 'GB',

    // Australian States
    'AUSTRALIAN CAPITAL TERRITORY' => 'AU',
    'CORAL SEA ISLANDS TERRITORY' => 'AU',
    'NEW SOUTH WALES' => 'AU',
    'NORTHERN TERRITORY' => 'AU',
    'QUEENSLAND' => 'AU',
    'SOUTH AUSTRALIA' => 'AU',
    'TASMANIA' => 'AU',
    'VICTORIA' => 'AU',
    'WESTERN AUSTRALIA' => 'AU',

    // Disputed territories
    // Iraq-Saudi Arabia Neutral Zone
    // Kosovo
    // Paracel Islands

    // Inexistent locations
    // Various places
    // No place
];

$file = new SplFileObject(__DIR__ . '/marc-countries.csv');
$nameMappings = $codeMappings = [];
try {
    $file->fgetcsv();
    while ([$code, $name] = $file->fgetcsv()) {
        $code = mb_strtoupper($code);
        $name = mb_strtoupper($name);
        if ($iso = $byMarcCode[$code] ?? $byMarcName[$name] ?? null) {
            $codeMappings[$code] = $nameMappings[$name] = $iso;
            $isoCodeMappings[$iso] = $code;
            $isoNameMappings[$iso] = $name;
        }
        else {
            echo 'Ignored: ', $code, ' (', $name ,')', "\n";
        }
    }
} finally {
    $file = null;
}

$output = [
    'MarcNameToIso' => $nameMappings,
    'MarcCodeToIso' => $codeMappings,
    'IsoToMarcCode' => $isoCodeMappings,
    'IsoToMarcName' => $isoNameMappings
];

$template = '<?php

declare(strict_types=1);

namespace JonasRaoni\MarcToIso;

class %s
{
    public const MAPPINGS = [%s
    ];

    public static function get(?string $input): ?string
    {
        return self::MAPPINGS[mb_strtoupper($input)] ?? null;
    }
}
';

$outputFolder = __DIR__ . '/../src/';
is_dir($outputFolder) || mkdir($outputFolder);
foreach ($output as $file => $source) {
    file_put_contents($outputFolder . $file . '.php', sprintf($template, $file, str_replace(['array (', "\n"], ['', "\n      "], trim(var_export($source, true), ",)\n"))));
}
