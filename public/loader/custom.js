(function ($) {
	"use strict";
	var Ayurveda = {
		initialised: false,
		version: 1.0,
		Solar: false,
		init: function () {

			if(!this.initialised) {
				this.initialised = true;
			} else {
				return;
			}

			// Functions Calling
			
			this.loader();
			this.product_slider();
			this.related_slider();
			this.tesimonial_slider();
			this.counter();
			this.quantity();
			this.menu();
			this.menu_toggle();
		},
        // preloader
		loader: function () {
            jQuery(window).on("load", function() {
                jQuery(".pa-ellipsis").fadeOut(), jQuery(".pa-preloader").delay(200).fadeOut("slow")
            });
        },
        // product sider
        product_slider: function () {
            var swiper = new Swiper('.pa-trending-product .swiper-container', {
                slidesPerView:3,
                loop:true,
                spaceBetween:0,
                speed:1500,
                autoplay:true,
                navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    575: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    },
                    767: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                    },
                    992: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                    },
                }
            });
        },
        // related sider
        related_slider: function () {
            var swiper = new Swiper('.pa-related-product .swiper-container', {
                slidesPerView:2,
                loop:true,
                spaceBetween:0,
                speed:1500,
                autoplay:true,
                navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    575: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    },
                    767: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                    },
                    992: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                    },
                }
            });
        },
        // testimonial sider
        tesimonial_slider: function () {
            var swiper = new Swiper('.pa-tesimonial .swiper-container', {
                slidesPerView:1,
                loop:true,
                spaceBetween:0,
                speed:1500,
                autoplay:true,
                navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
                },
            });
        },
        // counter start
        counter: function () {
            if($('.pa-counter-main').length > 0){
                var a = 0;
                $(window).scroll(function() {

                    var oTop = $('#counter').offset().top - window.innerHeight;
                    if (a == 0 && $(window).scrollTop() > oTop) {
                    $('.counter-value').each(function() {
                        var $this = $(this),
                        countTo = $this.attr('data-count');
                        $({
                        countNum: $this.text()
                        }).animate({
                            countNum: countTo
                        },
                        {
                        duration: 5000,
                        easing: 'swing',
                        step: function() {
                        $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                        $this.text(this.countNum);
                        }
                        });
                    });
                    a = 1;
                    }
                });
            };
        },
        // quantity
        quantity: function () {
            $('.pa-add').click(function () {
                if ($(this).prev().val() < 50000) {
                    $(this).prev().val(+$(this).prev().val() + 1);
                }
            });
            $('.pa-sub').click(function () {
                if ($(this).next().val() > 1) {
                    if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
                }
            });
        },
        // mobile menu
        menu: function () {
            if($('.pa-toggle-nav').length > 0){
                $(".pa-toggle-nav").on('click',function(e){
                    event.stopPropagation();
                    $(".pa-nav-bar").toggleClass("pa-open-menu");
                })
                $("body").on('click',function(){
                    $(".pa-nav-bar").removeClass("pa-open-menu");
                })
                $(".pa-menu").on('click',function(){
                    event.stopPropagation();
                })
            };
        },
        menu_toggle: function () {
            // menu two
            $(".pa-menu-tow-child").on('click',function(){
                $(this).find(".pa-submenu-two").slideToggle();
            });
            // menu two stop propagation
            $(".pa-submenu-two").on('click',function(){
                event.stopPropagation();
            });
            // toggle two
            $(".pa-toggle-nav2").on('click',function(e){
                event.stopPropagation();
                $(".pa-header-two").toggleClass("pa-open-menu");
            });
            // toggle
            $(".pa-menu-child").on('click',function(e){
                event.stopPropagation();
                $(this).find(".pa-submenu").slideToggle();
            });
        },
	};	
	Ayurveda.init();
	
})(jQuery);