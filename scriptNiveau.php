<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100000;

for ($i = 0; $i < $nb - 1; $i++) {
    $rarete = $faker->text(10);

    $db->execDB("INSERT INTO niveau ( rarete )
                               VALUES ('$rarete')");
}
echo 'FINISHED INSERTION DATA';
