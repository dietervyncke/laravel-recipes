<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'overview page';
});

Route::get('/{recipe}', function() {
    return 'recipe detail page';
});
