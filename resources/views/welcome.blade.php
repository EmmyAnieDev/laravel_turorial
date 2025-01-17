@extends('layouts.layout')

@section('content')
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                <div></div> <!-- Removed the Laravel logo -->

                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a
                                href="{{ url('/home') }}"
                                class="rounded-md px-3 py-2 text-red-500 ring-1 ring-transparent transition hover:text-red/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-red-500 ring-1 ring-transparent transition hover:text-red/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 text-red-500 ring-1 ring-transparent transition hover:text-red/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>

            <div class="content flex flex-col items-center justify-center text-center">
                <img src="/img/pizza-house.png" alt="pizza house logo" class="mb-6 max-w-full h-auto" />
                <div class="text-red-500  m-b-md text-3xl font-bold text-red dark:text-red-500">
                    The North's Best Pizzas
                </div>

                <p class="mssg"> {{ session('mssg') }} </p>

                <a href=" {{ route('pizzas.create') }} " class="create-pizza-link">Create Pizza</a>
            </div>
        </div>
    </div>
</div>
@endsection
