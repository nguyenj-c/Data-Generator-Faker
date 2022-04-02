<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100;

for ($i = 0; $i < $nb - 1; $i++) {
    $IDCentre = $faker->randomNumber();
    $IDClub = $faker->randomNumber();
    $IDInfra = $faker->randomNumber();
    $IDItems = $faker->randomNumber();
    $nom = $faker->name();

    $db->execDB("INSERT INTO magasin ( ID_centre, ID_club, ID_infra, ID_items, nom )
                               VALUES ('$IDCentre','$IDClub','$IDInfra','$IDItems','$nom')");
}
echo 'FINISHED INSERTION DATA';
