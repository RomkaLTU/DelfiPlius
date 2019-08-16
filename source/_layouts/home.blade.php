<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/dp-main.css', 'assets/build') }}">
        <style>
        body,
        html {
            font-size: 16px;
        }
        </style>
    </head>
    <body>
        <div class="dp-container">
            @yield('body')
        </div>
    </body>
</html>
