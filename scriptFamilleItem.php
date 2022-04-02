<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100;

for ($i = 0; $i < $nb - 1; $i++) {
    $nom = $faker->name();

    $db->execDB("INSERT INTO famille_item ( nom )
                               VALUES ('$nom')");
}
echo 'FINISHED INSERTION DATA';
