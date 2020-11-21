document.addEventListener("DOMContentLoaded", function () {
    (function($) {
        // 'use strict';
    
        // Main Navigation
        $( '.hamburger-menu' ).on( 'click', function() {
            $(this).toggleClass('open');
            $('.site-navigation').toggleClass('show');
        });
    
        // Hero Slider
        var mySwiper = new Swiper('.hero-slider', {
            slidesPerView: 1,
            spaceBetween: 0,
            autoplay: {
                delay: 5000,
              },
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">0' + (index + 1) + '</span>';
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });
    
        // Cause Slider
        var causesSlider = new Swiper('.causes-slider', {
            slidesPerView: 3,
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView:'auto',
                    spaceBetween: 0,
                },
                268: {
                    slidesPerView:'auto',
                    spaceBetween: 0,
                }
            }
        } );


  
    
        // Accordion & Toggle
        $('.accordion-wrap.type-accordion').collapsible({
            accordion: true,
            contentOpen: 0,
            arrowRclass: 'arrow-r',
            arrowDclass: 'arrow-d'
        });
    
        $('.accordion-wrap .entry-title').on('click', function() {
            $('.accordion-wrap .entry-title').removeClass('active');
            $(this).addClass('active');
        });
    
        // Tabs
        $(function() {
            $('.tab-content:first-child').show();
    
            $('.tab-nav').bind('click', function(e) {
                $this = $(this);
                $tabs = $this.parent().parent().next();
                $target = $($this.data("target"));
                $this.siblings().removeClass('active');
                $target.siblings().css("display", "none");
                $this.addClass('active');
                $target.fadeIn("slow");
            });
    
            $('.tab-nav:first-child').trigger('click');
        });
  
        // Counter
        $(".start-counter").each(function () {
            var counter = $(this);
    
            counter.countTo({
                formatter: function (value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });
        });
            
    })(jQuery);
    
    
    });