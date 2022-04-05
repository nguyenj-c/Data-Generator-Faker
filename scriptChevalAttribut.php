<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100000;

for ($i = 0; $i < $nb - 1; $i++) {
    $resistance = $faker->randomElement([0,1]);
    $endurance = $faker->randomElement([0,1]);
    $detente = $faker->randomElement([0,1]);
    $vitesse = $faker->randomElement([0,1]);
    $sociabilite = $faker->randomElement([0,1]);
    $intelligence = $faker->randomElement([0,1]);
    $temperament = $faker->randomElement([0,1]);

    $db->execDB("INSERT INTO cheval_attribut ( resistance, endurance, detente, vitesse, sociabilite, intelligence, temperament )
                               VALUES ('$resistance','$endurance','$detente','$vitesse','$sociabilite','$intelligence','$temperament')");
}
echo 'FINISHED INSERTION DATA';
