;
(function($) {
    "use strict";
    jQuery(document).ready(function($) {
        /*----------------------------------------------------*/
        /*  Main slider js
        /*----------------------------------------------------*/
        function home_main_slider() {
            if ($('.slider').length) {
                jQuery('.slider').camera({
                    height: '1080px',
                    loader: true,
                    navigation: true,
                    autoPlay: false,
                    time: 4000,
                    playPause: false,
                    pagination: false,
                    thumbnails: false,
                    overlayer: true
                });
            }
        }
        //    progress-bar....//

        $(".progress-element").each(function() {
            $(this).waypoint(function() {
                var progressBar = $(".progress-bar");
                progressBar.each(function(indx) {
                    $(this).css("width", $(this).attr("aria-valuenow") + "%")
                })
            }, {
                triggerOnce: true,
                offset: 'bottom-in-view',
            });
        });
        /*about-us area Carousel*/
        function kc_carousel() {

            $('.owl-carousel').each(function() {
                var $carousel = $(this);
                var config = $carousel.data();
                console.log(config);
                //config.dots = $carousel.hasClass('dotData');
                config.navText = ['<i class="fa fa-angle-left"><i>', '<i class="fa fa-angle-right"></i>'];
                $carousel.owlCarousel(config);
                $carousel.on('changed.owl.carousel', function(property) {
                    var current = property.item.index;
                    $(property.target).find(".owl-item").eq(current).find(".caption").each(function(i) {
                        var t = $(this);
                        var style = $(this).attr("style");
                        style = (style == undefined) ? '' : style;
                        var delay = i + 1 * 1000;
                        var animate = t.data('animate');
                        t.attr("style", style +
                            ";-webkit-animation-delay:" + delay + "ms;" + "-moz-animation-delay:" + delay + "ms;" + "-o-animation-delay:" + delay + "ms;" + "animation-delay:" + delay + "ms;"
                        ).addClass('animated ' + animate).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                            $(this).removeClass('animated ' + animate);
                        });

                    })
                })
            });
        }
        kc_carousel();
        // function ClientsCarousel(){
        //     if( $('.clients-logos').length ){

        //         $('.clients-logos').owlCarousel({
        //             loop:true,
        //             margin:0,
        //             autoplay: true,
        //             nav: false,
        //             items: 3,
        //             autoplayTimeout: 3000,
        //             autoplaySpeed:2000,
        //             smartSpeed: 2000,
        //             responsive:{
        //                 0:{
        //                     items:2
        //                 },
        //                 490:{
        //                     items:3
        //                 },
        //             }
        //         })
        //     }
        // }    
        // ClientsCarousel();

        /*Team area Carousel*/
        // function TeamCarousel(){
        //     if( $('.team').length ){
        //         $('.team').owlCarousel({
        //             loop:true,
        //             margin:30,
        //             autoplay: true,
        //             nav: false,
        //             items: 3,
        //             autoplayTimeout: 3000,
        //             autoplaySpeed:3000,
        //             smartSpeed: 3000,
        //             responsive:{
        //                 0:{
        //                     items:1
        //                 },
        //                 430:{
        //                     items:2
        //                 },
        //                 600:{
        //                     items:3
        //                 },
        //             }
        //         })
        //     }
        // }    
        // TeamCarousel();

        function workProject() {
            if ($('#work-gallery').length) {
                $('#work-gallery').imagesLoaded(function() {
                    // images have loaded
                    // Activate isotope in container
                    $("#work-gallery").isotope({
                        itemSelector: ".work-item",
                        layoutMode: 'masonry',
                    });

                    // Add isotope click function
                    $("#work_filter li").on('click', function() {
                        $("#work_filter li").removeClass("active");
                        $(this).addClass("active");

                        var selector = $(this).attr("data-filter");
                        $("#work-gallery").isotope({
                            filter: selector
                        })
                    })
                })
            }
        }
        workProject();

        /*Team area Carousel*/
        function TestimonialCarousel() {
            if ($('.testimonial-slider').length) {
                $('.testimonial-slider').owlCarousel({
                    loop: true,
                    margin: 0,
                    autoplay: false,
                    nav: false,
                    items: 1,
                    dots: true,
                    animateOut: 'fadeOut',
                    transitionStyle: "fade"
                })
            }
        }
        TestimonialCarousel();

        /*---------------scroll-top-js--------*/
        $(".scroll-t").click(function() {
            $("body,html").animate({ "scrollTop": "0" }, 700);
        });

        /*----------------------------
            counter js
        ------------------------------ */
        function counterActivator() {
            if ($('.counter').length) {
                $('.counter').counterUp({
                    delay: 70,
                    time: 1000
                })
            }
        }
        counterActivator();

        function parallaxActivitor() {
            if ($('.parallax-img').length) {
                $(function() {
                    $.stellar({
                        horizontalScrolling: false,
                        verticalOffset: 40
                    });
                });
            }
        }
        parallaxActivitor();
        /*----------------------------
        smoth scroll
        ------------------------------ */
        function smoth_scroll() {
            if ($('.menu li a').length) {
                $('.menu li a[href*="#"]').click(function() {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                        location.hostname == this.hostname) {
                        var $target = $(this.hash);
                        $target = $target.length && $target ||
                            $('[name=' + this.hash.slice(1) + ']');
                        if ($target.length) {
                            var targetOffset = $target.offset().top;
                            $('html,body')
                                .animate({ scrollTop: targetOffset }, 1000);
                            return false;
                        }
                    }
                });
            }
        }
        smoth_scroll();


        /*----------------------------------------------------*/
        /*  Navigation Scroll
        /*----------------------------------------------------*/
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 1055) {
                $("#home").addClass("scrolled");
            } else {
                $("#home").removeClass("scrolled");
            }
        });


        // preloader js
        $(window).load(function() { // makes sure the whole site is loaded
            // $('.loading').fadeOut(); // will first fade out the loading animation
            $('.sampleContainer').delay(150).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(150).css({ 'overflow': 'visible' })
        })

        home_main_slider();

        //wow js
        new WOW().init();
    });

    /*$('.menu-primary-container ul li a').each(function(){
	    $('.menu-primary-container ul li a.napoli-active').removeClass('napoli-active');
	    $(this).addClass('napoli-active');
    });*/

    $('#bs-example-navbar-collapse-1 ul li:first-child a').addClass('napoli-active');
    $('#bs-example-navbar-collapse-1 ul li a').on('click', function(e) {
        $('#bs-example-navbar-collapse-1 ul li a.napoli-active').removeClass('napoli-active');
        $(this).addClass('napoli-active');
    });
})(jQuery);