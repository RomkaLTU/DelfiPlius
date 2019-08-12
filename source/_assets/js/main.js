import Glider from 'glider-js'
import '../../../node_modules/glider-js/glider.min.css'
import tingle from 'tingle.js'
import '../../../node_modules/tingle.js/dist/tingle.min.css'

document.addEventListener("DOMContentLoaded",function(){
    new Glider(document.querySelector('.dp-glider'), {
        slidesToShow: 4.5,
        draggable: true,
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
        },
    });

    const dpmodal = document.querySelectorAll('.dp-modal');

    const modal = new tingle.modal({
        footer: false,
        stickyFooter: false,
        closeMethods: ['overlay','escape'],
        closeLabel: "Close",
        cssClass: ['dl-custom-modal'],
    });

    dpmodal.forEach( (el) => {
        el.addEventListener('click', function(){
            modal.setContent(document.querySelector('.dp-tingle-modal').innerHTML);
            modal.open();
        });
    });
});
