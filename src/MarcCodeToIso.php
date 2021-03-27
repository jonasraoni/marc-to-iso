<?php

declare(strict_types=1);

namespace JonasRaoni\MarcToIso;

class MarcCodeToIso
{
    public const MAPPINGS = [
        'AA' => 'AL',
        'ABC' => 'CA',
        'ACA' => 'AU',
        'AE' => 'DZ',
        'AF' => 'AF',
        'AG' => 'AR',
        'AI' => 'AM',
        'AJ' => 'AZ',
        'AKU' => 'US',
        'ALU' => 'US',
        'AM' => 'AI',
        'AN' => 'AD',
        'AO' => 'AO',
        'AQ' => 'AG',
        'ARU' => 'US',
        'AS' => 'AS',
        'AT' => 'AU',
        'AU' => 'AT',
        'AW' => 'AW',
        'AY' => 'AQ',
        'AZU' => 'US',
        'BA' => 'BH',
        'BB' => 'BB',
        'BCC' => 'CA',
        'BD' => 'BI',
        'BE' => 'BE',
        'BF' => 'BS',
        'BG' => 'BD',
        'BH' => 'BZ',
        'BI' => 'IO',
        'BL' => 'BR',
        'BM' => 'BM',
        'BN' => 'BA',
        'BO' => 'BO',
        'BP' => 'SB',
        'BR' => 'MM',
        'BS' => 'BW',
        'BT' => 'BT',
        'BU' => 'BG',
        'BV' => 'BV',
        'BW' => 'BY',
        'BX' => 'BN',
        'CA' => 'BQ',
        'CAU' => 'US',
        'CB' => 'KH',
        'CC' => 'CN',
        'CD' => 'TD',
        'CE' => 'LK',
        'CF' => 'CG',
        'CG' => 'CD',
        'CH' => 'TW',
        'CI' => 'HR',
        'CJ' => 'KY',
        'CK' => 'CO',
        'CL' => 'CL',
        'CM' => 'CM',
        'CO' => 'CW',
        'COU' => 'US',
        'CQ' => 'KM',
        'CR' => 'CR',
        'CTU' => 'US',
        'CU' => 'CU',
        'CV' => 'CV',
        'CW' => 'CK',
        'CX' => 'CF',
        'CY' => 'CY',
        'DCU' => 'US',
        'DEU' => 'US',
        'DK' => 'DK',
        'DM' => 'BJ',
        'DQ' => 'DM',
        'DR' => 'DO',
        'EA' => 'ER',
        'EC' => 'EC',
        'EG' => 'GQ',
        'EM' => 'TL',
        'ENK' => 'GB',
        'ER' => 'EE',
        'ES' => 'SV',
        'ET' => 'ET',
        'FA' => 'FO',
        'FG' => 'GF',
        'FI' => 'FI',
        'FJ' => 'FJ',
        'FK' => 'FK',
        'FLU' => 'US',
        'FM' => 'FM',
        'FP' => 'PF',
        'FR' => 'FR',
        'FS' => 'TF',
        'FT' => 'DJ',
        'GAU' => 'US',
        'GB' => 'KI',
        'GD' => 'GD',
        'GG' => 'GB',
        'GH' => 'GH',
        'GI' => 'GI',
        'GL' => 'GL',
        'GM' => 'GM',
        'GO' => 'GA',
        'GP' => 'GP',
        'GR' => 'GR',
        'GS' => 'GE',
        'GT' => 'GT',
        'GU' => 'GU',
        'GV' => 'GN',
        'GW' => 'DE',
        'GY' => 'GY',
        'GZ' => 'PS',
        'HIU' => 'US',
        'HM' => 'HM',
        'HO' => 'HN',
        'HT' => 'HT',
        'HU' => 'HU',
        'IAU' => 'US',
        'IC' => 'IS',
        'IDU' => 'US',
        'IE' => 'IE',
        'II' => 'IN',
        'ILU' => 'US',
        'IM' => 'GB',
        'INU' => 'US',
        'IO' => 'ID',
        'IQ' => 'IQ',
        'IR' => 'IR',
        'IS' => 'IL',
        'IT' => 'IT',
        'IV' => 'CI',
        'JA' => 'JP',
        'JE' => 'GB',
        'JI' => 'UM',
        'JM' => 'JM',
        'JO' => 'JO',
        'KE' => 'KE',
        'KG' => 'KG',
        'KN' => 'KP',
        'KO' => 'KR',
        'KSU' => 'US',
        'KU' => 'KW',
        'KYU' => 'US',
        'KZ' => 'KZ',
        'LAU' => 'US',
        'LB' => 'LR',
        'LE' => 'LB',
        'LH' => 'LI',
        'LI' => 'LT',
        'LO' => 'LS',
        'LS' => 'LA',
        'LU' => 'LU',
        'LV' => 'LV',
        'LY' => 'LY',
        'MAU' => 'US',
        'MBC' => 'CA',
        'MC' => 'MC',
        'MDU' => 'US',
        'MEU' => 'US',
        'MF' => 'MU',
        'MG' => 'MG',
        'MIU' => 'US',
        'MJ' => 'MS',
        'MK' => 'OM',
        'ML' => 'ML',
        'MM' => 'MT',
        'MNU' => 'US',
        'MO' => 'ME',
        'MOU' => 'US',
        'MP' => 'MN',
        'MQ' => 'MQ',
        'MR' => 'MA',
        'MSU' => 'US',
        'MTU' => 'US',
        'MU' => 'MR',
        'MV' => 'MD',
        'MW' => 'MW',
        'MX' => 'MX',
        'MY' => 'MY',
        'MZ' => 'MZ',
        'NBU' => 'US',
        'NCU' => 'US',
        'NDU' => 'US',
        'NE' => 'NL',
        'NFC' => 'CA',
        'NG' => 'NE',
        'NHU' => 'US',
        'NIK' => 'GB',
        'NJU' => 'US',
        'NKC' => 'CA',
        'NL' => 'NC',
        'NMU' => 'US',
        'NN' => 'VU',
        'NO' => 'NO',
        'NP' => 'NP',
        'NQ' => 'NI',
        'NR' => 'NG',
        'NSC' => 'CA',
        'NTC' => 'CA',
        'NU' => 'NR',
        'NUC' => 'CA',
        'NVU' => 'US',
        'NW' => 'MP',
        'NX' => 'NF',
        'NYU' => 'US',
        'NZ' => 'NZ',
        'OHU' => 'US',
        'OKU' => 'US',
        'ONC' => 'CA',
        'ORU' => 'US',
        'OT' => 'YT',
        'PAU' => 'US',
        'PC' => 'PN',
        'PE' => 'PE',
        'PG' => 'GW',
        'PH' => 'PH',
        'PIC' => 'CA',
        'PK' => 'PK',
        'PL' => 'PL',
        'PN' => 'PA',
        'PO' => 'PT',
        'PP' => 'PG',
        'PR' => 'PR',
        'PW' => 'PW',
        'PY' => 'PY',
        'QA' => 'QA',
        'QEA' => 'AU',
        'QUC' => 'CA',
        'RB' => 'RS',
        'RE' => 'RE',
        'RH' => 'ZW',
        'RIU' => 'US',
        'RM' => 'RO',
        'RU' => 'RU',
        'RW' => 'RW',
        'SA' => 'ZA',
        'SC' => 'BL',
        'SCU' => 'US',
        'SD' => 'SS',
        'SDU' => 'US',
        'SE' => 'SC',
        'SF' => 'ST',
        'SG' => 'SN',
        'SH' => 'ES',
        'SI' => 'SG',
        'SJ' => 'SD',
        'SL' => 'SL',
        'SM' => 'SM',
        'SN' => 'SX',
        'SNC' => 'CA',
        'SO' => 'SO',
        'SP' => 'ES',
        'SQ' => 'SZ',
        'SR' => 'SR',
        'SS' => 'EH',
        'ST' => 'MF',
        'STK' => 'GB',
        'SU' => 'SA',
        'SW' => 'SE',
        'SX' => 'NA',
        'SY' => 'SY',
        'SZ' => 'CH',
        'TA' => 'TJ',
        'TC' => 'TC',
        'TG' => 'TG',
        'TH' => 'TH',
        'TI' => 'TN',
        'TK' => 'TM',
        'TL' => 'TK',
        'TMA' => 'AU',
        'TNU' => 'US',
        'TO' => 'TO',
        'TR' => 'TT',
        'TS' => 'AE',
        'TU' => 'TR',
        'TV' => 'TV',
        'TXU' => 'US',
        'TZ' => 'TZ',
        'UA' => 'EG',
        'UC' => 'UM',
        'UG' => 'UG',
        'UN' => 'UA',
        'UP' => 'UM',
        'UTU' => 'US',
        'UV' => 'BF',
        'UY' => 'UY',
        'UZ' => 'UZ',
        'VAU' => 'US',
        'VB' => 'VG',
        'VC' => 'VA',
        'VE' => 'VE',
        'VI' => 'VI',
        'VM' => 'VN',
        'VRA' => 'AU',
        'VTU' => 'US',
        'WAU' => 'US',
        'WEA' => 'AU',
        'WF' => 'WF',
        'WIU' => 'US',
        'WJ' => 'PS',
        'WK' => 'UM',
        'WLK' => 'GB',
        'WS' => 'WS',
        'WVU' => 'US',
        'WYU' => 'US',
        'XA' => 'CX',
        'XB' => 'CC',
        'XC' => 'MV',
        'XD' => 'KN',
        'XE' => 'MH',
        'XF' => 'UM',
        'XGA' => 'AU',
        'XH' => 'NU',
        'XJ' => 'SH',
        'XK' => 'LC',
        'XL' => 'PM',
        'XM' => 'VC',
        'XN' => 'MK',
        'XNA' => 'AU',
        'XO' => 'SK',
        'XOA' => 'AU',
        'XP' => 'VN',
        'XR' => 'CZ',
        'XRA' => 'AU',
        'XS' => 'GS',
        'XV' => 'SI',
        'XXC' => 'CA',
        'XXK' => 'GB',
        'XXU' => 'US',
        'YE' => 'YE',
        'YKC' => 'CA',
        'ZA' => 'ZM'
    ];

    public static function get(?string $input): ?string
    {
        return self::MAPPINGS[mb_strtoupper($input ?? '')] ?? null;
    }
}
