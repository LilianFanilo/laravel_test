<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::view('/', 'homepage')->name('homepage');
Route::view('/projects', 'projects')->name('projects');

Route::get('/recipes', function () {

    $recipes = [
        1 => ['title' => 'Spaghetti Bolognese', 'ingredients' => ['spaghetti', 'ground beef', 'tomato sauce']],
        2 => ['title' => 'Chicken Curry', 'ingredients' => ['chicken', 'curry powder', 'coconut milk']],
        3 => ['title' => 'Vegetable Stir Fry', 'ingredients' => ['mixed vegetables', 'soy sauce', 'ginger']],
    ];

    $firstname = 'John';
    $lastname = 'Doe';

    return view('recipes.index', [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'recipes' => $recipes,
    ]);
})->name('recipes.index');


Route::get('recipes/{id}', function (int $id) {

    $recipes = [
        1 => ['title' => 'Spaghetti Bolognese', 'ingredients' => ['spaghetti', 'ground beef', 'tomato sauce']],
        2 => ['title' => 'Chicken Curry', 'ingredients' => ['chicken', 'curry powder', 'coconut milk']],
        3 => ['title' => 'Vegetable Stir Fry', 'ingredients' => ['mixed vegetables', 'soy sauce', 'ginger']],
    ];

    $recipe = Arr::get($recipes, $id, ['title' => 'Recipe not found', 'ingredients' => []]);

    return view('recipes.show', [
        'recipe' => $recipe,
    ]);
})->name('recipes.show');
