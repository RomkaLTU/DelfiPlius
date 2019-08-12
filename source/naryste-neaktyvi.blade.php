@extends('_layouts.master')

@section('body')
    @include('_partials.page-header')
    <div class="dp-flex dp-items-center dp-justify-center dp-bg-red-2 dp-text-20px dp-py-2 dp-mb-4">
        <div class="dp-text-16px lg:dp-text-18px dp-text-red-1 dp-mr-2"><i class="fas fa-times-circle"></i></div>
        <div>Tavo prenumerata <span class="dp-text-red-1">neaktivuota</span></div>
    </div>
    <div class="dp-bg-gray-1 dp-p-30px lg:dp-p-40px dp-mb-8">
        <div class="dp-block-heading">Išbandykite DELFI PLIUS</div>
        <div class="dp-bg-white dp-border dp-border-gray-3 dp-p-47px dp-text-center">
            <div class="">
                <div class="dp-text-20px lg:dp-text-23px dp-font-bold">Pirmas mėnuo – 1€</div>
                <div class="dp-text-18px">po to – 5€/mėn.</div>
            </div>
            <a href="#" class="dp-transition-bg dp-bg-yellow-1 hover:dp-bg-yellow-2 dp-uppercase dp-py-4 dp-px-16 dp-text-14px lg:dp-text-16px dp-font-medium dp-text-center dp-inline-block dp-rounded-full dp-mt-6">Užsakyti</a>
        </div>
        <div class="dp-text-center dp-mt-4 lg:dp-mt-8">
            <a href="#" class="dp-text-blue-2 dp-text-16px lg:dp-text-18px">Kodėl verta prenumeruoti?</a>
        </div>
    </div>
    <div class="dp-bg-gray-1 dp-p-30px lg:dp-p-40px">
        <div class="dp-block-heading">Daugiau prenumeratos pasiūlymų</div>
        <div class="dp-flex dp-flex-col lg:dp-flex-row dp-items-center dp-text-center lg:dp-text-left dp-border dp-border-gray-3 dp-bg-white dp-py-20px dp-mb-2">
            <div class="dp-flex-1 dp-flex dp-items-center dp-mb-3 lg:dp-mb-0">
                
            </div>
            <div class="dp-flex-3 dp-mb-3">
                <div class="dp-font-bold dp-text-18px lg:dp-text-20px">1€ už 1-ąjį mėn.</div>
                <div class="dp-text-16px lg:dp-text-18px">po to – 5€/mėn.</div>
            </div>
            <div class="dp-flex-1 lg:dp-pr-8 dp-flex dp-items-center">
                @include('_partials.btn-yellow-small',['text'=>'Užsakyti'])
            </div>
        </div>
        <div class="dp-flex dp-flex-col lg:dp-flex-row dp-items-center dp-text-center lg:dp-text-left dp-border dp-border-gray-3 dp-bg-white dp-py-20px dp-mb-2">
            <div class="dp-flex-1 dp-flex dp-items-center dp-mb-3 lg:dp-mb-0">
                <div class="dp-bg-black dp-text-white dp-flex dp-items-center dp-justify-center dp-w-69px dp-h-69px dp-rounded-full dp-mx-auto dp-text-20px dp-font-medium">-50%</div>
            </div>
            <div class="dp-flex-3 dp-mb-3">
                <div class="dp-text-16px lg:dp-text-18px dp-line-through">18€</div>
                <div class="dp-font-bold dp-text-18px lg:dp-text-20px">9€ už 3 mėn.</div>
                <div class="dp-text-16px lg:dp-text-18px">po to – 5€/mėn.</div>
            </div>
            <div class="dp-flex-1 lg:dp-pr-8 dp-flex dp-items-center">
                @include('_partials.btn-yellow-small',['text'=>'Užsakyti'])
            </div>
        </div>
        <div class="dp-flex dp-flex-col lg:dp-flex-row dp-items-center dp-text-center lg:dp-text-left dp-border dp-border-gray-3 dp-bg-white dp-py-20px dp-mb-2">
            <div class="dp-flex-1 dp-flex dp-items-center dp-mb-3 lg:dp-mb-0">
                
            </div>
            <div class="dp-flex-3 dp-mb-3">
                <div class="dp-font-bold dp-text-18px lg:dp-text-20px">15€ už 6 mėn.</div>
                <div class="dp-text-16px lg:dp-text-18px">po to – 5€/mėn.</div>
            </div>
            <div class="dp-flex-1 lg:dp-pr-8 dp-flex dp-items-center">
                @include('_partials.btn-yellow-small',['text'=>'Užsakyti'])
            </div>
        </div>
        <div class="dp-text-center dp-text-gray-4 dp-text-18px dp-mt-8">Galimybė bet kada atšaukti prenumeratą</div>
    </div>
    @include('_partials.footer')
@endsection
