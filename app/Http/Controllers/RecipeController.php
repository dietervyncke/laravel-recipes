<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        return view('recipes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        $relatedRecipes = $recipe->visible()->related()->inRandomOrder()->limit(4)->get();

        return view('recipes.show', compact('recipe', 'relatedRecipes'));
    }
}
