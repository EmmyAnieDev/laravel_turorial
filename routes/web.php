<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {

    // passing data to the viewS
    // get data from db

    $pizzas = [
        'type' => 'Pepperoni',
        'base' => 'chessy crust',
        'price' => 10,
    ];

    return view('pizzas', $pizzas);
});
