<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){

        // passing data to the views
        // get data from db
    
        $pizzas = Pizza::all();
        # $pizzas = Pizza::latest()->get(); return by latest added.
        # $pizzas = Pizza::orderBy('id', 'desc')->get();
        # $pizzas = Pizza::where('name', 'shaun')->get();  // return all pizzas with name "shuan". 
    
        return view(
    
            'pizzas.index',['pizzas' => $pizzas]

        );
       
    }


    public function show($id){

        // use the $id parameter(variable) to query the db for a record.
        return view('pizzas.show', ['id' => $id]);

    }


    public function create(){

        // use the $id parameter(variable) to query the db for a record.
        return view('pizzas.create');

    }
}