<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Apartment;
use App\Models\User;
use App\Models\Platform;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ApartmentSeeder::class,
            PlatformSeeder::class,
            PlatformApartmentSeeder::class
        ]);
    }
}
