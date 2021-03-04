<?php

declare(strict_types=1);

namespace JonasRaoni\MarcToIso;

class MarcNameToIso
{
    public const MAPPINGS = [
        'ALBANIA' => 'AL',
        'ALBERTA' => 'CA',
        'AUSTRALIAN CAPITAL TERRITORY' => 'AU',
        'ALGERIA' => 'DZ',
        'AFGHANISTAN' => 'AF',
        'ARGENTINA' => 'AR',
        'ARMENIA (REPUBLIC)' => 'AM',
        'AZERBAIJAN' => 'AZ',
        'ALASKA' => 'US',
        'ALABAMA' => 'US',
        'ANGUILLA' => 'AI',
        'ANDORRA' => 'AD',
        'ANGOLA' => 'AO',
        'ANTIGUA AND BARBUDA' => 'AG',
        'ARKANSAS' => 'US',
        'AMERICAN SAMOA' => 'AS',
        'AUSTRALIA' => 'AU',
        'AUSTRIA' => 'AT',
        'ARUBA' => 'AW',
        'ANTARCTICA' => 'AQ',
        'ARIZONA' => 'US',
        'BAHRAIN' => 'BH',
        'BARBADOS' => 'BB',
        'BRITISH COLUMBIA' => 'CA',
        'BURUNDI' => 'BI',
        'BELGIUM' => 'BE',
        'BAHAMAS' => 'BS',
        'BANGLADESH' => 'BD',
        'BELIZE' => 'BZ',
        'BRITISH INDIAN OCEAN TERRITORY' => 'IO',
        'BRAZIL' => 'BR',
        'BERMUDA ISLANDS' => 'BM',
        'BOSNIA AND HERZEGOVINA' => 'BA',
        'BOLIVIA' => 'BO',
        'SOLOMON ISLANDS' => 'SB',
        'BURMA' => 'MM',
        'BOTSWANA' => 'BW',
        'BHUTAN' => 'BT',
        'BULGARIA' => 'BG',
        'BOUVET ISLAND' => 'BV',
        'BELARUS' => 'BY',
        'BRUNEI' => 'BN',
        'CARIBBEAN NETHERLANDS' => 'BQ',
        'CALIFORNIA' => 'US',
        'CAMBODIA' => 'KH',
        'CHINA' => 'CN',
        'CHAD' => 'TD',
        'SRI LANKA' => 'LK',
        'CONGO (BRAZZAVILLE)' => 'CG',
        'CONGO (DEMOCRATIC REPUBLIC)' => 'CD',
        'CHINA (REPUBLIC : 1949- )' => 'TW',
        'CROATIA' => 'HR',
        'CAYMAN ISLANDS' => 'KY',
        'COLOMBIA' => 'CO',
        'CHILE' => 'CL',
        'CAMEROON' => 'CM',
        'CURAÇAO' => 'CW',
        'COLORADO' => 'US',
        'COMOROS' => 'KM',
        'COSTA RICA' => 'CR',
        'CONNECTICUT' => 'US',
        'CUBA' => 'CU',
        'CABO VERDE' => 'CV',
        'COOK ISLANDS' => 'CK',
        'CENTRAL AFRICAN REPUBLIC' => 'CF',
        'CYPRUS' => 'CY',
        'DISTRICT OF COLUMBIA' => 'US',
        'DELAWARE' => 'US',
        'DENMARK' => 'DK',
        'BENIN' => 'BJ',
        'DOMINICA' => 'DM',
        'DOMINICAN REPUBLIC' => 'DO',
        'ERITREA' => 'ER',
        'ECUADOR' => 'EC',
        'EQUATORIAL GUINEA' => 'GQ',
        'TIMOR-LESTE' => 'TL',
        'ENGLAND' => 'GB',
        'ESTONIA' => 'EE',
        'EL SALVADOR' => 'SV',
        'ETHIOPIA' => 'ET',
        'FAROE ISLANDS' => 'FO',
        'FRENCH GUIANA' => 'GF',
        'FINLAND' => 'FI',
        'FIJI' => 'FJ',
        'FALKLAND ISLANDS' => 'FK',
        'FLORIDA' => 'US',
        'MICRONESIA (FEDERATED STATES)' => 'FM',
        'FRENCH POLYNESIA' => 'PF',
        'FRANCE' => 'FR',
        'TERRES AUSTRALES ET ANTARCTIQUES FRANÇAISES' => 'TF',
        'DJIBOUTI' => 'DJ',
        'GEORGIA' => 'US',
        'KIRIBATI' => 'KI',
        'GRENADA' => 'GD',
        'GUERNSEY' => 'GB',
        'GHANA' => 'GH',
        'GIBRALTAR' => 'GI',
        'GREENLAND' => 'GL',
        'GAMBIA' => 'GM',
        'GABON' => 'GA',
        'GUADELOUPE' => 'GP',
        'GREECE' => 'GR',
        'GEORGIA (REPUBLIC)' => 'GE',
        'GUATEMALA' => 'GT',
        'GUAM' => 'GU',
        'GUINEA' => 'GN',
        'GERMANY' => 'DE',
        'GUYANA' => 'GY',
        'GAZA STRIP' => 'PS',
        'HAWAII' => 'US',
        'HEARD AND MCDONALD ISLANDS' => 'HM',
        'HONDURAS' => 'HN',
        'HAITI' => 'HT',
        'HUNGARY' => 'HU',
        'IOWA' => 'US',
        'ICELAND' => 'IS',
        'IDAHO' => 'US',
        'IRELAND' => 'IE',
        'INDIA' => 'IN',
        'ILLINOIS' => 'US',
        'ISLE OF MAN' => 'GB',
        'INDIANA' => 'US',
        'INDONESIA' => 'ID',
        'IRAQ' => 'IQ',
        'IRAN' => 'IR',
        'ISRAEL' => 'IL',
        'ITALY' => 'IT',
        'CÔTE D\'IVOIRE' => 'CI',
        'JAPAN' => 'JP',
        'JERSEY' => 'GB',
        'JOHNSTON ATOLL' => 'UM',
        'JAMAICA' => 'JM',
        'JORDAN' => 'JO',
        'KENYA' => 'KE',
        'KYRGYZSTAN' => 'KG',
        'KOREA (NORTH)' => 'KP',
        'KOREA (SOUTH)' => 'KR',
        'KANSAS' => 'US',
        'KUWAIT' => 'KW',
        'KENTUCKY' => 'US',
        'KAZAKHSTAN' => 'KZ',
        'LOUISIANA' => 'US',
        'LIBERIA' => 'LR',
        'LEBANON' => 'LB',
        'LIECHTENSTEIN' => 'LI',
        'LITHUANIA' => 'LT',
        'LESOTHO' => 'LS',
        'LAOS' => 'LA',
        'LUXEMBOURG' => 'LU',
        'LATVIA' => 'LV',
        'LIBYA' => 'LY',
        'MASSACHUSETTS' => 'US',
        'MANITOBA' => 'CA',
        'MONACO' => 'MC',
        'MARYLAND' => 'US',
        'MAINE' => 'US',
        'MAURITIUS' => 'MU',
        'MADAGASCAR' => 'MG',
        'MICHIGAN' => 'US',
        'MONTSERRAT' => 'MS',
        'OMAN' => 'OM',
        'MALI' => 'ML',
        'MALTA' => 'MT',
        'MINNESOTA' => 'US',
        'MONTENEGRO' => 'ME',
        'MISSOURI' => 'US',
        'MONGOLIA' => 'MN',
        'MARTINIQUE' => 'MQ',
        'MOROCCO' => 'MA',
        'MISSISSIPPI' => 'US',
        'MONTANA' => 'US',
        'MAURITANIA' => 'MR',
        'MOLDOVA' => 'MD',
        'MALAWI' => 'MW',
        'MEXICO' => 'MX',
        'MALAYSIA' => 'MY',
        'MOZAMBIQUE' => 'MZ',
        'NEBRASKA' => 'US',
        'NORTH CAROLINA' => 'US',
        'NORTH DAKOTA' => 'US',
        'NETHERLANDS' => 'NL',
        'NEWFOUNDLAND AND LABRADOR' => 'CA',
        'NIGER' => 'NE',
        'NEW HAMPSHIRE' => 'US',
        'NORTHERN IRELAND' => 'GB',
        'NEW JERSEY' => 'US',
        'NEW BRUNSWICK' => 'CA',
        'NEW CALEDONIA' => 'NC',
        'NEW MEXICO' => 'US',
        'VANUATU' => 'VU',
        'NORWAY' => 'NO',
        'NEPAL' => 'NP',
        'NICARAGUA' => 'NI',
        'NIGERIA' => 'NG',
        'NOVA SCOTIA' => 'CA',
        'NORTHWEST TERRITORIES' => 'CA',
        'NAURU' => 'NR',
        'NUNAVUT' => 'CA',
        'NEVADA' => 'US',
        'NORTHERN MARIANA ISLANDS' => 'MP',
        'NORFOLK ISLAND' => 'NF',
        'NEW YORK (STATE)' => 'US',
        'NEW ZEALAND' => 'NZ',
        'OHIO' => 'US',
        'OKLAHOMA' => 'US',
        'ONTARIO' => 'CA',
        'OREGON' => 'US',
        'MAYOTTE' => 'YT',
        'PENNSYLVANIA' => 'US',
        'PITCAIRN ISLAND' => 'PN',
        'PERU' => 'PE',
        'GUINEA-BISSAU' => 'GW',
        'PHILIPPINES' => 'PH',
        'PRINCE EDWARD ISLAND' => 'CA',
        'PAKISTAN' => 'PK',
        'POLAND' => 'PL',
        'PANAMA' => 'PA',
        'PORTUGAL' => 'PT',
        'PAPUA NEW GUINEA' => 'PG',
        'PUERTO RICO' => 'PR',
        'PALAU' => 'PW',
        'PARAGUAY' => 'PY',
        'QATAR' => 'QA',
        'QUEENSLAND' => 'AU',
        'QUÉBEC (PROVINCE)' => 'CA',
        'SERBIA' => 'RS',
        'RÉUNION' => 'RE',
        'ZIMBABWE' => 'ZW',
        'RHODE ISLAND' => 'US',
        'ROMANIA' => 'RO',
        'RUSSIA (FEDERATION)' => 'RU',
        'RWANDA' => 'RW',
        'SOUTH AFRICA' => 'ZA',
        'SAINT-BARTHÉLEMY' => 'BL',
        'SOUTH CAROLINA' => 'US',
        'SOUTH SUDAN' => 'SS',
        'SOUTH DAKOTA' => 'US',
        'SEYCHELLES' => 'SC',
        'SAO TOME AND PRINCIPE' => 'ST',
        'SENEGAL' => 'SN',
        'SPANISH NORTH AFRICA' => 'ES',
        'SINGAPORE' => 'SG',
        'SUDAN' => 'SD',
        'SIERRA LEONE' => 'SL',
        'SAN MARINO' => 'SM',
        'SINT MAARTEN' => 'SX',
        'SASKATCHEWAN' => 'CA',
        'SOMALIA' => 'SO',
        'SPAIN' => 'ES',
        'ESWATINI' => 'SZ',
        'SURINAM' => 'SR',
        'WESTERN SAHARA' => 'EH',
        'SAINT-MARTIN' => 'MF',
        'SCOTLAND' => 'GB',
        'SAUDI ARABIA' => 'SA',
        'SWEDEN' => 'SE',
        'NAMIBIA' => 'NA',
        'SYRIA' => 'SY',
        'SWITZERLAND' => 'CH',
        'TAJIKISTAN' => 'TJ',
        'TURKS AND CAICOS ISLANDS' => 'TC',
        'TOGO' => 'TG',
        'THAILAND' => 'TH',
        'TUNISIA' => 'TN',
        'TURKMENISTAN' => 'TM',
        'TOKELAU' => 'TK',
        'TASMANIA' => 'AU',
        'TENNESSEE' => 'US',
        'TONGA' => 'TO',
        'TRINIDAD AND TOBAGO' => 'TT',
        'UNITED ARAB EMIRATES' => 'AE',
        'TURKEY' => 'TR',
        'TUVALU' => 'TV',
        'TEXAS' => 'US',
        'TANZANIA' => 'TZ',
        'EGYPT' => 'EG',
        'UNITED STATES MISC. CARIBBEAN ISLANDS' => 'UM',
        'UGANDA' => 'UG',
        'UKRAINE' => 'UA',
        'UNITED STATES MISC. PACIFIC ISLANDS' => 'UM',
        'UTAH' => 'US',
        'BURKINA FASO' => 'BF',
        'URUGUAY' => 'UY',
        'UZBEKISTAN' => 'UZ',
        'VIRGINIA' => 'US',
        'BRITISH VIRGIN ISLANDS' => 'VG',
        'VATICAN CITY' => 'VA',
        'VENEZUELA' => 'VE',
        'VIRGIN ISLANDS OF THE UNITED STATES' => 'VI',
        'VIETNAM' => 'VN',
        'VICTORIA' => 'AU',
        'VERMONT' => 'US',
        'WASHINGTON (STATE)' => 'US',
        'WESTERN AUSTRALIA' => 'AU',
        'WALLIS AND FUTUNA' => 'WF',
        'WISCONSIN' => 'US',
        'WEST BANK OF THE JORDAN RIVER' => 'PS',
        'WAKE ISLAND' => 'UM',
        'WALES' => 'GB',
        'SAMOA' => 'WS',
        'WEST VIRGINIA' => 'US',
        'WYOMING' => 'US',
        'CHRISTMAS ISLAND (INDIAN OCEAN)' => 'CX',
        'COCOS (KEELING) ISLANDS' => 'CC',
        'MALDIVES' => 'MV',
        'SAINT KITTS-NEVIS' => 'KN',
        'MARSHALL ISLANDS' => 'MH',
        'MIDWAY ISLANDS' => 'UM',
        'CORAL SEA ISLANDS TERRITORY' => 'AU',
        'NIUE' => 'NU',
        'SAINT HELENA' => 'SH',
        'SAINT LUCIA' => 'LC',
        'SAINT PIERRE AND MIQUELON' => 'PM',
        'SAINT VINCENT AND THE GRENADINES' => 'VC',
        'NORTH MACEDONIA' => 'MK',
        'NEW SOUTH WALES' => 'AU',
        'SLOVAKIA' => 'SK',
        'NORTHERN TERRITORY' => 'AU',
        'SPRATLY ISLAND' => 'VN',
        'CZECH REPUBLIC' => 'CZ',
        'SOUTH AUSTRALIA' => 'AU',
        'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS' => 'GS',
        'SLOVENIA' => 'SI',
        'CANADA' => 'CA',
        'UNITED KINGDOM' => 'GB',
        'UNITED STATES' => 'US',
        'YEMEN' => 'YE',
        'YUKON TERRITORY' => 'CA',
        'ZAMBIA' => 'ZM'
    ];

    public static function get(?string $input): ?string
    {
        return self::MAPPINGS[mb_strtoupper($input)] ?? null;
    }
}
