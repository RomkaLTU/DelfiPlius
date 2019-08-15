<div class="dp-bg-gray-1 dp-p-6 md:dp-p-30px lg:dp-p-40px dp-flex dp-flex-wrap dp-text-center md:dp-text-left dp-flex-col md:dp-flex-row">
    <div class="dp-font-medium dp-text-14px md:dp-text-18px dp-flex-2 dp-mb-3">Jeigu turite klausimų, susisiekite:</div>
    <div class="dp-flex-1 lg:dp-pl-16 dp-mb-4 md:dp-mb-0">
        <div>DELFI, UAB</div>
        <div>
            <a class="dp-text-blue-2 dp-underline" href="mailto:plius@delfi.lt">plius@delfi.lt</a>
        </div>
    </div>
    <div class="dp-flex-1">
        <a href="tel:852667720">Tel. 8 (5) 266 77 20</a>
        <div>I-V 9:00-17:00</div>
    </div>
</div>

<div class="dp-tingle-modal-confirm" style="display:none">
    <div class="dp-absolute dp-top-0 dp-right-0 dp-mt-2 dp-mr-3"><i class="dp_close_modal fas fa-times"></i></div>
    <div class="dp-flex dp-border-b dp-border-gray-8 dp-mb-10 dp-pb-4">
        <div>
            <div class="dp-overflow-hidden dp-w-68px dp-h-68px dp-rounded-full dp-mx-auto dp-mb-2">
                <img src="/assets/images/face.jpg" alt="">
            </div>
        </div>
        <div class="dp-ml-6">
            <div class="dp-relative dp-text-16px dp-pl-8">
                <span class="dp-absolute dp-left-0 dp-top-0"><i class="fas fa-quote-right"></i></span>
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur 
                aut odit aut fugit quia voluptas sit asperna.
                <div class="dp-text-16px dp-font-medium dp-mt-2">Vardas Pavardė</div>
            </div>
        </div>
    </div>
    <div class="dp-text-22px dp-text-center">Ar tikrai norite nutraukti mėnesinį autoriaus rėmimą?</div>
    <div class="dp-flex dp-justify-center dp-my-8">
        <div class="dp-px-2">@include('_partials.btn-yellow-small',['text'=>'Atšaukti','id' => 'dp_cancelaction'])</div>
        <div class="dp-px-2">@include('_partials.btn-gray',['text'=>'Nutraukti','id' => 'dp_cancelsub'])</div>
    </div>
    <div class="dp-pt-6 dp-text-center dp-border-t dp-border-gray-8">
        <a href="#" class="dp-text-blue-2 dp-text-16px">Keisti rėmimo sumą</a>
    </div>
</div>

<div class="dp-tingle-modal-off" style="display:none">
    <div class="dp-absolute dp-top-0 dp-right-0 dp-mt-2 dp-mr-3"><i class="dp_close_modal fas fa-times"></i></div>
    <div class="dp-text-22px dp-text-center dp-mb-6">Kas lėmė Jūsų sprendimą atsisakyti prenumeratos?</div>
    <div class="dp-w-full dp-max-w-419px dp-mx-auto">
        <div>
            <label class="dp-custom-radio">
                <input type="radio" name="option">
                <span></span>
                <span class="dp-custom-radio-label">Nekokybiškas turinys</span>
            </label>
        </div>
        <div>
            <label class="dp-custom-radio">
                <input type="radio" name="option">
                <span></span>
                <span class="dp-custom-radio-label">Nekokybiškas turinys</span>
            </label>
        </div>
        <div>
            <label class="dp-custom-radio">
                <input type="radio" name="option">
                <span></span>
                <span class="dp-custom-radio-label">Nekokybiškas turinys</span>
            </label>
        </div>
        <div class="dp-mt-4">
            <input type="text" class="dp-p-3 dp-text-gray-7 dp-rounded-md dp-w-full dp-border dp-border-gray-3" placeholder="Įvardinkite priežastį">
        </div>
        <div class="dp-text-center dp-mt-8">
            @include('_partials.btn-yellow-small',['text'=>'Pateikti','id' => 'dp_submit_poll'])
        </div>
    </div>
</div>