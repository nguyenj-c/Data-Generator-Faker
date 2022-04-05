<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100000;

for ($i = 0; $i < $nb - 1; $i++) {
    $IDInfra = $faker->randomNumber();
    $IDConcours = $faker->randomNumber();
    $capacite = $faker->randomNumber();

    $db->execDB("INSERT INTO club_hippiques ( ID_infra, ID_concours, capacite )
                               VALUES ('$IDInfra','$IDConcours','$capacite')");
}
echo 'FINISHED INSERTION DATA';
