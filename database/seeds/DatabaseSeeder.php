<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AuteursTableSeeder::class);
        $this->call(MotsTableSeeder::class);
        $this->call(PartenairesTableSeeder::class);
        $this->call(EditeursTableSeeder::class);
    }
}
