@extends('layouts.layout')

@section('content')
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <div class="content flex flex-col items-center justify-center text-center">
                <div class="wrapper create-pizza">

                    <h1 class="text-red-700 dark:text-red-500"> Create a new Pizza </h1>

                    <form action=" {{ route('pizzas.index') }}  " method="POST">
                        @csrf <!-- protects the form from cross-site request forgery attacks. -->
                        <label for="name" class="text-red-700 dark:text-red-500">Your name:</label>
                        <input type="text" id="name" name="name">
                        <label for="type" class="text-red-700 dark:text-red-500">Choose pizza type:</label>
                        <select name="type" id="type">
                            <option value="Pepperoni">Pepperoni</option>
                            <option value="Margherita">Margherita</option>
                            <option value="BBQ Chicken">BBQ Chicken</option>
                        </select>
                        <label for="base" class="text-red-700 dark:text-red-500">Choose base type:</label>
                        <select name="base" id="base">
                            <option value="Cheesy Crust">Cheesy Crust</option>
                            <option value="Thin Crust">Thin Crust</option>
                            <option value="Stuffed Crust">Stuffed Crust</option>
                        </select>
                        <fieldset  class="text-red-700 dark:text-red-500">
                            <label>Extra toppings:</label>
                            <input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms <br/>
                            <input type="checkbox" name="toppings[]" value="peppers"> Peppers <br/>
                            <input type="checkbox" name="toppings[]" value="garlic"> Garlic <br/>
                            <input type="checkbox" name="toppings[]" value="olives"> Olives <br/>
                        </fieldset>
                        <label for="price" class="text-red-700 dark:text-red-500">Your price:</label>
                        <input type="number" id="price" name="price">
                        <input type="submit" value="Order Pizza">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection



