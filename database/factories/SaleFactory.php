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
        $sell_price = fake()->numberBetween(500, 1000);

        $buy_cost  = fake()->numberBetween(500, $sell_price);

        return [
            'sell_price' => $sell_price,
            'buy_cost' => $buy_cost,
            'quantity' => fake()->numberBetween(1, 100),
            'product_id' => Product::factory(),
            'ticket_id' => Ticket::factory(),
        ];
    }
}
