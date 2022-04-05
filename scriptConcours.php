<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100000;

for ($i = 0; $i < $nb - 1; $i++) {
    $IDItem = $faker->randomNumber();
    $IDInfra = $faker->randomNumber();
    $dateD = $faker->date();
    $dateF = $faker->date();

    $db->execDB("INSERT INTO concours( ID_Item, ID_infra , date_deb, date_fin )
                               VALUES ('$IDItem','$IDInfra','$dateD','$dateF')");
}
echo 'FINISHED INSERTION DATA';
