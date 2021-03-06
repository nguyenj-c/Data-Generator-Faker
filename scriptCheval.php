<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100000;

for ($i = 0; $i < $nb - 1; $i++) {
    $IDAttr = $faker->randomNumber();
    $IDEtat = $faker->randomNumber();
    $IDItems = $faker->randomNumber();
    $nom = htmlentities($faker->firstName());
    $race = $faker->text(20);
    $description = $faker->text(50);

    $db->execDB("INSERT INTO cheval ( ID_attribut, ID_etat, ID_items, nom, race, description )
                               VALUES ('$IDAttr','$IDEtat','$IDItems','$nom','$race','$description')");
}
echo 'FINISHED INSERTION DATA';
