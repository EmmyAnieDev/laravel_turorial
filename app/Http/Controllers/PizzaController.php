<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{

    # This ensures that all methods in the controller are protected by the auth middleware, requiring the user to be authenticated to access them.
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['create', 'store']);
    // }


    public function index(){

        // passing data to the views
        // get data from db
    
        $pizzas = Pizza::all();
        # $pizzas = Pizza::latest()->get(); return by latest added.
        # $pizzas = Pizza::orderBy('id', 'desc')->get();
        # $pizzas = Pizza::where('name', 'shaun')->get();  // return all pizzas with name "shuan". 
    
        return view('pizzas.index', ['pizzas' => $pizzas]);
       
    }


    public function show($id){

        // $pizza = Pizza::find($id);
        $pizza = Pizza::findorfail($id); // throw error 404 Page if no pizze is retreieved

        return view('pizzas.show', ['pizza' => $pizza]);

    }


    public function create(){

        return view('pizzas.create');

    }


    public function store(){

        $pizza = new Pizza();   // create an object for the Pizza Model class

        $pizza->name = request('name'); // Set the "name" property of the Pizza model from the request input.
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = request('price');
        $pizza->toppings = request('toppings');

        error_log($pizza);

        $pizza->save();    // call save method from the Model class using the "pizza" object.

       return redirect('/')->with('mssg', 'Thanks for ordering!'); // show message to the user.

    }


    public function destroy($id){

       $pizza = Pizza::findorfail($id);
       $pizza->delete();

       return redirect()->route('pizzas.index');

    }

}