<?php

require_once __DIR__ . '/../vendor/autoload.php';

$faker = \Faker\Factory::create();
$faker->addProvider(new \Vwmoose\PhpFakerClothing\Clothing($faker));

$output = '';

// add title
$output.= '# Clothing examples' . PHP_EOL . PHP_EOL;

// generate 100 rows with data
foreach (range(1, 100) as $i) {
    $output .= '- ' . $faker->clothing() . PHP_EOL;
}

$output.= PHP_EOL;

// put contents in md file
file_put_contents(__DIR__ . '/output/example.md', $output);
