<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apartment>


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apartment>
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>

 */
class ApartmentFactory extends Factory
{
    /**
     * Define los datos de la tabla de apartamentos
     *
     * @return array
     */
    public function definition(): array
    {
        return [

            'address' => fake()->streetAddress(),
            'city' => fake()->city(),
            'postal_code' => fake()->randomNumber(5, true),
            'rented_price' => fake()->randomNumber(4, false),
            'rented' => fake()->boolean(),
            'user_id' => User::all()->random()->id,

        ];
    }
}
