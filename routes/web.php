<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


// This tells Laravel to use the PizzaController's index method to handle the request.
// When a request comes in for the (/pizzas) the routes files knows to use the PizzaController and fires the index action/method.
Route::get('/pizzas', [PizzaController::class, 'index']); // Referencing the Controller inside the Route.

Route::get('/pizzas/create', [PizzaController::class, 'create']);

// Add {id} as a wildcard to the URL and pass the id as a parameter to the function, making it accessible within the function.
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);

Route::post('/pizzas', [PizzaController::class, 'store']); 

Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']); 



// Disables user registration routes while keeping other authentication routes like login and password reset enabled.
Auth::routes(["register" => false]);

Route::get('/home', [HomeController::class, 'index']);
