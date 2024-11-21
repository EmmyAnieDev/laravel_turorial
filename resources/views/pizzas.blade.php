
@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <h1 class="title m-b-md">
            Pizza List
        </h1>

        <p> {{ $names }}</p>
        <p> {{ $ages }}</p>

        @foreach($pizzas as $pizza)
            <div> 

                {{ $loop->index +1}}: {{ $pizza['type'] }} - {{ $pizza['base'] }} 

                @if($loop->first)
                    <span>first in the loop</span>
                @endif

                @if($loop->last)
                    <span>last in the loop</span>
                @endif
                
            </div>
        @endforeach
    </div>
    
</div>
@endsection
