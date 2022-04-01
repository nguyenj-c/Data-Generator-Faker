<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();
$nb = 100000;

echo 'FINISHED INSERT DATA';
echo $faker->randomDigit();
