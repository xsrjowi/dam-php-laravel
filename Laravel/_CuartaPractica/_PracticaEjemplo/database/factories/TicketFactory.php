<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ticket;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'titulo' => fake()-> name(),
                'nombre' => fake()-> name(),
                'fotos' =>fake()-> imageUrl(),
                'descripcion' =>fake()->randomElement(['alta', 'media', 'baja']),
        ];
    }
}
