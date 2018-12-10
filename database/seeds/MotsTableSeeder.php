<?php

use Illuminate\Database\Seeder;

class MotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 2; $i++) {
            $mots = new Citalivres\Mots\Mots();
            $mots->mot = $faker->text(3000);
            $mots->save();
        }
    }
}
