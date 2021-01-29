<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController as RecipeController;

Route::get('/', [RecipeController::class, 'index']);
Route::get('/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');
