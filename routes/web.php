<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});

// This tells Laravel to use the PizzaController's index method to handle the request.
Route::get('/pizzas', [PizzaController::class, 'index']);

// Add {id} as a wildcard to the URL and pass the id as a parameter to the function, making it accessible within the function.
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);

