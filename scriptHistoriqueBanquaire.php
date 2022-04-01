<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100;

for ($i = 0; $i < $nb - 1; $i++) {
    $IDJoueur = $faker->randomNumber();
    $IDBanque = $faker->randomNumber();
    $montant = $faker->randomNumber();
    $operation = $faker->text(10);
    $lastConnexion = $faker->dateTime()->format(DATE_RFC3339_EXTENDED);

    $db->execDB("INSERT INTO historiqueBanquaire ( ID_banque, ID_joueur, operation_effetuee, montant, last_connexion )
                               VALUES ('$IDBanque','$IDJoueur','$operation','$montant','$lastConnexion')");
}
echo 'FINISHED INSERTION DATA';
