@extends('_layouts.fullwidth')

@section('body')
    <h1 class="dp-text-18px lg:dp-text-26px dp-border-b dp-border-gray-8 dp-px-4 lg:dp-px-0 dp-pb-3 dp-mb-6">Lėšų išmokėjimo forma</h1>

    <div class="">
        <div class="dp-text-14px lg:dp-text-16px dp-font-medium dp-px-4 lg:dp-px-0 dp-mb-3">Gavėjo informacija</div>
        <div class="dp-bg-white dp-p-4 lg:dp-p-25px dp-mb-10">
            <div class="dp-flex dp-flex-wrap dp--mx-4">
                <div class="dp-w-full lg:dp-w-1/2 dp-px-4 dp-mb-6">
                    <label>
                        <span class="dp-block dp-text-16px lg:dp-text-18px dp-mb-2 lg:dp-whitespace-no-wrap">Gavėjas (vardas, pavardė/pavadinimas)</span>
                        <input type="text" class="dp-w-full dp-text-gray-7 dp-text-16px dp-px-4 dp-py-3 dp-border dp-border-gray-3 dp-rounded-5px" placeholder="Vardas Pavardė">
                    </label>
                </div>
                <div class="dp-w-full lg:dp-w-1/2 dp-px-4 dp-mb-6">
                    <label>
                        <span class="dp-block dp-text-16px lg:dp-text-18px dp-mb-2 lg:dp-whitespace-no-wrap">Gavėjo sąskaita</span>
                        <input type="text" class="dp-w-full dp-text-gray-7 dp-text-16px dp-px-4 dp-py-3 dp-border dp-border-gray-3 dp-rounded-5px" placeholder="1111 2222 3333 4444">
                    </label>
                </div>
                <div class="dp-w-full lg:dp-w-1/2 dp-px-4 dp-mb-6">
                    <label>
                        <span class="dp-block dp-text-16px lg:dp-text-18px dp-mb-2 lg:dp-whitespace-no-wrap">Suma (sąskaitoje turite 655,55 €)</span>
                        <span class="dp-flex">
                            <input type="text" class="dp-w-full dp-text-gray-7 dp-text-16px dp-px-4 dp-py-3 dp-border dp-border-gray-3 dp-border-r-0 dp-rounded-l-5px">
                            <span class="dp-flex dp-items-center dp-justify-center dp-w-60px dp-text-14px lg:dp-text-18px dp-bg-gray-3 dp-border dp-border-gray-3 dp-border-l-0 dp-rounded-r-5px">Eur</span>
                        </span>
                    </label>
                </div>
                <div class="dp-w-full lg:dp-w-1/2 dp-px-4 dp-mb-6">
                    <label>
                        <span class="dp-block dp-text-16px lg:dp-text-18px dp-mb-2 lg:dp-whitespace-no-wrap">Sąskaitos faktūros numeris </span>
                        <input type="text" class="dp-w-full dp-text-gray-7 dp-text-16px dp-px-4 dp-py-3 dp-border dp-border-gray-3 dp-rounded-5px">
                    </label>
                </div>
                <div class="dp-w-full dp-px-4">
                    <label class="dp-cursor-pointer">
                        <span class="dp-block dp-text-16px lg:dp-text-18px dp-mb-2 lg:dp-whitespace-no-wrap">Sąskaita faktūra</span>
                        <span class="dp-flex">
                            <input type="file" class="dp_file_input dp-absolute dp-invisible">
                            <span class="dp-flex dp-items-center dp-h-50px dp-flex-1 dp-text-gray-7 dp-text-16px dp-px-4 dp-border dp-border-gray-3 dp-border-r-0 dp-rounded-l-5px"></span>
                            <span class="dp-flex dp-items-center dp-justify-center dp-w-126px lg:dp-w-170px dp-text-14px lg:dp-text-16px dp-bg-gray-3 dp-border dp-border-gray-3 dp-border-l-0 dp-rounded-r-5px">
                                <i class="far fa-paperclip"></i> &nbsp;
                                Prisegti failą
                            </span>
                        </span>
                    </label>
                </div>
            </div>
        </div>
        <div class="dp-text-16px lg:dp-text-19px dp-text-center dp-mb-8">
            @include('_partials.btn-yellow-big', ['text' => 'Patvirtinti'])
        </div>
    </div>
@stop