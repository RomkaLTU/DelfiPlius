@extends('_layouts.master')

@section('body')
    @include('_partials.page-header')
    <div class="dp-px-4">
        <div class="dp-flex dp-items-center dp-justify-center dp-bg-green-2 dp-text-20px dp-py-2 dp-mb-4">
            <div class="dp-text-18px lg:dp-text-23px dp-text-green-1 dp-mr-2"><i class="fas fa-check-circle"></i></div>
            <div>Tavo prenumerata <span class="dp-text-green-1">aktyvuota</span></div>
        </div>
        <div class="dp-bg-gray-1 dp-border dp-border-green-1 dp-p-4 lg:dp-p-30px lg:dp-p-40px dp-mb-8">
            <div class="dp-text-center dp-mb-8">
                <div class="dp-text-16px lg:dp-text-20px dp-font-medium">DELFI PLIUS prenumerata, pirmas mėn. 1,00 € </div>
                <div class="dp-text-14px lg:dp-text-20px">po to – 5 €/mėn., galimybė bet kada atšaukti</div>
            </div>
            <div class="dp-border dp-border-gray-3 dp-bg-white dp-text-center dp-p-20px">
                <div class="dp-separator dp-flex dp-flex-col md:dp-flex-row">
                    <div class="dp-flex-1 dp-text-gray-5 dp-text-14px lg:dp-text-20px dp-flex dp-items-center dp-justify-center dp-border-b dp-border-gray-6 dp-mb-3 dp-pb-3">
                        Galios iki 2019-09-14
                    </div>
                    <div class="dp-flex-1">
                        <div class="dp-text-14px lg:dp-text-20px dp-text-gray-4 dp-font-bold">Automatinis pratęsimas</div>
                        <div class="dp-mt-4 dp-text-14px lg:dp-text-18px">
                            @include('_partials.custom-checkbox',[
                                'label_on' => 'Įjungtas',
                                'label_off' => 'Įjungti',
                                ])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dp-bg-gray-1 dp-py-30px lg:dp-py-40px dp-mb-8">
        <div class="dp-block-heading">Paremk savo mėgstamiausius autorius</div>
        <div class="dp-text-center dp-pb-4 dp-mb-8 dp-pb-10 md:dp-pb-0 dp-border-b dp-border-gray-6 lg:dp-px-6">
            <div class="dp-relative glider-contain">
                <div class="dp-glider">
                    @for($i=0; $i<10; $i++)
                        @if( $i == 2 )
                            <div>
                                <div class="dp-relative dp-bg-white dp-border dp-border-green-1 dp-px-2 dp-py-6 dp-mx-2">
                                    <div class="dp-text-16px dp-text-green-1 dp-absolute dp-top-0 dp-right-0 dp-mt-1 dp-mr-1">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="dp-mb-4">
                                        <div class="dp-overflow-hidden dp-w-68px dp-h-68px dp-rounded-full dp-mx-auto dp-mb-2">
                                            <img src="/assets/images/face.jpg" alt="">
                                        </div>
                                        <div class="dp-font-medium dp-text-16px dp-leading-tight">Vardenis</div>
                                        <div class="dp-font-medium dp-text-16px dp-leading-tight">Pavardenis</div>
                                    </div>
                                    <div class="dp-text-14px">
                                        @include('_partials.btn-yellow-small', ['text' => 'Remti'])
                                    </div>
                                </div>
                            </div>
                        @else
                            <div>
                                <div class="dp-bg-white dp-border dp-border-gray-3 dp-px-2 dp-py-6 dp-mx-2">
                                    <div class="dp-mb-4">
                                        <div class="dp-overflow-hidden dp-w-68px dp-h-68px dp-rounded-full dp-mx-auto dp-mb-2">
                                            <img src="/assets/images/face.jpg" alt="">
                                        </div>
                                        <div class="dp-font-medium dp-text-16px dp-leading-tight">Vardenis</div>
                                        <div class="dp-font-medium dp-text-16px dp-leading-tight">Pavardenis</div>
                                    </div>
                                    <div class="dp-text-14px">
                                        @include('_partials.btn-yellow-small', ['text' => 'Remti'])
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endfor
                </div>
                <button role="button" aria-label="Previous" class="glider-prev"><i class="fas fa-chevron-left"></i></button>
                <button role="button" aria-label="Next" class="glider-next"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
        <div class="dp-block-heading">Autorių rėmimas</div>
        <div class="dp-px-4">
            @for($i=0; $i<4; $i++)
                <div class="dp-bg-white dp-border dp-border-gray-3 dp-text-center md:dp-text-left dp-flex dp-items-center dp-flex-col lg:dp-flex-row dp-w-full dp-mb-2">
                    <div class="dp-flex dp-flex-row-reverse lg:dp-table lg:dp-w-65p dp-w-full dp-p-3 lg:dp-p-0 dp-text-14px lg:dp-text-16px dp-border-b lg:dp-border-none dp-border-gray-3">
                        <div class="dp-flex-1 lg:dp-flex-auto dp-w-full md:dp-table-cell md:dp-align-middle dp-text-center md:dp-w-170px dp-flex dp-items-center dp-justify-end lg:dp-justify-center lg:dp-p-4 md:dp-border-b-0 md:dp-border-r dp-border-gray-3">
                            @include('_partials.custom-checkbox',[
                                'label_on' => 'Įjungtas',
                                'label_off' => 'Įjungti',
                                ])
                        </div>
                        <div class="dp-flex-1 lg:dp-flex-auto md:dp-table-cell lg:dp-p-4 md:dp-border-r md:dp-border-gray-3">
                            <div class="dp-flex dp-items-center">
                                <div class="dp-hidden md:dp-block">
                                    <div class="dp-overflow-hidden dp-w-68px dp-h-68px dp-rounded-full dp-mx-auto dp-mb-2">
                                        <img src="/assets/images/face.jpg" alt="">
                                    </div>
                                </div>
                                <div class="dp-text-left dp-pl-2 md:dp-pl-0">
                                    <div class="dp-font-medium">Vardas Pavardė</div>
                                    <div><span class="dp-text-green-1">Aktyvus</span> • kas mėnesį</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dp-p-3 lg:dp-p-0 lg:dp-table dp-w-full lg:dp-w-35p dp-flex dp-items-center dp-justify-between lg:dp-h-103px">
                        <div class="md:dp-table-cell md:dp-align-middle dp-w-120px lg:dp-px-4 md:dp-py-4 md:dp-border-r md:dp-border-gray-3">
                            <div class="dp-pl-2 lg:dp-pl-0 dp-text-left lg:dp-text-center dp-font-medium dp-text-14px lg:dp-text-16px">20€/mėn</div>
                        </div>
                        <div class="dp-table-cell dp-align-middle dp-w-185px dp-text-right lg:dp-text-center lg:dp-p-4">
                            @include('_partials.btn-yellow-small',['text'=>'Keisti sumą'])
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="dp-text-center dp-mt-8">
            @include('_partials.btn-gray', ['text' => 'Rodyti visus'])
        </div>
    </div>
    <div class="dp-bg-gray-1 dp-p-4 lg:dp-p-30px dp-mb-8">
        <div class="dp-block-heading">Kodėl verta prenumeruoti?</div>
        <div class="dp-bg-white dp-p-12">
            <div class="dp-flex dp-items-center dp-flex-col lg:dp-flex-row dp-mb-8">
                <div class="dp-flex dp-justify-center lg:dp-justify-start dp-w-80px">
                    <img src="/assets/images/icon_1.png" alt="">
                </div>
                <div class="dp-flex-1 dp-mt-3 dp-text-center lg:dp-text-left">
                    <div class="dp-text-14px lg:dp-text-20px dp-font-medium dp-mb-2">Išskirtinis turinys</div>
                    <div class="dp-text-14px lg:dp-text-16px">Įdomūs ir vertingi straipsniai, kuriuos Jums rašo net 20 išskirtinių asmenybių
                         ir nuomonių lyderių. Ypač aktualios temos ir įžvalgos, kurios padės Jums
                         apsispręsti ir priimti geriausius gyvenimo sprendimus</div>
                </div>
            </div>
            <div class="dp-flex dp-items-center dp-flex-col lg:dp-flex-row">
                <div class="dp-flex dp-justify-center lg:dp-justify-start dp-w-80px">
                    <img c src="/assets/images/icon_2.png" alt="">
                </div>
                <div class="dp-flex-1 dp-mt-3 dp-text-center lg:dp-text-left">
                    <div class="dp-text-14px lg:dp-text-20px dp-font-medium dp-mb-2">Mažiau reklamos</div>
                    <div class="dp-text-14px lg:dp-text-16px">Sumažintas reklamos kiekis sukuria patogesnę ir džiugesnę skaitymo patirtį.</div>
                </div>
            </div>
        </div>
        <div class="dp-text-center dp-mt-8">
            @include('_partials.btn-gray', ['text' => 'Plačiau'])
        </div>
    </div>
    @include('_partials.footer')
@endsection
