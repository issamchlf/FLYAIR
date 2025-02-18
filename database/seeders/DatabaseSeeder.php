<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\flight;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    use RefreshDatabase;
    public function run(): void
    {
        $this->call([
            flightSeeder::class,
        ]);
    }
}
