$(document).ready(function(){
    $('#owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        autoWidth: false,           
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        navText: ['<i class="fa fa-arrow-circle-left" title="Anterior"></i>', '<i class="fa  fa-arrow-circle-right" title="Siguiente"></i>'],
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 2,
                margin: 20
            },
            800: {
                items: 3,
                margin: 20
            },
            1000: {
                items: 3,
                margin: 20
            },
            1100: {
                items: 4,
                margin: 20
            }
        }
    });
});
/*---------------------------------
   CABECERA ANIMADA
 ----------------------------------*/
$(window).scroll(function () {

    var nav = $('.encabezado');
    var scroll = $(window).scrollTop();

    if (scroll >= 150) {
        nav.addClass("fondo-menu");
    } else {
        nav.removeClass("fondo-menu");
    }
});


