<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100000;

for ($i = 0; $i < $nb - 1; $i++) {
    $IDCheval = $faker->randomNumber();
    $maladies = $faker->randomElement([0,1]);
    $parasites = $faker->randomElement([0,1]);
    $blessures = $faker->randomElement([0,1]);

    $db->execDB("INSERT INTO proprete ( ID_cheval, maladies, parasites, blessures )
                               VALUES ('$IDCheval','$maladies','$parasites','$blessures')");
}
echo 'FINISHED INSERTION DATA';
