<?php

namespace Database\Factories;

use App\Models\Ingredient;
use App\Models\User;
use App\Models\Direction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->name(),
            'description' => $this->faker->text(),
            'ingredients' => Ingredient::factory(),
            'directions' => Direction::factory(),
        ];
    }
}
