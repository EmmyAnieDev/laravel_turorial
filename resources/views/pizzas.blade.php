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
                <div class="title m-b-md">
                    Pizza List
                </div>
                <h1><?php echo(htmlspecialchars($type)) ?> - <?php echo(htmlspecialchars($base)) ?> - <?php echo(htmlspecialchars($price)) ?> </h1>  <!-- using regular php -->
                <h1>{{ $type }} - {{ $base }} - {{ $price }}</h1>  <!-- using blade syntax -->

                <!-- In Laravel's Blade templating engine, the @ symbol is used to indicate a Blade directive.  -->
                @if($price > 15)
                    <p>The Pizza is expensive</p>
                @elseif($price < 5)
                    <p>The Pizza is cheap</p>
                @else
                    <p>This pizza is normall priced</p>
                @endif

                <!-- This only output if it's false. (somehow like opposite of if statement) -->
                @unless($base == 'chessy crust')
                    <p>you don't have a Chessy crust</p>
                @endunless


                <!-- using PHP directive to input some vanilla PHP inside -->
                @php
                    $name = 'Emmy';
                    echo($name);
                @endphp

           </div>
           
        </div>
    </body>
</html>
