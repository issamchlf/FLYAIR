<?php

namespace Database\Seeders;

use App\Models\flight;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class flightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        flight::factory(10)->create();
    }
}
