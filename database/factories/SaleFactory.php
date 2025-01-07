<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sell_price' => fake()->numberBetween(1, 10000),
            'quantity' => fake()->numberBetween(1, 5),
            'product_id' => Product::factory(),
            'ticket_id' => Ticket::factory(),
        ];
    }
}
