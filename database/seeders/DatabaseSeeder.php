<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Moto;
use \App\Models\Item;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        //Moto::factory(10)->create();
        //$this->call(AutoSeeder::class);
        Item::factory(50)->create();
    }
}
