@extends('_layouts.fullwidth')

@section('body')
    <div class="dp-flex dp-flex-col lg:dp-flex-row dp-px-4 lg:dp-px-0">
        <label class="dp_payment_type dp-bg-gray-3 dp-mb-1 lg:dp-mb-0 dp-flex-1 dp-cursor-pointer dp-border dp-border-gray-9 lg:dp-rounded-l-5px dp-bg-white dp-py-3 dp-text-center dp-text-18px" for="dp_payment_cc">Banko kortele</label>
        <label class="dp_payment_type dp-flex-1 dp-cursor-pointer dp-border dp-border-gray-9 lg:dp-rounded-r-5px dp-bg-white dp-py-3 dp-text-center dp-text-18px" for="dp_payment_sms">SMS žinute</label>
    </div>
    <div class="dp-mt-8">
        <input name="payment_type" type="radio" id="dp_payment_cc" class="dp-tab-trigger dp-absolute dp-invisible" checked>
        <div class="dp-tab-content">
            <div class="dp-px-4 lg:dp-px-0 dp-text-16px dp-font-medium dp-mb-2">Pateikite savo kredito ar debeto kortelės duomenis</div>
            <div class="dp-bg-white dp-p-8">
                <div class="dp-flex dp-flex-wrap dp--mx-4">
                    <div class="dp-w-full lg:dp-w-1/2 dp-px-4 dp-mb-6">
                        <label>
                            <span class="dp-block dp-text-16px lg:dp-text-18px dp-mb-2 lg:dp-whitespace-no-wrap">Kortelės savininkas</span>
                            <input type="text" class="dp-w-full dp-text-gray-7 dp-text-16px dp-px-4 dp-py-3 dp-border dp-border-gray-3 dp-rounded-5px" placeholder="Vardas Pavardė">
                        </label>
                    </div>
                    <div class="dp-w-full lg:dp-w-1/2 dp-px-4 dp-mb-6">
                        <label>
                            <span class="dp-block dp-text-16px lg:dp-text-18px dp-mb-2 lg:dp-whitespace-no-wrap">Kortelės numeris</span>
                            <input type="text" class="dp-w-full dp-text-gray-7 dp-text-16px dp-px-4 dp-py-3 dp-border dp-border-gray-3 dp-rounded-5px" placeholder="1111 2222 3333 4444">
                        </label>
                    </div>
                    <div class="dp-w-full lg:dp-w-1/2 dp-px-4 dp-mb-6">
                        <label>
                            <span class="dp-block dp-text-16px lg:dp-text-18px dp-mb-2 lg:dp-whitespace-no-wrap">Galiojimo laikas</span>
                            <span class="dp-flex">
                                <span class="dp-flex-1 dp-relative dp-mr-2">
                                    <select class="dp-block dp-appearance-none dp-w-full dp-bg-white dp-border dp-border-gray-3 dp-text-gray-7 dp-py-3 dp-px-4 dp-pr-8 dp-rounded dp-leading-tight focus:dp-outline-none focus:dp-bg-white focus:dp-border-gray-500">
                                        <option>Mėnesis</option>
                                        <option>Sausis</option>
                                        <option>Vasaris</option>
                                        <option>Kovas</option>
                                    </select>
                                    <span class="dp-pointer-events-none dp-absolute dp-inset-y-0 dp-right-0 dp-flex dp-items-center dp-px-2 dp-text-gray-700">
                                        <svg class="dp-fill-current dp-h-4 dp-w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </span>
                                </span>
                                <span class="dp-flex-1 dp-relative dp-ml-2">
                                    <select class="dp-block dp-appearance-none dp-w-full dp-bg-white dp-border dp-border-gray-3 dp-text-gray-7 dp-py-3 dp-px-4 dp-pr-8 dp-rounded dp-leading-tight focus:dp-outline-none focus:dp-bg-white focus:dp-border-gray-500">
                                        <option>Metai</option>
                                        <option>1985</option>
                                        <option>1980</option>
                                        <option>1990</option>
                                        <option>1995</option>
                                    </select>
                                    <span class="dp-pointer-events-none dp-absolute dp-inset-y-0 dp-right-0 dp-flex dp-items-center dp-px-2 dp-text-gray-700">
                                        <svg class="dp-fill-current dp-h-4 dp-w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <div class="dp-w-full lg:dp-w-1/2 dp-px-4 dp-mb-6">
                        <label>
                            <span class="dp-block dp-text-16px lg:dp-text-18px dp-mb-2 lg:dp-whitespace-no-wrap">Šalis</span>
                            <input type="text" class="dp-w-full dp-text-gray-7 dp-text-16px dp-px-4 dp-py-3 dp-border dp-border-gray-3 dp-rounded-5px" placeholder="Lietuva">
                        </label>
                    </div>
                    <div class="dp-w-full lg:dp-w-1/2 dp-px-4 dp-mb-6 dp-relative">
                        <label>
                            <span class="dp-block dp-text-16px lg:dp-text-18px dp-mb-2 lg:dp-whitespace-no-wrap">CVV/CVV2 kodas</span>
                            <input type="number" class="dp-w-full dp-text-gray-7 dp-text-16px dp-px-4 dp-py-3 dp-border dp-border-gray-3 dp-rounded-5px" placeholder="">
                        </label>
                        <a href="#" class="dp-absolute dp-bottom-0 dp-right-0 dp-mb-3 dp-mr-8 lg:dp--mr-98px dp-text-gray-7">Kas yra CVV?</a>
                    </div>
                </div>
                <div class="dp-flex dp-flex-wrap dp--mx-4">
                    <div class="dp-w-full lg:dp-w-1/2 dp-px-4 dp-mb-6">
                        <label class="dp-cursor-pointer dp-flex dp-items-center">
                            <input type="checkbox" class="dp-custom-checkbox dp-absolute dp-invisible">
                            <span class="dp-custom-checkbox--fake dp-w-26px dp-h-26px dp-border dp-border-gray-3 dp-rounded-5px dp-flex dp-items-center dp-justify-center dp-mr-3">
                                <i class="far fa-check"></i>
                            </span>
                            <div>
                                Sutinku su <a href="#" class="dp-underline">Taisyklėmis</a>, ir su <a href="#" class="dp-underline">Privatumo politika</a>
                            </div>
                        </label>
                    </div>
                    <div class="dp-w-full lg:dp-w-1/2 dp-px-4 dp-mb-6">
                        <label class="dp-cursor-pointer dp-flex dp-items-center">
                            <input type="checkbox" class="dp-custom-checkbox dp-absolute dp-invisible">
                            <span class="dp-custom-checkbox--fake dp-w-26px dp-h-26px dp-border dp-border-gray-3 dp-rounded-5px dp-flex dp-items-center dp-justify-center dp-mr-3">
                                <i class="far fa-check"></i>
                            </span>
                            <div>
                                Sutinku gauti rinkodaros pranešimus
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="dp-text-16px lg:dp-text-19px dp-text-center dp-mt-8">
                @include('_partials.btn-yellow-big', ['text' => 'Apmokėti 1,00 €'])
            </div>
        </div>

        <input name="payment_type" type="radio" class="dp-tab-trigger dp-absolute dp-invisible" id="dp_payment_sms">
        <div class="dp-tab-content">
            <div>Apmokėjimas SMS žinute</div>
        </div>
    </div>
@stop