@extends('layouts.layout')

@section('content')
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <div class="content flex flex-col items-center justify-center text-center">
                <h1 class="title m-b-md text-3xl font-bold text-black dark:text-white">

                    Pizza List - {{ $id }}

                </h1>
            </div>
        </div>
    </div>
</div>
@endsection
