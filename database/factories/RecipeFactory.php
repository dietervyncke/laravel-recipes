<?php

namespace Database\Factories;

use App\Models\Recipe;
use App\Models\RecipeCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(6),
            'slug' => $this->faker->slug(4),
            'is_visible' => $this->faker->boolean(85),
            'preparation' => $this->faker->text(),
            'duration' => $this->faker->time(),
        ];
    }
}
