<div class="dp-bg-gray-1 dp-p-30px lg:dp-p-40px dp-flex dp-flex-wrap">
    <div class="dp-font-bold dp-text-18px dp-flex-2 dp-mb-3">Jeigu turite klausimų, susisiekite:</div>
    <div class="dp-flex-1 lg:dp-pl-16">
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

<div class="dp-tingle-modal" style="display:none">
    {{-- <div class="dp-absolute dp-top-0 dp-right-0 dp-mt-2 dp-mr-3"><i class="fas fa-times"></i></div> --}}
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
            @include('_partials.btn-yellow-small',['text'=>'Pateikti'])
        </div>
    </div>
</div>