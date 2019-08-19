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
        <div class="dp-container dp-relative dp-bg-gray-1">
            <div class="dp-flex dp-justify-between dp-px-4 dp-pt-6 dp-mb-4 lg:dp-mb-0">
                <div class="dp-flex dp-flex-col dp-justify-between lg:dp-absolute lg:dp-left-0 lg:dp-top-0 lg:dp-ml-19px lg:dp-mt-30px">
                    <div class="dp-mb-6">
                        <a href="#">
                            <img src="/assets/images/delfip-logo.png" alt="Delfi plius">
                        </a>
                    </div>
                    <div class="dp-text-13px lg:dp-text-16px dp-text-gray-7">
                        <a class="dp-flex dp-items-center" href="#">
                            <span class="dp-text-10px lg:dp-text-12px lg:dp-mt-1 dp-mr-1"><i class="fa fa-chevron-left"></i></span> Grįžti atgal
                        </a>
                    </div>
                </div>
                <div class="lg:dp-absolute lg:dp-right-0 lg:dp-top-0 lg:dp-mr-19px lg:dp-mt-30px dp-text-right dp-text-14px lg:dp-text-16px">
                    <div class="dp-flex dp-justify-end dp-mb-2">
                        <div class="dp-bg-gray-3 dp-w-35px lg:dp-w-53px dp-h-35px lg:dp-h-53px dp-rounded-full dp-text-16px lg:dp-text-24px dp-flex dp-items-center dp-justify-center">
                            <i class="fas fa-phone"></i>
                        </div>
                    </div>
                    <div class="dp-font-medium">Pagalbos telefonas</div>
                    <div>+370 6000 00 000</div>
                    <div>I-V 9:00-17:00</div>
                </div>
            </div>
            <div class="dp-container-inner">
                @yield('body')
            </div>
        </div>
        <div class="dp-container dp-mt-4">
            @include('_partials.tu-pasirinkai', [])
        </div>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
