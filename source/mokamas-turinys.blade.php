@extends('_layouts.inline')

@section('body')
    <div class="dp-max-w-580px dp-mx-auto dp-shadow-lg dp-mt-20 dp-text-16px">
        <div class="dp-p-8">
            <div class="dp-text-center">Norėdami tęsti turinio skaitymą, turite prisijungti kaip prenumeratorius</div>
            <div class="dp-mt-8 dp-relative">
                <div class="dp-try-premium-heading dp-bg-black dp-text-white dp-px-2 dp-py-1 dp-max-w-188px dp-mx-auto">Išbandykite DELFI PLIUS</div>
            </div>
            <div class="dp-text-center dp-my-8">
                <div class="dp-text-23px dp-font-bold">Pirmas mėnuo – 1€</div>
                <div class="dp-text-18px">po to – 5€/mėn.</div>
            </div>
            <div class="lg:dp-text-18px dp-text-center dp-mt-8">
                @include('_partials.btn-yellow-big', ['text' => 'Registruotis'])
            </div>
            <div class="dp-text-center dp-mt-4">Norėdami tęsti, turite prisijungti. <a href="#" class="dp-text-blue-2">Prisijungti</a></div>
            <div class="dp-flex dp-flex-col lg:dp-flex-row dp-justify-between dp-pt-4 dp-mt-6 dp-border-t dp-border-gray-8">
                <div>
                    <a href="#" class="dp-text-blue-2">Daugiau prenumeratos pasiūlymų</a>
                </div>
                <div>
                    <a href="#" class="dp-text-blue-2">Kodėl verta prenumeruoti?</a>
                </div>
            </div>
        </div>
        <div class="dp-bg-gray-1 dp-py-6 dp-flex dp-items-center dp-justify-center">
            <a href="#">
                <img src="/assets/images/delfip-logo.png" alt="">
            </a>
        </div>
    </div>
@stop