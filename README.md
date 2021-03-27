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

To regenerate the classes, ensure the submodules are updated, then call the [generate.php](data/generate.php) script (contains the class template, manual mappings, etc.) and it will overwrite the existing classes.

The process is simple, a [generic list of countries and their respective MARC codes](https://github.com/datasets/country-codes) is matched against the complete [list of MARC codes](data/marc-codes.csv), and the remaining items, which didn't match, are manually mapped.

## Data Source

- The generic list of countries was retrieved from this link: https://datahub.io/core/country-codes (the .csv is linked to this repository as a submodule).

- The list of MARC countries/codes was manually retrieved from this link: https://www.loc.gov/marc/countries/countries_code.html. The script below was used to extract a .csv out of the link (it should be executed in a Chromium DevTools console panel), when executed it will copy the data as a CSV to your clipboard.

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
