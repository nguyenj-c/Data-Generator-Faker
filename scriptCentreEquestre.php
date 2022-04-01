<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100;

$description = $faker->text(50);

for ($i = 0; $i < $nb - 1; $i++) {
    $IDClub = $faker->randomNumber();
    $IDInfra = $faker->randomNumber();
    $IDTaches = $faker->randomNumber();
    $capacite = $faker->randomNumber();

    $db->execDB("INSERT INTO centre_equestre ( ID_club, ID_infra, ID_taches, capacite )
                               VALUES ('$IDClub','$IDInfra','$IDTaches','$capacite')");
}
echo 'FINISHED INSERTION DATA';
