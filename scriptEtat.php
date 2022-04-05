<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100000;

for ($i = 0; $i < $nb - 1; $i++) {
    $IDProprete = $faker->randomNumber();
    $sante = $faker->randomElement([0,1]);
    $moral = $faker->randomElement([0,1]);
    $stress = $faker->randomElement([0,1]);
    $fatigue = $faker->randomElement([0,1]);
    $faim = $faker->randomElement([0,1]);

    $db->execDB("INSERT INTO etat ( ID_proprete, sante, moral, stress, fatigue, faim )
                               VALUES ('$IDProprete','$sante','$moral','$stress','$fatigue','$faim')");
}
echo 'FINISHED INSERTION DATA';
