# PHP Faker clothing

A pop music provider for 
[fzaninotto/faker](https://github.com/fzaninotto/Faker)

## Installation

Install with composer.  
Add to your composer.json file:

```json
{
  "require": {
    "rauwebieten/php-faker-clothing": "^1.0"
  }
}
```

## Usage

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \RauweBieten\PhpFakerClothing\Clothing($faker));
echo $faker->clothing() . PHP_EOL;
```

See the examples folder for more information

## Example result

See [examples/output/example.md](examples/output/example.md) for 100 generated rows

## Why do you needs this?

To fill a e-commerce database with fake data?
See 
[fzaninotto/faker](https://github.com/fzaninotto/Faker)