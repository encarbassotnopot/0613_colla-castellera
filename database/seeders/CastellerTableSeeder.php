<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CastellerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casteller::factory(5)->create();

    }
}
