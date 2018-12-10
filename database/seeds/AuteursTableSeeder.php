<?php

use Illuminate\Database\Seeder;

class AuteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = \Faker\Factory::create('fr_FR');
       for ($i = 0; $i < 40; $i++){
           $auteur = new Citalivres\Auteurs\Auteur();
           $auteur -> nom = $faker -> lastName;
           $auteur -> prenom = $faker -> firstName;
           $auteur -> description = $faker -> text(150);
           $auteur -> invite = $faker -> boolean('50');
           $auteur -> website = 'http://www.'. $faker -> domainName;
           $auteur -> save();
       }
    }
}
