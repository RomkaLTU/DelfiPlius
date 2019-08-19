import Glider from 'glider-js'
import '../../../node_modules/glider-js/glider.min.css'
import tingle from 'tingle.js'
import '../../../node_modules/tingle.js/dist/tingle.min.css'

const glider_el = document.querySelector('.dp-glider');



document.addEventListener("DOMContentLoaded",function(){

    if ( glider_el ) {
        new Glider(document.querySelector('.dp-glider'), {
            slidesToShow: 2.5,
            draggable: true,
            responsive: [
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 4.5,
                        arrows: {
                            prev: '.glider-prev',
                            next: '.glider-next',
                        },
                    },
                },
            ],
        });
    }

    const dpmodal = document.querySelectorAll('.dp-modal');

    const modal = new tingle.modal({
        footer: false,
        stickyFooter: false,
        closeMethods: ['overlay','escape'],
        closeLabel: "Close",
        cssClass: ['dl-custom-modal'],
    });

    const modal_confirmation = new tingle.modal({
        closeMethods: [],
        footer: false,
        stickyFooter: false,
        cssClass: ['dl-custom-modal','dl-custom-modal--confirmation'],
    });

    let checked_el = false;

    dpmodal.forEach( (el) => {
        el.addEventListener('change', function(el){
            if ( !el.target.checked ) {
                checked_el = el.target;

                modal_confirmation.setContent(document.querySelector('.dp-tingle-modal-confirm').innerHTML);
                modal_confirmation.open();
            }
        });
    });

    document.addEventListener('click', function(el){
        if ( el.target.id === 'dp_cancelsub' ) {
            modal.setContent(document.querySelector('.dp-tingle-modal-off').innerHTML);
            modal.open();
        }

        if ( el.target.id === 'dp_cancelaction' ) {
            checked_el.checked = true;
            modal_confirmation.close();
        }

        if ( el.target.id === 'dp_submit_poll' ) {
            modal_confirmation.close();
            modal.close();
        }

        if ( el.target.classList.contains('dp_close_modal') ) {
            modal.close();

            checked_el.checked = true;
            modal_confirmation.close();
        }

        if ( el.target.classList.contains('dp_payment_type') ) {
            const dp_payment_type = document.querySelectorAll('.dp_payment_type');

            dp_payment_type.forEach( el => el.classList.remove('dp-bg-gray-3') );

            el.target.classList.add('dp-bg-gray-3');
        }
    });

    const dp_file_input = document.querySelectorAll('.dp_file_input');

    dp_file_input.forEach(function(el){
        let fakeInput = el.nextSibling.nextSibling;

        el.addEventListener('change', function(event) {
            fakeInput.innerHTML = event.target.files[0].name;  
        });
    });
});
