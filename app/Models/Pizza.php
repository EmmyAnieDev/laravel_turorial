<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Laravel automatically connects this model to the "pizzas" table by pluralizing the model name.
class Pizza extends Model
{
    # If you want to be explicit (though unnecessary in this case), you can define the table name
    // protected $table = 'pizzas'; 


    // The casts property automatically converts the toppings attribute to a JSON-encoded string when stored in the database,
    // and also convert the JSON string back to an array when retrieved from the database.
    protected $casts = [ 'toppings' => 'array' ];
}

