<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PerjalananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Perjalanan::factory(10)->create();
    }
}
