<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Singleton</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <p>{{ $a->increment() }}</p>
                <p>{{ $b->increment() }}</p>
                <p>{{ $a->increment() }}</p>
            </div>
        </div>
    </body>
</html>

