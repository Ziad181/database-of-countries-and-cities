# Database Of Countries And Cities.
This package contains a database of all countries and cities in 3 different languages: English, Arabic and French.

- install the package 
`composer require ziad181/database-of-countries-and-cities`


- You can publish using the following command

`php artisan vendor:publish --provider="Ziad181\DatabaseOfCountriesAndCities\CountriesServiceProvider"`

- Export the tables to the database

`php artisan migrate`
 
- Open the DatabaseSeeder file and add the following code:

```php
    $this->call([
            CountrySeeder::class, 
            CitySeeder::class,
    ]);
```
- Export data to the database

`php artisan db:seed`
