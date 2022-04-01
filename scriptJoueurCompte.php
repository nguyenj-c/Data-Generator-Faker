<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100;

for ($i = 0; $i < $nb - 1; $i++) {
    $IDJoueur = $faker->randomNumber();
    $IDCentre = $faker->randomNumber();
    $IDChevaux = $faker->randomNumber();
    $IDClub = $faker->randomNumber();
    $IDItems = $faker->randomNumber();
    $IDTaches = $faker->randomNumber();
    $userame = $faker->userName();
    $password = $faker->password(50);
    $dateInscription = $faker->dateTime()->format(DATE_RFC3339_EXTENDED);
    $lastConnexion = $faker->dateTime()->format(DATE_RFC3339_EXTENDED);

    $db->execDB("INSERT INTO joueur_compte ( ID_joueur, ID_centre, ID_chevaux, ID_club, ID_items, ID_taches, username, mdp, date_Inscription, last_connexion )
                               VALUES ('$IDJoueur','$IDCentre','$IDChevaux','$IDClub','$IDItems','$IDTaches','$userame','$password','$dateInscription','$lastConnexion')");
}
echo 'FINISHED INSERTION DATA';
