<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100000;

for ($i = 0; $i < $nb - 1; $i++) {
    $nom = htmlentities($faker->firstName());

    $db->execDB("INSERT INTO famille_item ( nom )
                               VALUES ('$nom')");
}
echo 'FINISHED INSERTION DATA';
