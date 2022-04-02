<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100;

for ($i = 0; $i < $nb - 1; $i++) {
    $action = $faker->text(30);
    $frequence = $faker->text(10);

    $db->execDB("INSERT INTO tache_auto ( action, frequence )
                               VALUES ('$action','$frequence')");
}
echo 'FINISHED INSERTION DATA';
