<?php

use Illuminate\Database\Seeder;

class EditeursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 20; $i++){
            $editeur = new Citalivres\Auteurs\Editeur();
            $editeur -> nom = $faker -> lastName;
            $editeur -> website = 'http://www.'. $faker -> domainName;
            $editeur -> save();
        }
    }
}
