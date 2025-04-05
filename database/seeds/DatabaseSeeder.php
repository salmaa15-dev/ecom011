<?php

namespace Database\Seeds;

use ProductSeeder;
use CategorySeeder;
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
        $this->call([CategorySeeder::class, ProductSeeder::class]);
    }
}
