<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100000;

for ($i = 0; $i < $nb - 1; $i++) {
    $IDJoueur = $faker->randomNumber();
    $montant = $faker->randomNumber();

    $db->execDB("INSERT INTO banque_compte ( ID_joueur, montant_compte )
                               VALUES ('$IDJoueur','$montant')");
}
echo 'FINISHED INSERTION DATA';
