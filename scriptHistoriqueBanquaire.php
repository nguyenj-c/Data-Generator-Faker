<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100000;

for ($i = 0; $i < $nb - 1; $i++) {
    $IDBanque = $faker->randomNumber();
    $montant = $faker->randomNumber();
    $operation = $faker->text(10);
    $lastConnexion = $faker->date('Y-m-d H:i:s');

    $db->execDB("INSERT INTO historiquebanquaire ( ID_banque_compte, operation_effetuee, montant, last_connexion )
                               VALUES ('$IDBanque','$operation','$montant','$lastConnexion')");
}
echo 'FINISHED INSERTION DATA';
