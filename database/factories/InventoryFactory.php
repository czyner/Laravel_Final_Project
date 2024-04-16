<?php


namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Inventory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Inventory::class;

    public function definition(): array
    {
        return [
            'id' => fake()->randomNumber(),
            'product' => fake()->text(50),
            'quantity' => fake()->randomNumber(),
            'price' => fake()->randomNumber(),
        ];
    }
}

