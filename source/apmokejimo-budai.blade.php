@extends('_layouts.fullwidth')

@section('body')
    <h1 class="dp-text-20px dp-text-center lg:dp-text-left lg:dp-text-26px">Išsaugoti mokėjimo būdai</h1>
    <div class="dp-px-4 lg:dp-px-0 dp-mt-4 lg:dp-mt-8">
        <div class="dp-bg-white dp-p-6 lg:dp-p-12">
            <label class="dp-custom-radio-2 dp-block dp-mb-3">
                <input type="radio" name="dp_payment_type" class="dp-absolute dp-invisible" checked>
                <span class="dp-flex dp-items-center dp-cursor-pointer dp-border dp-border-gray-9 dp-rounded-5px dp-bg-white dp-py-2">
                    <span class="dp-flex-1 dp-flex dp-justify-center">
                        <span class="dp-fake-radio dp-flex dp-w-22px dp-h-22px dp-rounded-full dp-border dp-border-gray-4"></span>
                    </span>
                    <span class="dp-flex dp-items-center dp-flex-3 lg:dp-flex-4">
                        <img src="/assets/images/mastercard.png" class="dp-mr-2" alt="">
                        <span class="lg:dp-flex lg:dp-items-center lg:dp-justify-between dp-text-right dp-pr-4 lg:dp-pr-8 dp-w-full">
                            <span class="lg:dp-ml-4">Mastercard</span>
                            <span class="dp-text-right">
                                <span class="dp-block">**** **** **** **** 3254</span>
                                <span class="dp-block">12/2020</span>
                            </span>
                        </span>
                    </span>
                </span>
            </label>
            <label class="dp-custom-radio-2 dp-block dp-mb-3">
                <input type="radio" name="dp_payment_type" class="dp-absolute dp-invisible">
                <span class="dp-flex dp-items-center dp-min-h-60px dp-cursor-pointer dp-border dp-border-gray-9 dp-rounded-5px dp-bg-white dp-py-2">
                    <span class="dp-flex-1 dp-flex dp-justify-center">
                        <span class="dp-fake-radio dp-flex dp-w-22px dp-h-22px dp-rounded-full dp-border dp-border-gray-4"></span>
                    </span>
                    <span class="dp-flex dp-items-center dp-flex-3 lg:dp-flex-4">
                        <img src="/assets/images/telia.png" class="dp-mr-2" alt="">
                        <span class="lg:dp-flex lg:dp-items-center lg:dp-justify-between dp-text-right dp-pr-4 lg:dp-pr-8 dp-w-full">
                            <span class="lg:dp-ml-4">Telia</span>
                            <span class="dp-text-right">
                                <span class="dp-block">+37067607905</span>
                            </span>
                        </span>
                    </span>
                </span>
            </label>
            <label class="dp-custom-radio-2 dp-custom-radio-2--disabled dp-block dp-mb-3">
                <input type="radio" name="dp_payment_type_1" class="dp-absolute dp-invisible" checked>
                <span class="dp-flex dp-items-center dp-min-h-60px dp-cursor-not-allowed dp-border dp-border-gray-9 dp-rounded-5px dp-bg-white dp-py-2">
                    <span class="dp-flex-1 dp-flex dp-justify-center">
                        <span class="dp-fake-radio dp-flex dp-w-22px dp-h-22px dp-rounded-full dp-border dp-border-gray-4"></span>
                    </span>
                    <span class="dp-flex dp-items-center dp-flex-3 lg:dp-flex-4">
                        <img src="/assets/images/mastercard.png" class="dp-mr-2" alt="">
                        <span class="lg:dp-flex lg:dp-items-center lg:dp-justify-between dp-text-right dp-pr-4 lg:dp-pr-8 dp-w-full">
                            <span class="lg:dp-ml-4">Mastercard</span>
                            <span class="dp-text-right">
                                <span class="dp-block">**** **** **** **** 3254</span>
                                <span class="dp-block dp-text-red-1">Šis mokėjimo būdas nebegalimas 12/2018</span>
                            </span>
                        </span>
                    </span>
                </span>
            </label>
            <button class="dp-flex dp-w-full dp-items-center dp-cursor-pointer dp-border dp-border-gray-9 dp-rounded-5px dp-bg-white dp-min-h-60px dp-py-2">
                <span class="dp-flex-1 dp-flex dp-justify-center dp-text-gray-9 dp-text-22px">
                    <i class="far fa-plus"></i>
                </span>
                <span class="dp-flex-3 lg:dp-flex-4 dp-text-left">Pridėti kitą kortelę/mokėjimo būdą</span>
            </button>
        </div>
        <div class="dp-text-16px lg:dp-text-19px dp-text-center dp-mt-8">
            @include('_partials.btn-yellow-big', ['text' => 'Apmokėti 20€'])
        </div>
    </div>
@stop