<?php

use Illuminate\Database\Seeder;

class PartenairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 11; $i++) {
            $partenaires = new Citalivres\Partenaires\Partenaires();
            $partenaires->societe = $faker->lastName();
            $partenaires -> website = 'http://www.'. $faker -> domainName;            $partenaires->save();
        }
    }
}
