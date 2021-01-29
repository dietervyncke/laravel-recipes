<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\RecipeCategory;
use Illuminate\Database\Seeder;

class RecipeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RecipeCategory::factory()
            ->count(5)
            ->has(Recipe::factory()
                ->count(50)
                ->hasIngredients(3)
            )
            ->create()
        ;
    }
}
