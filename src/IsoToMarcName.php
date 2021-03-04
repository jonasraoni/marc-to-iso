<?php

declare(strict_types=1);

namespace JonasRaoni\MarcToIso;

class IsoToMarcName
{
    public const MAPPINGS = [
        'AL' => 'ALBANIA',
        'CA' => 'YUKON TERRITORY',
        'AU' => 'SOUTH AUSTRALIA',
        'DZ' => 'ALGERIA',
        'AF' => 'AFGHANISTAN',
        'AR' => 'ARGENTINA',
        'AM' => 'ARMENIA (REPUBLIC)',
        'AZ' => 'AZERBAIJAN',
        'US' => 'UNITED STATES',
        'AI' => 'ANGUILLA',
        'AD' => 'ANDORRA',
        'AO' => 'ANGOLA',
        'AG' => 'ANTIGUA AND BARBUDA',
        'AS' => 'AMERICAN SAMOA',
        'AT' => 'AUSTRIA',
        'AW' => 'ARUBA',
        'AQ' => 'ANTARCTICA',
        'BH' => 'BAHRAIN',
        'BB' => 'BARBADOS',
        'BI' => 'BURUNDI',
        'BE' => 'BELGIUM',
        'BS' => 'BAHAMAS',
        'BD' => 'BANGLADESH',
        'BZ' => 'BELIZE',
        'IO' => 'BRITISH INDIAN OCEAN TERRITORY',
        'BR' => 'BRAZIL',
        'BM' => 'BERMUDA ISLANDS',
        'BA' => 'BOSNIA AND HERZEGOVINA',
        'BO' => 'BOLIVIA',
        'SB' => 'SOLOMON ISLANDS',
        'MM' => 'BURMA',
        'BW' => 'BOTSWANA',
        'BT' => 'BHUTAN',
        'BG' => 'BULGARIA',
        'BV' => 'BOUVET ISLAND',
        'BY' => 'BELARUS',
        'BN' => 'BRUNEI',
        'BQ' => 'CARIBBEAN NETHERLANDS',
        'KH' => 'CAMBODIA',
        'CN' => 'CHINA',
        'TD' => 'CHAD',
        'LK' => 'SRI LANKA',
        'CG' => 'CONGO (BRAZZAVILLE)',
        'CD' => 'CONGO (DEMOCRATIC REPUBLIC)',
        'TW' => 'CHINA (REPUBLIC : 1949- )',
        'HR' => 'CROATIA',
        'KY' => 'CAYMAN ISLANDS',
        'CO' => 'COLOMBIA',
        'CL' => 'CHILE',
        'CM' => 'CAMEROON',
        'CW' => 'CURAÇAO',
        'KM' => 'COMOROS',
        'CR' => 'COSTA RICA',
        'CU' => 'CUBA',
        'CV' => 'CABO VERDE',
        'CK' => 'COOK ISLANDS',
        'CF' => 'CENTRAL AFRICAN REPUBLIC',
        'CY' => 'CYPRUS',
        'DK' => 'DENMARK',
        'BJ' => 'BENIN',
        'DM' => 'DOMINICA',
        'DO' => 'DOMINICAN REPUBLIC',
        'ER' => 'ERITREA',
        'EC' => 'ECUADOR',
        'GQ' => 'EQUATORIAL GUINEA',
        'TL' => 'TIMOR-LESTE',
        'GB' => 'UNITED KINGDOM',
        'EE' => 'ESTONIA',
        'SV' => 'EL SALVADOR',
        'ET' => 'ETHIOPIA',
        'FO' => 'FAROE ISLANDS',
        'GF' => 'FRENCH GUIANA',
        'FI' => 'FINLAND',
        'FJ' => 'FIJI',
        'FK' => 'FALKLAND ISLANDS',
        'FM' => 'MICRONESIA (FEDERATED STATES)',
        'PF' => 'FRENCH POLYNESIA',
        'FR' => 'FRANCE',
        'TF' => 'TERRES AUSTRALES ET ANTARCTIQUES FRANÇAISES',
        'DJ' => 'DJIBOUTI',
        'KI' => 'KIRIBATI',
        'GD' => 'GRENADA',
        'GH' => 'GHANA',
        'GI' => 'GIBRALTAR',
        'GL' => 'GREENLAND',
        'GM' => 'GAMBIA',
        'GA' => 'GABON',
        'GP' => 'GUADELOUPE',
        'GR' => 'GREECE',
        'GE' => 'GEORGIA (REPUBLIC)',
        'GT' => 'GUATEMALA',
        'GU' => 'GUAM',
        'GN' => 'GUINEA',
        'DE' => 'GERMANY',
        'GY' => 'GUYANA',
        'PS' => 'WEST BANK OF THE JORDAN RIVER',
        'HM' => 'HEARD AND MCDONALD ISLANDS',
        'HN' => 'HONDURAS',
        'HT' => 'HAITI',
        'HU' => 'HUNGARY',
        'IS' => 'ICELAND',
        'IE' => 'IRELAND',
        'IN' => 'INDIA',
        'ID' => 'INDONESIA',
        'IQ' => 'IRAQ',
        'IR' => 'IRAN',
        'IL' => 'ISRAEL',
        'IT' => 'ITALY',
        'CI' => 'CÔTE D\'IVOIRE',
        'JP' => 'JAPAN',
        'UM' => 'MIDWAY ISLANDS',
        'JM' => 'JAMAICA',
        'JO' => 'JORDAN',
        'KE' => 'KENYA',
        'KG' => 'KYRGYZSTAN',
        'KP' => 'KOREA (NORTH)',
        'KR' => 'KOREA (SOUTH)',
        'KW' => 'KUWAIT',
        'KZ' => 'KAZAKHSTAN',
        'LR' => 'LIBERIA',
        'LB' => 'LEBANON',
        'LI' => 'LIECHTENSTEIN',
        'LT' => 'LITHUANIA',
        'LS' => 'LESOTHO',
        'LA' => 'LAOS',
        'LU' => 'LUXEMBOURG',
        'LV' => 'LATVIA',
        'LY' => 'LIBYA',
        'MC' => 'MONACO',
        'MU' => 'MAURITIUS',
        'MG' => 'MADAGASCAR',
        'MS' => 'MONTSERRAT',
        'OM' => 'OMAN',
        'ML' => 'MALI',
        'MT' => 'MALTA',
        'ME' => 'MONTENEGRO',
        'MN' => 'MONGOLIA',
        'MQ' => 'MARTINIQUE',
        'MA' => 'MOROCCO',
        'MR' => 'MAURITANIA',
        'MD' => 'MOLDOVA',
        'MW' => 'MALAWI',
        'MX' => 'MEXICO',
        'MY' => 'MALAYSIA',
        'MZ' => 'MOZAMBIQUE',
        'NL' => 'NETHERLANDS',
        'NE' => 'NIGER',
        'NC' => 'NEW CALEDONIA',
        'VU' => 'VANUATU',
        'NO' => 'NORWAY',
        'NP' => 'NEPAL',
        'NI' => 'NICARAGUA',
        'NG' => 'NIGERIA',
        'NR' => 'NAURU',
        'MP' => 'NORTHERN MARIANA ISLANDS',
        'NF' => 'NORFOLK ISLAND',
        'NZ' => 'NEW ZEALAND',
        'YT' => 'MAYOTTE',
        'PN' => 'PITCAIRN ISLAND',
        'PE' => 'PERU',
        'GW' => 'GUINEA-BISSAU',
        'PH' => 'PHILIPPINES',
        'PK' => 'PAKISTAN',
        'PL' => 'POLAND',
        'PA' => 'PANAMA',
        'PT' => 'PORTUGAL',
        'PG' => 'PAPUA NEW GUINEA',
        'PR' => 'PUERTO RICO',
        'PW' => 'PALAU',
        'PY' => 'PARAGUAY',
        'QA' => 'QATAR',
        'RS' => 'SERBIA',
        'RE' => 'RÉUNION',
        'ZW' => 'ZIMBABWE',
        'RO' => 'ROMANIA',
        'RU' => 'RUSSIA (FEDERATION)',
        'RW' => 'RWANDA',
        'ZA' => 'SOUTH AFRICA',
        'BL' => 'SAINT-BARTHÉLEMY',
        'SS' => 'SOUTH SUDAN',
        'SC' => 'SEYCHELLES',
        'ST' => 'SAO TOME AND PRINCIPE',
        'SN' => 'SENEGAL',
        'ES' => 'SPAIN',
        'SG' => 'SINGAPORE',
        'SD' => 'SUDAN',
        'SL' => 'SIERRA LEONE',
        'SM' => 'SAN MARINO',
        'SX' => 'SINT MAARTEN',
        'SO' => 'SOMALIA',
        'SZ' => 'ESWATINI',
        'SR' => 'SURINAM',
        'EH' => 'WESTERN SAHARA',
        'MF' => 'SAINT-MARTIN',
        'SA' => 'SAUDI ARABIA',
        'SE' => 'SWEDEN',
        'NA' => 'NAMIBIA',
        'SY' => 'SYRIA',
        'CH' => 'SWITZERLAND',
        'TJ' => 'TAJIKISTAN',
        'TC' => 'TURKS AND CAICOS ISLANDS',
        'TG' => 'TOGO',
        'TH' => 'THAILAND',
        'TN' => 'TUNISIA',
        'TM' => 'TURKMENISTAN',
        'TK' => 'TOKELAU',
        'TO' => 'TONGA',
        'TT' => 'TRINIDAD AND TOBAGO',
        'AE' => 'UNITED ARAB EMIRATES',
        'TR' => 'TURKEY',
        'TV' => 'TUVALU',
        'TZ' => 'TANZANIA',
        'EG' => 'EGYPT',
        'UG' => 'UGANDA',
        'UA' => 'UKRAINE',
        'BF' => 'BURKINA FASO',
        'UY' => 'URUGUAY',
        'UZ' => 'UZBEKISTAN',
        'VG' => 'BRITISH VIRGIN ISLANDS',
        'VA' => 'VATICAN CITY',
        'VE' => 'VENEZUELA',
        'VI' => 'VIRGIN ISLANDS OF THE UNITED STATES',
        'VN' => 'SPRATLY ISLAND',
        'WF' => 'WALLIS AND FUTUNA',
        'WS' => 'SAMOA',
        'CX' => 'CHRISTMAS ISLAND (INDIAN OCEAN)',
        'CC' => 'COCOS (KEELING) ISLANDS',
        'MV' => 'MALDIVES',
        'KN' => 'SAINT KITTS-NEVIS',
        'MH' => 'MARSHALL ISLANDS',
        'NU' => 'NIUE',
        'SH' => 'SAINT HELENA',
        'LC' => 'SAINT LUCIA',
        'PM' => 'SAINT PIERRE AND MIQUELON',
        'VC' => 'SAINT VINCENT AND THE GRENADINES',
        'MK' => 'NORTH MACEDONIA',
        'SK' => 'SLOVAKIA',
        'CZ' => 'CZECH REPUBLIC',
        'GS' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',
        'SI' => 'SLOVENIA',
        'YE' => 'YEMEN',
        'ZM' => 'ZAMBIA'
    ];

    public static function get(?string $input): ?string
    {
        return self::MAPPINGS[mb_strtoupper($input)] ?? null;
    }
}