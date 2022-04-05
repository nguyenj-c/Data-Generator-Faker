<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100000;

for ($i = 0; $i < $nb - 1; $i++) {
    $IDAccomodationCapacity = $faker->randomNumber();
    $IDItems = $faker->randomNumber();
    $type = $faker->text(10);
    $niveau = $faker->randomDigit();
    $description = $faker->text(50);
    $infraFamily = $faker->text(10);
    $prix = $faker->randomNumber();
    $ressourceConsumption = $faker->randomNumber();

    $db->execDB("INSERT INTO infrastructure ( ID_accomodation_capacity, ID_items, type, niveau, description, infrastructure_family, prix, ressource_consumption )
                               VALUES ('$IDAccomodationCapacity','$IDItems','$type','$niveau','$description','$infraFamily','$prix','$ressourceConsumption')");
}
echo 'FINISHED INSERTION DATA';
