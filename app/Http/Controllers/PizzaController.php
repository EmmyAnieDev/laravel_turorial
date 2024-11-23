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

        // $pizza = Pizza::find($id);
        $pizza = Pizza::findorfail($id); // throw error 404 Page if no pizze is retreieved

        return view('pizzas.show', ['pizza' => $pizza]);

    }


    public function create(){

        return view('pizzas.create');

    }
}