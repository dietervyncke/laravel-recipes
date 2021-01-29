<?php

namespace Database\Factories;

use App\Models\RecipeIngredient;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeIngredientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RecipeIngredient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(5),
            'amount' => $this->faker->numberBetween(0.25, 500),
            'unit' => $this->faker->randomElement(['kg', 'g', 'l', 'el', 'kl']),
        ];
    }
}
