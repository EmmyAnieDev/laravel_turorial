<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {

    // passing data to the viewS
    // get data from db

    $pizzas = [
        ['type' => 'Pepperoni', 'base' => 'Cheesy Crust'],
        ['type' => 'Margherita', 'base' => 'Thin Crust'],
        ['type' => 'BBQ Chicken', 'base' => 'Stuffed Crust'],
    ];
    

    return view('pizzas',['pizzas' => $pizzas]);
});
