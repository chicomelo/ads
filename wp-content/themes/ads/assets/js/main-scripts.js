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
    


    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
      
    $('.wpcf7-tel').mask(SPMaskBehavior, spOptions);
    $('input[name="cnpj"]').mask('00.000.000/0000-00', {reverse: true});


    /* gerencia form de contato */
    var wpcf7Contato = document.querySelector( '.form-footer .wpcf7' );
    wpcf7Contato.addEventListener( 'wpcf7mailsent', function( event ) {
        $('.formulario-footer .form-footer').hide();
        $('.formulario-footer .msg-sucesso').fadeIn();
    }, false );
    wpcf7Contato.addEventListener( 'wpcf7submit', function( event ) {
        if($('.form-footer .wpcf7-form').hasClass('invalid')){
             $('.form-footer .spinner-mask').hide();
        }
    }, false );

    $('body').on('click', '.formulario-footer .msg-sucesso .btn', function(){
        $('.formulario-footer .msg-sucesso').hide();
        $('.formulario-footer .spinner-mask').hide();
        $('.formulario-footer .form-footer').fadeIn();
    })
    $('body').on('click', '.form-footer .btn-enviar button', function(){
        $('.form-footer .spinner-mask').fadeIn();
    })
    
    /* gerencia form de newsletter */
    var wpcf7News = document.querySelector( '.newsletter__wrapper .wpcf7' );
    wpcf7News.addEventListener( 'wpcf7mailsent', function( event ) {
        $('.newsletter__wrapper .spinner-mask').hide();
        setTimeout(() => {
            $('.newsletter__wrapper .wpcf7-response-output').fadeOut();
        }, 4000);
    }, false );
    wpcf7News.addEventListener( 'wpcf7submit', function( event ) {
        if($('.newsletter__wrapper .wpcf7-form').hasClass('invalid')){
             $('.newsletter__wrapper .spinner-mask').hide();
        }
    }, false );
    $('body').on('click', '.newsletter__wrapper .btn-enviar', function(){
        $('.newsletter__wrapper .spinner-mask').fadeIn();
    })






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
                infinite: true,
                slidesToShow: 7,
                arrows: true,
                dots: false,
                centerMode: true,
                centerPadding: '124px',
                prevArrow: arrowPrev,
                nextArrow: arrowNext,
                initialSlide: 6,
                responsive: [
                    {
                        breakpoint: 1600,
                        settings: {
                            slidesToShow: 5,
                            centerPadding: '78px'
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4,
                            centerPadding: '78px'
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
                infinite: true,
                lazyLoad: 'ondemand',
                slidesToShow: 2,
                arrows: true,
                dots: false,
                centerMode: true,
                centerPadding: '36px',
                prevArrow: arrowPrev,
                nextArrow: arrowNext,
                initialSlide: 4
 
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
        if ($('.slider-nossos-clientes-1 .slider')) {
            $('.slider-nossos-clientes-1 .slider').slick({
                autoplay: true,
                autoplaySpeed: 0,
                speed: 60000,
                arrows: false,
                swipe: false,
                slidesToShow: 1,
                cssEase: 'linear'


            });
        }
        if ($('.slider-nossos-clientes-2 .slider')) {
            $('.slider-nossos-clientes-2 .slider').slick({
                autoplay: true,
                autoplaySpeed: 0,
                speed: 80000,
                arrows: false,
                swipe: false,
                slidesToShow: 1,
                cssEase: 'linear',
                rtl: true
            });
        }
        if ($('.slider-nossos-clientes-3 .slider')) {
            $('.slider-nossos-clientes-3 .slider').slick({
                autoplay: true,
                autoplaySpeed: 0,
                speed: 90000,
                arrows: false,
                swipe: false,
                slidesToShow: 1,
                cssEase: 'linear'

            });
        }
        
    }

    if($('body').hasClass('page-template-template-nossas-solucoes')){

        if ($(window).width() < 960) {
            if ($('.slider-como-funciona .slider')) {
                $('.slider-como-funciona .slider').slick({
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
                                slidesToShow: 2,
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


        if ($('.slider-beneficios .slider')) {
            $('.slider-beneficios .slider').slick({
                centerMode: true,
                lazyLoad: 'ondemand',
                infinite: false,
                slidesToShow: 1,
                arrows: true,
                prevArrow: arrowPrev,
                nextArrow: arrowNext,
                dots: true,
                centerPadding: '264px',
                responsive: [
                    {
                        breakpoint: 1600,
                        settings: {
                            slidesToShow: 1,
                            centerPadding: '192px'
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 1,
                            centerPadding: '92px'
                        }
                    },
                    {
                        breakpoint: 960,
                        settings: {
                            centerMode: false,
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            centerMode: false,
                            slidesToShow: 1,
                            arrows: false
                        }
                    }
                ]
            });
        }

        if ($(window).width() < 960) {
            if ($('.slider-formatos-disponiveis .slider')) {
                $('.slider-formatos-disponiveis .slider').slick({
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
                                slidesToShow: 2,
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
            if ($('.slider-beneficios-oem-ads .slider')) {
                $('.slider-beneficios-oem-ads .slider').slick({
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
                                slidesToShow: 2,
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

    if($('body').hasClass('page-template-template-publishers')){

        if ($(window).width() < 960) {
            if ($('.slider-porque-publisher .slider')) {
                $('.slider-porque-publisher .slider').slick({
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
                                slidesToShow: 2,
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
            if ($('.slider-tecnologias .slider')) {
                $('.slider-tecnologias .slider').slick({
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
                                slidesToShow: 2,
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
            if ($('.slider-formatos-disponiveis-publishers .slider')) {
                $('.slider-formatos-disponiveis-publishers .slider').slick({
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
                                slidesToShow: 2,
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

    if($('body').hasClass('blog')){
        if ($(window).width() < 960) {
            if ($('.slider-post-destaques')) {
                $('.slider-post-destaques').slick({
                    centerMode: false,
                    lazyLoad: 'ondemand',
                    infinite: false,
                    slidesToShow: 1,
                    arrows: false,
                    dots: true
                });
            }
            if ($('.most-read-list .row')) {
                $('.most-read-list .row').slick({
                    centerMode: false,
                    lazyLoad: 'ondemand',
                    infinite: false,
                    slidesToShow: 1,
                    arrows: false,
                    dots: true
                });
            }
            

        }
    }


    $('#load-more').click(function(){
        var button = $(this),
        data = {
            'action': 'loadmore',
            'query': load_more_params.posts,
            'page' : load_more_params.current_page
        };


        $.ajax({
            url : load_more_params.ajaxurl,
            data:data,
            type:'POST',
            beforeSend: function( xhr ){
                button.text('carregando...'); // Mudança de texto no botão enquanto carrega
            },
            success:function(data){
                if( data ) {
                    $('#posts-container').append(data);
                    load_more_params.current_page++;
                    button.html('carregar mais <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" xml:space="preserve"><path d="M18 8h-8V0H8v8H0v2h8v8h2v-8h8z"/></svg>');
                    if ( load_more_params.current_page == load_more_params.max_page )
                        button.remove(); // Remove o botão se for a última página
                } else {
                    button.remove(); // Remove o botão se não houver mais posts
                }
            }
        });
    });


});
