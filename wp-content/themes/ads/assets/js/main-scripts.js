var arrowPrev = '<div class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M29 6.36H3.41L8.07 1.7c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L.29 6.66c-.39.39-.39 1.02 0 1.41l6.36 6.36c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L3.41 8.36H29v-2z" fill="#fff"/></svg></div>';
var arrowNext = '<div class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 14.73" xml:space="preserve"><path d="M0 8.36h25.59l-4.66 4.66c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l6.36-6.36c.39-.39.39-1.02 0-1.41L22.34.3c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.66 4.66H0v1.99z" fill="#fff"/></svg></div>';

jQuery(document).ready(function ($) {

    $('body').on('click', '.menu-hamburger__wrapper', function () {
        $('.menu-principal__wrapper').addClass('active');
    });
    $('body').on('click', '.menu-principal__wrapper .close', function () {
        $('.menu-principal__wrapper').removeClass('active');
    });


    if ($(window).width() > 768) {
        $('body').on('click', '.header-principal .search-icon', function(){
            $('.search__wrapper').addClass('active');
        })
        $('body').on('click', '.search__wrapper .close', function(){
            $('.search__wrapper').removeClass('active');
        })
        

    } else {
        $('body').on('click', '.menu-principal__wrapper .search-icon', function(){
            $('.search__wrapper').addClass('active');
        })
        $('body').on('click', '.search__wrapper .close', function(){
            $('.search__wrapper').removeClass('active');
        })
    }
    

    // redireciona apos enviar e-mail
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = '/contato/enviado';
    }, false );


    if($('body').hasClass('page-template-front-page')){

        if ($(window).width() < 960) {
            if ($('.slider-solucoes .slider')) {
                $('.slider-solucoes .slider').slick({
                    
                    centerMode: false,
                    lazyLoad: 'ondemand',
                    centerPadding: '0',
                    infinite: false,
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                    centerMode: true,
                    responsive: [
                        {
                            breakpoint: 960,
                            settings: {
                                initialSlide: 1,
                                slidesToShow: 2,
                                centerPadding: '60px'
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                initialSlide: 0,
                                centerPadding: '32px'
                            }
                        }
                    ]
                });
            }
            if ($('.slider-caracteristicas .slider')) {
                $('.slider-caracteristicas .slider').slick({
                    
                    centerMode: false,
                    lazyLoad: 'ondemand',
                    centerPadding: '0',
                    infinite: false,
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                    centerMode: true,
                    responsive: [
                        {
                            breakpoint: 960,
                            settings: {
                                initialSlide: 1,
                                slidesToShow: 2,
                                centerPadding: '60px'
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                initialSlide: 0,
                                centerPadding: '32px'
                            }
                        }
                    ]
                });
            }
        }

        if ($('.slider-driven .slider')) {
            $('.slider-driven .slider').slick({
                
                centerMode: false,
                lazyLoad: 'ondemand',
                infinite: false,
                slidesToShow: 6,
                arrows: true,
                dots: false,
                centerMode: true,
                centerPadding: '92px',
                prevArrow: arrowPrev,
                nextArrow: arrowNext,
                initialSlide: 4,
                responsive: [
                    {
                        breakpoint: 1600,
                        settings: {
                            slidesToShow: 5,
                            centerPadding: '64px'
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4,
                            centerPadding: '56px'
                        }
                    },
                    {
                        breakpoint: 960,
                        settings: {
                            slidesToShow: 1,
                            centerPadding: '36px'
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            initialSlide: 2,
                            slidesToShow: 2,
                            centerPadding: '36px'
                        }
                    }
                ]
            });

            
        }

        if ($('.slider-driven-mobile .slider')) {
            $('.slider-driven-mobile .slider').slick({
                
                centerMode: false,
                lazyLoad: 'ondemand',
                infinite: false,
                slidesToShow: 5,
                arrows: true,
                dots: false,
                centerMode: true,
                centerPadding: '36px',
                prevArrow: arrowPrev,
                nextArrow: arrowNext,
                initialSlide: 4,
                responsive: [
                    {
                        breakpoint: 1600,
                        settings: {
                            slidesToShow: 4,
                            centerPadding: '36px'
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4,
                            centerPadding: '36px'
                        }
                    },
                    {
                        breakpoint: 960,
                        settings: {
                            slidesToShow: 1,
                            centerPadding: '36px'
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            centerMode: true,
                            initialSlide: 1,
                            slidesToShow: 2,
                        }
                    }
                ]
            });
        }

        if ($(window).width() < 960) {
            if ($('.slider-fluxo .slider')) {

                $('.slider-fluxo .slider .separador').remove();

                $('.slider-fluxo .slider').slick({
                    
                    centerMode: false,
                    lazyLoad: 'ondemand',
                    infinite: false,
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                    responsive: [
                        {
                            breakpoint: 960,
                            settings: {
                                slidesToShow: 1,
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                            }
                        }
                    ]
                });
            }
        }

    }

    if($('body').hasClass('page-template-template-sobre-nos')){
        
    }

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
