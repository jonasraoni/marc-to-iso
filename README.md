# MARC Countries <=> ISO

PHP mappings from MARC codes/countries to the ISO 3166-1 alpha-2 format and vice-versa.

## Usage

Install the package:

```
composer require jonasraoni/marc-to-iso
```

The package provides 4 separated mappings (just to decrease the amount of bloat data loaded into memory):

- [JonasRaoni\MarcToIso\IsoToMarcCode](src/IsoToMarcCode.php)
- [JonasRaoni\MarcToIso\IsoToMarcName](src/IsoToMarcName.php)
- [JonasRaoni\MarcToIso\MarcCodeToIso](src/MarcCodeToIso.php)
- [JonasRaoni\MarcToIso\MarcNameToIso](src/MarcNameToIso.php)

Choose the one that fits your needs and call the static method `get`, it might return the right mapping or null if it's invalid.

```php
use JonasRaoni\MarcToIso\IsoToMarcCode;

echo 'US = ' . IsoToMarcCode::get('US');
```

## Data Generation

To regenerate the classes, just call the [generate.php](data/generate.php) script (which contains the class template, manual mappings, etc.) and it will overwrite the existing classes.

## Data Source

A [generic list of countries and their respective MARC codes](data/country-codes.csv) is matched against the complete [list of MARC codes](data/marc-codes.csv). The remaining items which didn't match are then manually mapped.

- The list of MARC countries/codes was retrieved from this link: https://www.loc.gov/marc/countries/countries_code.html

The script below was used to extract a .csv out of the link (it should be executed in a Chromium DevTools console panel), when executed it will copy the data as a CSV to your clipboard.

*The deprecated MARC codes were intentionally removed, since some of them might refer to countries that don't exist anymore, and thus not part of the ISO standard.*

```javascript
let rows = ['code;name'];
for(const tr of [...$$('table:nth-of-type(1) tbody tr')].slice(1)) {
    const code = tr.querySelectorAll('td')[0].innerText;
    const name = tr.querySelectorAll('td')[1].innerText;
    if (!code.includes('-')) // deprecated
        rows.push(code.replace('-', '') + ',' + tr.querySelectorAll('td')[1].innerText);
}
copy(rows.join('\n'));
```

- The file [country-codes.csv](data/country-codes.csv) was imported from a [DataHub dataset](https://datahub.io/core/country-codes), I could download it directly using the `generator` script, but due to the ephemerality of links, I've decided to proceed with a hard copy.
