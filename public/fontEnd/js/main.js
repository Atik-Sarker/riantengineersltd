jQuery(document).ready(function () {
    "use strict";
   
    
    $('.main-slider').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        nav: true,
        autoplayHoverPause: false,
        margin: 0,
        smartSpeed: 1000,
        autoplayTimeout: 5000,
        mouseDrag: true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    });

    var owl = $('.main-slider');
    owl.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 500,

    });
    owl.on('changed.owl.carousel', function (event) {
        var item = event.item.index - 2; // Position of the current item
        $('h2').removeClass('animated bounceInLeft');
        $('p').removeClass('animated fadeInUp');
        $('a').removeClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('h2').addClass('animated bounceInLeft');
        $('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('a').addClass('animated fadeInUp');
    });

    // ------------------main-slider end----------------------

    $('.service-inner').owlCarousel({
        loop: true,
        dots: false,
        autoplay: false,
        nav: true,
        autoplayHoverPause: false,
        margin: 30,
        smartSpeed: 1000,
        autoplayTimeout: 5000,
        mouseDrag: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],

        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            768: {
                items: 2,
                nav: false
            },
            992: {
                items: 3,
                nav: true,
                loop: true,
            },
            1192: {
                items: 3,
                nav: true,
                loop: true,
            }
        }

    });

// ------------------Our Service-slider end----------------------
    
    $('.client-slider').owlCarousel({
        loop: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: false,
        margin: 10,
        smartSpeed: 1000,
        autoplayTimeout: 6000,
        mouseDrag: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],

        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            768: {
                items: 2,
                nav: false
            },
            992: {
                items: 3,
                nav: false,
                loop: true,
            },
            1192: {
                items: 3,
                nav: false,
                loop: true,
            }
        }

    });

// ------------------client-slider end----------------------
    
    $('.partner-slider ').owlCarousel({
        loop: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: false,
        margin: 10,
        smartSpeed: 1000,
        autoplayTimeout: 8000,
        mouseDrag: true,
        animateIn: 'slideInLeft',
        animateOut: 'slideOutRight',
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],

        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            768: {
                items: 2,
                nav: false
            },
            992: {
                items: 3,
                nav: false,
                loop: true,
            },
            1192: {
                items: 3,
                nav: false,
                loop: true,
            }
        }

    });
        
    $('.comon-slider').owlCarousel({
        loop: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: false,
        margin: 10,
        smartSpeed: 1000,
        autoplayTimeout: 8000,
        mouseDrag: true,
        animateIn: 'slideInLeft',
        animateOut: 'slideOutRight',
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],

        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            768: {
                items: 2,
                nav: false
            },
            992: {
                items: 3,
                nav: false,
                loop: true,
            },
            1192: {
                items: 3,
                nav: false,
                loop: true,
            }
        }

    });
    
// ------------------partner-slider end----------------------
    
     $('#lightgallery').lightGallery();
    //    lightbox js end
    
     jQuery('header .mobile-menu').meanmenu();
    //    meanmenu js end
});






