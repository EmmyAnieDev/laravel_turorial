<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){

        // passing data to the views
        // get data from db
    
        $pizzas = [
            ['type' => 'Pepperoni', 'base' => 'Cheesy Crust'],
            ['type' => 'Margherita', 'base' => 'Thin Crust'],
            ['type' => 'BBQ Chicken', 'base' => 'Stuffed Crust'],
        ];
    
        return view(
    
            'pizzas',[
                'pizzas' => $pizzas, 
                'name' => request('name'), // Retrieve the value of the 'name' field from the HTTP request and assign it to the 'names' key.
                'age' => request('age')
            ]

        );
       
    }


    public function show($id){

        // use the $id parameter(variable) to query the db for a record.
        return view('details', ['id' => $id]);

    }
}