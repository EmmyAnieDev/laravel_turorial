<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Laravel automatically connects this model to the "pizzas" table by pluralizing the model name.
class Pizza extends Model
{
    # If you want to be explicit (though unnecessary in this case), you can define the table name
    // protected $table = 'pizzas'; 
}

