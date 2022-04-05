<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100000;

for ($i = 0; $i < $nb - 1; $i++) {
    $IDNiveau = $faker->randomNumber();
    $IDFamille = $faker->randomNumber();
    $prix = $faker->randomNumber();
    $type = $faker->text(20);
    $description = $faker->text(50);

    $db->execDB("INSERT INTO item ( ID_niveau, ID_famille, type, description, prix )
                               VALUES ('$IDNiveau','$IDFamille','$type','$description','$prix')");
}
echo 'FINISHED INSERTION DATA';
