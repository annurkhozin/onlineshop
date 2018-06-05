/*
| ----------------------------------------------------------------------------------
| TABLE OF CONTENT
| ----------------------------------------------------------------------------------
-SETTING
-Sticky Header
-Zoom Images
-POST SLIDER
-Disable  Animated
-Dropdown Menu Fade
-Animated Entrances
-SCROLL TOP
-Prefooter
-Enumerator
-ISOTOPE FILTER
-Accordion
-SLIDERS
-Сustomization select
-Animated WOW
*/
$(document).ready(function() {


    "use strict";


    /////////////////////////////////////////////////////////////////
    // SETTING
    /////////////////////////////////////////////////////////////////

    var windowHeight = $(window).height();
    var windowWidth = $(window).width();



    $('ul li:last-child').addClass('li-last');




    var tabletWidth = 767;
    var mobileWidth = 640;
	
	
	  /*SLIDER PRO*/




    if ($('#sliderpro1').length > 0) {

        $('#sliderpro1').sliderPro({
            width: 1600,
            height: 570,
            fade: true,
            arrows: true,
            buttons: false,
            waitForLayers: false,
            thumbnailPointer: false,
            touchSwipe: false,
            autoplay: true,
            autoScaleLayers: true

        });

    }


	

    if ($('#sliderpro2').length > 0) {

        $('#sliderpro2').sliderPro({
            width: 1600,
            height: 1078,
            fade: true,
            arrows: true,
            buttons: false,
            waitForLayers: false,
            thumbnailPointer: false,
            touchSwipe: false,
            autoplay: true,
            autoScaleLayers: true

        });

    }

	
	
    if ($('#sliderpro3').length > 0) {

        $('#sliderpro3').sliderPro({
            width: 870,
            height: 470,
            fade: true,
            arrows: true,
            buttons: false,
            waitForLayers: false,
            thumbnailPointer: false,
            touchSwipe: false,
            autoplay: true,
            autoScaleLayers: true

        });

    }

	
	
	
	
	  ////////////////////////////////////////////  
    // PARALAX
    ///////////////////////////////////////////  

    $(window).scroll(function(e) {
     
		   var scrolled = $(window).scrollTop();
        $('.pix-parallax-elements').css('top', -(scrolled * 0.15) + 'px');

    });
	
	   var scrolled = $(window).scrollTop();
        $('.pix-parallax-elements').css('top', -(scrolled * 0.15) + 'px');
		
		

    $(window).scroll(function(e) {
     
		   var scrolled = $(window).scrollTop();
        $('.home-image-full').css('marginTop', -(scrolled * 1.15) + 'px');

    });

	
	  var scrolled = $(window).scrollTop();
        $('.home-image-full').css('marginTop', -(scrolled * 1.15) + 'px');



    /////////////////////////////////////
    //  Sticky Header
    /////////////////////////////////////



    if (windowWidth > tabletWidth) {



        var headerSticky = $(".layout-theme").data("header");
        var headerTop = $(".layout-theme").data("header-top");


        if (headerSticky.length) {
            $(window).on('scroll', function() {
                var winH = $(window).scrollTop();
                var $pageHeader = $('.header');
                if (winH > headerTop) {

                    $('.yamm').addClass("animated");
                    $('.yamm').addClass("animation-done");
                    $('.yamm').addClass("bounce");
                    $pageHeader.addClass('sticky');



                } else {

                    $('.yamm').removeClass("bounce");
                    $('.yamm').removeClass("animated");
                    $('.yamm').removeClass("animation-done");
                    $pageHeader.removeClass('sticky');

                }


            });
        }

    }



    // Preloader

        var $preloader = $('#page-preloader'),
            $spinner = $preloader.find('.spinner');
        $spinner.fadeOut();
        $preloader.delay(350).fadeOut(800);
    



    /////////////////////////////////////
    //  Zoom Images
    /////////////////////////////////////


    $("a[rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'normal',
        theme: 'light_square',
        slideshow: 3000
    });


    $(".prettyPhoto").prettyPhoto({
        animation_speed: 'normal',
        theme: 'light_square',
        slideshow: 3000
    });



    if (windowWidth < mobileWidth) {


        /////////////////////////////////////
        //  Disable Mobile Animated
        /////////////////////////////////////


        $("body").removeClass("animated-css");


    }


    $('.animated-css .animated:not(.animation-done)').waypoint(function() {



        var animation = $(this).data('animation');

        $(this).addClass('animation-done').addClass(animation);

    }, {
        triggerOnce: true,
        offset: '90%'
    });




    /////////////////////////////////////////////////////////////////
    //   Dropdown Menu Fade
    /////////////////////////////////////////////////////////////////




    $(".yamm .navbar-nav>li").hover(
        function() {
            $('.dropdown-menu', this).fadeIn("fast");
        },
        function() {
            $('.dropdown-menu', this).fadeOut("fast");
        });




    window.prettyPrint && prettyPrint();
    $(document).on('click', '.yamm .dropdown-menu', function(e) {
        e.stopPropagation();
    });




    //////////////////////////////
    // Animated Entrances
    //////////////////////////////



    if (windowWidth > 1200) {


        $(window).scroll(function() {
            $('.animatedEntrance').each(function() {
                var imagePos = $(this).offset().top;

                var topOfWindow = $(window).scrollTop();
                if (imagePos < topOfWindow + 400) {
                    $(this).addClass("slideUp"); // slideUp, slideDown, slideLeft, slideRight, slideExpandUp, expandUp, fadeIn, expandOpen, bigEntrance, hatch
                }
            });
        });

    }




    /////////////////////////////////////////////////////////////////
    //PRICE RANGE
    /////////////////////////////////////////////////////////////////


    if ($('#slider-price').length > 0) {


        $("#slider-price").noUiSlider({
            start: [200, 700],
            step: 10,
            connect: true,
            range: {
                'min': 0,
                'max': 1000
            },

            // Full number format support.
            format: wNumb({
                decimals: 0,
                prefix: '$'
            })
        });

    }
    // Reading/writing + validation from an input? One line.
    $('#slider-price').Link('lower').to($('#slider-price_min'));

    // Write to a span? One line.
    $('#slider-price').Link('upper').to($('#slider-price_max'));




    ////////////////////////////////////////////
    // CAROUSEL PRODUCTS
    ///////////////////////////////////////////



    if ($('.slider-product').length > 0) {

        // The slider being synced must be initialized first
        $('.carousel-product').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 104,
            itemMargin: 20,
            asNavFor: '.slider-product'
        });

        $('.slider-product').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: ".carousel-product"
        });



    }


    /////////////////////////////////////
    // Enumerator
    /////////////////////////////////////


    $(".minus_btn").on('click', function() {
        var inputEl = jQuery(this).parent().children().next();
        var qty = inputEl.val();
        if (jQuery(this).parent().hasClass("minus_btn"))
            qty++;
        else
            qty--;
        if (qty < 0)
            qty = 0;
        inputEl.val(qty);
    })



    $(".plus_btn").on('click', function() {
        var inputEl = jQuery(this).parent().children().next();
        var qty = inputEl.val();
        if (jQuery(this).hasClass("plus_btn"))
            qty++;
        else
            qty--;
        if (qty < 0)
            qty = 0;
        inputEl.val(qty);
    })




    ////////////////////////////////////////////
    // ISOTOPE FILTER
    ///////////////////////////////////////////



    var $container = $('.isotope-filter');

    $container.imagesLoaded(function() {
        $container.isotope({
            // options
            itemSelector: '.isotope-item'
        });
    });

    // filter items when filter link is clicked


    $("#filter a").on('click', function() {
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector
        });
        return false;
    });




    /////////////////////////////////////////////////////////////////
    // Сustomization select
    /////////////////////////////////////////////////////////////////


    $('.jelect').jelect();




    /////////////////////////////////////////////////////////////////
    // Accordion
    /////////////////////////////////////////////////////////////////


    $(".btn-collaps").on('click', function() {
        $(this).parents('.panel-group').children('.panel').removeClass('panel-default');
        $(this).parents('.panel').addClass('panel-default');
    })


    /////////////////////////////////////////////////////////////////
    // Sliders
    /////////////////////////////////////////////////////////////////
    var Core = {

        initialized: false,

        initialize: function() {

            if (this.initialized) return;
            this.initialized = true;

            this.build();

        },

        build: function() {

            // Owl Carousel
            this.initOwlCarousel();
        },
        initOwlCarousel: function(options) {

            $(".enable-owl-carousel").each(function(i) {
                var $owl = $(this);

                var itemsData = $owl.data('items');
                var navigationData = $owl.data('navigation');
                var paginationData = $owl.data('pagination');
                var singleItemData = $owl.data('single-item');
                var autoPlayData = $owl.data('auto-play');
                var transitionStyleData = $owl.data('transition-style');
                var mainSliderData = $owl.data('main-text-animation');
                var afterInitDelay = $owl.data('after-init-delay');
                var stopOnHoverData = $owl.data('stop-on-hover');
                var min480 = $owl.data('min480');
                var min768 = $owl.data('min768');
                var min992 = $owl.data('min992');
                var min1200 = $owl.data('min1200');

                $owl.owlCarousel({
                    navigation: navigationData,
                    pagination: paginationData,
                    singleItem: singleItemData,
                    autoPlay: autoPlayData,
                    transitionStyle: transitionStyleData,
                    stopOnHover: stopOnHoverData,
                    navigationText: ["<i></i>", "<i></i>"],
                    items: itemsData,
                    itemsCustom: [
                        [0, 1],
                        [465, min480],
                        [750, min768],
                        [975, min992],
                        [1185, min1200]
                    ],
                    afterInit: function(elem) {
                        if (mainSliderData) {
                            setTimeout(function() {
                                $('.main-slider_zoomIn').css('visibility', 'visible').removeClass('zoomIn').addClass('zoomIn');
                                $('.main-slider_fadeInLeft').css('visibility', 'visible').removeClass('fadeInLeft').addClass('fadeInLeft');
                                $('.main-slider_fadeInLeftBig').css('visibility', 'visible').removeClass('fadeInLeftBig').addClass('fadeInLeftBig');
                                $('.main-slider_fadeInRightBig').css('visibility', 'visible').removeClass('fadeInRightBig').addClass('fadeInRightBig');
                            }, afterInitDelay);
                        }
                    },
                    beforeMove: function(elem) {
                        if (mainSliderData) {
                            $('.main-slider_zoomIn').css('visibility', 'hidden').removeClass('zoomIn');
                            $('.main-slider_slideInUp').css('visibility', 'hidden').removeClass('slideInUp');
                            $('.main-slider_fadeInLeft').css('visibility', 'hidden').removeClass('fadeInLeft');
                            $('.main-slider_fadeInRight').css('visibility', 'hidden').removeClass('fadeInRight');
                            $('.main-slider_fadeInLeftBig').css('visibility', 'hidden').removeClass('fadeInLeftBig');
                            $('.main-slider_fadeInRightBig').css('visibility', 'hidden').removeClass('fadeInRightBig');
                        }
                    },
                    afterMove: sliderContentAnimate,
                    afterUpdate: sliderContentAnimate,
                });
            });

            function sliderContentAnimate(elem) {
                var $elem = elem;
                var afterMoveDelay = $elem.data('after-move-delay');
                var mainSliderData = $elem.data('main-text-animation');
                if (mainSliderData) {
                    setTimeout(function() {
                        $('.main-slider_zoomIn').css('visibility', 'visible').addClass('zoomIn');
                        $('.main-slider_slideInUp').css('visibility', 'visible').addClass('slideInUp');
                        $('.main-slider_fadeInLeft').css('visibility', 'visible').addClass('fadeInLeft');
                        $('.main-slider_fadeInRight').css('visibility', 'visible').addClass('fadeInRight');
                        $('.main-slider_fadeInLeftBig').css('visibility', 'visible').addClass('fadeInLeftBig');
                        $('.main-slider_fadeInRightBig').css('visibility', 'visible').addClass('fadeInRightBig');
                    }, afterMoveDelay);
                }
            }
        },

    };

    Core.initialize();

});




/////////////////////////////////////////////////////////////////
// Animated WOW
/////////////////////////////////////////////////////////////////
new WOW().init();