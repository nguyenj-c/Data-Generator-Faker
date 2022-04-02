<?php

require 'db.php';

require_once 'vendor/autoload.php';

$db = new DB();

$faker = Faker\Factory::create();
$nb = 100000;

for ($i = 0; $i < $nb - 1; $i++) {
    $nom = htmlentities($faker->name());
    $prenom =$faker->firstName();
    $email =$faker->email();
    $profilePicture = $faker->imageUrl(360, 360, 'animals', true, 'dogs', true);
    $website = $faker->url();
    $address = htmlentities($faker->address());
    $phone = $faker->phoneNumber();
    $description = $faker->text(50);
    $ip = $faker->ipv4();
    $sexe = $faker->randomElement(['F', 'H']);
    $date = $faker->date();

    $db->execDB("INSERT INTO joueur ( nom, prenom , email, sexe, birthDate, phone, address, IP_address, profile_picture, description, website )
                               VALUES ('$nom','$prenom','$email','$sexe','$date','$phone','$address','$ip','$profilePicture','$description','$website')");
}
echo 'FINISHED INSERT DATA';
