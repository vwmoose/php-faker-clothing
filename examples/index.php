<?php

require_once __DIR__ . '/../vendor/autoload.php';

$faker = \Faker\Factory::create();
$faker->addProvider(new \RauweBieten\PhpFakerClothing\Clothing($faker));

foreach (range(1,10) as $i) {
    print $faker->clothing() . PHP_EOL;
}