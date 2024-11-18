<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <div class="flex-center position-ref full-height">

           <div class="content">
                <h1 class="title m-b-md">
                    Pizza List
                </h1>

                <!-- @for($i = 0; $i < 5; $i++)
                    <p>The value of i is {{ $i }}</p>
                @endfor -->
                
                <!-- @for($i = 0; $i < count($pizzas); $i++)
                    <p>{{ $pizzas[$i]['type'] }}</p>
                @endfor -->

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
    </body>
</html>
