<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();

$nb = 100;

for ($i = 0; $i < $nb - 1; $i++) {
    $title =$faker->randomNumber();
    $text =$faker->text(50);
    $category =$faker->text(10);
    $image = $faker->imageUrl(360, 360, 'animals', true, 'dogs', true);

    $db->execDB("INSERT INTO article ( title, text, image, category )
                               VALUES ('$title','$text','$image','$category')");
}
echo 'FINISHED INSERTION DATA';
