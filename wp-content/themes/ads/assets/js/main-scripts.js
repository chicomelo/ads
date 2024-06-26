jQuery(document).ready(function ($) {

    $('body').on('click', '.menu-hamburger__wrapper', function () {
        $(this).toggleClass('active');
        $('.menu-principal__wrapper').toggleClass('active');
    });

    // redireciona apos enviar e-mail
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = '/contato/enviado';
    }, false );


});


    // if ($('.lista-unidades')) {
    //     $('.lista-unidades').slick({
    //         centerMode: false,
    //         lazyLoad: 'ondemand',
    //         centerPadding: '0',
    //         infinite: false,
    //         slidesToShow: 5,
    //         responsive: [
    //             {
    //                 breakpoint: 4000,
    //                 settings: "unslick"
    //             },
    //             {
    //                 breakpoint: 1024,
    //                 settings: {
    //                     arrows: false,
    //                     dots: true,
    //                     centerMode: false,
    //                     centerPadding: '40px',
    //                     slidesToShow: 3
    //                 }
    //             },
    //             {
    //                 breakpoint: 768,
    //                 settings: {
    //                     arrows: false,
    //                     dots: true,
    //                     centerMode: false,
    //                     centerPadding: '40px',
    //                     slidesToShow: 2
    //                 }
    //             },
    //             {
    //                 breakpoint: 480,
    //                 settings: {
    //                     arrows: false,
    //                     dots: true,
    //                     centerMode: false,
    //                     centerPadding: '20px',
    //                     slidesToShow: 1
    //                 }
    //             }
    //         ]
    //     });
    // }

    /* sobre */

    // $('.slider-ano').slick({
    //     slidesToShow: 5,
    //     slidesToScroll: 1,
    //     infinite: false,
    //     dots: false,
    //     arrows: false,
    //     centerMode: true,
    //     focusOnSelect: true,
    //     adaptiveHeight: true,
    //     centerPadding: '150px',
    //     responsive: [
    //         {
    //             breakpoint: 1370,
    //             settings: {
    //                 centerPadding: '00px',
    //                 slidesToShow: 5
    //             }
    //         },
    //         {
    //             breakpoint: 1024,
    //             settings: {
    //                 centerPadding: '100px',
    //                 slidesToShow: 3
    //             }
    //         },
    //         {
    //             breakpoint: 768,
    //             settings: {
    //                 centerPadding: '60px',
    //                 slidesToShow: 3
    //             }
    //         },
    //         {
    //             breakpoint: 480,
    //             settings: {
    //                 centerPadding: '0px',
    //                 slidesToShow: 3
    //             }
    //         }
    //     ]
    // });

    /* fim sobre */
