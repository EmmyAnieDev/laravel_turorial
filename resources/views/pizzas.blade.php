@extends('layouts.layout')

@section('content')
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <div class="content flex flex-col items-center justify-center text-center">
                <h1 class="title m-b-md text-3xl font-bold text-black dark:text-white">
                    Pizza List
                </h1>

                <p class="text-lg text-black dark:text-white"> {{ $names }}</p>
                <p class="text-lg text-black dark:text-white"> {{ $ages }}</p>

                <div class="mt-6 space-y-4">
                    @foreach($pizzas as $pizza)
                        <div class="text-lg text-black dark:text-white">
                            {{ $loop->index +1 }}: {{ $pizza['type'] }} - {{ $pizza['base'] }} 

                            @if($loop->first)
                                <span class="text-green-500">first in the loop</span>
                            @endif

                            @if($loop->last)
                                <span class="text-red-500">last in the loop</span>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
