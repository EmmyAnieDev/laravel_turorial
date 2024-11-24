@extends('layouts.layout')

@section('content')
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <div class="content flex flex-col items-center justify-center text-center">

                @if ($pizza)

                    <h1 class="title m-b-md text-black dark:text-white">
                        Ordered Pizza By {{ $pizza->name }}
                    </h1>

                    <p>
                        {{ $pizza->type }} - {{ $pizza->base }} : ${{ $pizza->price }}
                    </p>

                    @if($pizza->toppings != null)

                        <p> Extra Toppings: </p>

                        <ul>
                            @foreach( $pizza->toppings as $topping )

                                <li> {{ $topping }} </li> 
                            
                            @endforeach
                        </ul>

                    @endif

                    <a href="/pizzas" class="back"><- Back to all pizzas</a>
            
                @else
                        No Pizza found for the given Id.
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
