<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/build/css/fa/all.min.css">
        <link rel="stylesheet" href="{{ mix('css/dp-main.css', 'assets/build') }}">
    </head>
    <body>
        <div class="dp-container">
            <div class="lg:dp-flex lg:dp-flex-wrap">
                <div class="dp-hidden lg:dp-block dp-flex-1 dp-max-w-294px dp-mr-40px">
                    <div class="dp-fixed dp-w-full dp-max-w-294px dp-bg-gray-1 dp-h-screen"></div>
                </div>
                <div class="relative dp-flex-1 dp-max-w-868px xl:dp-px-0 dp-py-8">
                    @yield('body')
                </div>
            </div>
        </div>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
