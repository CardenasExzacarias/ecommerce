<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
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
        $dateTime = fake()->dateTimeBetween('2020-01-01', '2025-12-31');

        return [
            'folio' => fake()->numberBetween(100000000, 999999999),
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
        ];
    }
}
