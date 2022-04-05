<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100000;

for ($i = 0; $i < $nb - 1; $i++) {
    $IDJoueur = $faker->randomNumber();
    $IDArticle = $faker->randomNumber();
    $date = $faker->date();
    $agenda = $faker->text(45);
    $events = $faker->text(45);

    $db->execDB("INSERT INTO journal ( ID_joueur, ID_article, date, agenda, top_events )
                               VALUES ('$IDJoueur','$IDArticle','$date','$agenda', '$events')");
}
echo 'FINISHED INSERTION DATA';
