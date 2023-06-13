<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Apartment;
use App\Models\Platform;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

class PlatformApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = app(Generator::class);

        for ($i = 0; $i < 50; $i++) {
            DB::table('platform_apartment')->insert([
                'register_date' => $faker->dateTime(),
                'premium' => $faker->boolean(),
                'apartment_id' => Apartment::all()->random()->id,
                'platform_id' => Platform::all()->random()->id,

            ]);
        }
    }
}
