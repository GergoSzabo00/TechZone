<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->unique()->word(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(1, 20, 30),
            'quantity_in_stock' => $this->faker->numberBetween(1, 10)
        ];
    }
}
