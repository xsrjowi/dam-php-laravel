<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PlatformFactory extends Factory
{
    /**
     * Define los datos de la tabla de plataformas
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'owner' => fake()-> name(),
        ];
    }
}
