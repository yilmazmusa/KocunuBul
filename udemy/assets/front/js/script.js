jQuery(document).ready(function () {
    /**************swipe menu***************/
    jQuery('#page').click(function () {
        if (jQuery(this).parents('body').hasClass('ind')) {
            jQuery(this).parents('body').removeClass('ind');
            return false
        }
    })
    jQuery('.swipe-control').click(function () {
        if (jQuery(this).parents('body').hasClass('ind')) {
            jQuery(this).parents('body').removeClass('ind');
            return false
        }
        else {
            jQuery(this).parents('body').addClass('ind');
            return false
        }
    })
///****************BACK TO TOP*********************/
    $().UItoTop({easingType: 'easeOutQuart'});

    /************************************************************************************************shadow height*****************************************************************************************************/
    var sect = 1;
    $(document).ready(function () {
        $('.swipe').height($(window).height() - 50);

        $(window).resize(function () {
            $('.swipe').height($(window).height() - 50);
        });

        var sects = $('.swipe').size();

    });
    /**************lazy load***************/
    jQuery("img.lazy").unveil(1, function () {
        jQuery(this).load(function () {
            jQuery(this).animate({'opacity': 1}, 700);
        });
    });

    /************product gallery on product page***********/
    $("#gallery_zoom").elevateZoom({
        gallery: 'image-additional',
        cursor: 'pointer',
        zoomType: 'inner',
        galleryActiveClass: 'active',
        imageCrossfade: true
    });
//pass the images to Fancybox
    $("#gallery_zoom").bind("click", function (e) {
        var ez = $('#gallery_zoom').data('elevateZoom');
        $.fancybox(ez.getGalleryList());
        return false;
    });
    $('#image-additional').bxSlider({
        mode: 'vertical',
        pager: false,
        controls: true,
        slideMargin: 13,
        minSlides: 6,
        maxSlides: 6,
        slideWidth: 88,
        nextText: '<i class="fa fa-chevron-down"></i>',
        prevText: '<i class="fa fa-chevron-up"></i>',
        infiniteLoop: false,
        adaptiveHeight: true,
        moveSlides: 1
    });
    $('#gallery').bxSlider({
        pager: false,
        controls: true,
        minSlides: 1,
        maxSlides: 1,
        infiniteLoop: false,
        moveSlides: 1
    });

    /**********************************************************add icon aside li *****************************************************************************/
    $(document).ready(function () {
        $('column').find('.box-category .menu  li li a').prepend('<i class="fa fa-angle-right "></i>');
        $('#content').find('ul.list-unstyled li a').prepend('<i class="fa fa-angle-right "></i>');
        $('.site-map-page #content ').find(' ul li a').prepend('<i class="fa fa-angle-right "></i>');
        $('.manufacturer-content ').find(' div>a').prepend('<i class="fa fa-angle-right "></i>');
        $('footer .col-sm-3 ').find(' li>a').prepend('<i class="fa fa-chevron-right"></i>');
        $('#tm_menu div > ul > li > ul  ').find(' li>a').prepend('<i class="fa fa-chevron-right"></i>');
        $('.box.info .box-content ul li  ').find('a').prepend('<i class="fa fa-chevron-right"></i>');
    });
    /******************* category name height**************************/
    (function ($) {
        $.fn.equalHeights = function (minHeight, maxHeight) {
            tallest = (minHeight) ? minHeight : 0;
            this.each(function () {
                if ($(this).height() > tallest) {
                    tallest = $(this).height()
                }
            });
            if ((maxHeight) && tallest > maxHeight)tallest = maxHeight;
            return this.each(function () {
                $(this).height(tallest)
            })
        }
    })(jQuery)
    $(window).load(function () {
        if ($("#content .product-grid .name").length) {
            $("#content .product-grid .name").equalHeights()
        }
    });
    /**************related name height ******************/
    (function ($) {
        $.fn.equalHeights = function (minHeight, maxHeight) {
            tallest = (minHeight) ? minHeight : 0;
            this.each(function () {
                if ($(this).height() > tallest) {
                    tallest = $(this).height()
                }
            });
            if ((maxHeight) && tallest > maxHeight)tallest = maxHeight;
            return this.each(function () {
                $(this).height(tallest)
            })
        }
    })(jQuery)
    $(window).load(function () {
        if ($(".maxheight-r").length) {
            $(".maxheight-r").equalHeights()
        }

        if ($(".maxheight1").length) {
            $(".maxheight1").equalHeights()
        }

        if ($(".maxheight2").length) {
            $(".maxheight2").equalHeights()
        }

        if ($(".equal-height-767").length) {
            if ($(window).width() < 768) {
                $(".equal-height-767").equalHeights();
            }
        }

        if ($(".equal-height-767-2").length) {
            if ($(window).width() < 768) {
                $(".equal-height-767-2").equalHeights();
            }
        }
    });
    /***********CATEGORY DROP DOWN****************/
    jQuery("#menu-icon").on("click", function () {
        jQuery("#menu-gadget .menu").slideToggle();
        jQuery(this).toggleClass("active");
    });

    jQuery('#menu-gadget .menu').find('li>ul').before('<i class="fa fa-angle-down"></i>');
    jQuery('#menu-gadget .menu li i').on("click", function () {
        if (jQuery(this).hasClass('fa-angle-up')) {
            jQuery(this).removeClass('fa-angle-up').parent('li').find('> ul').slideToggle();
        }
        else {
            jQuery(this).addClass('fa-angle-up').parent('li').find('> ul').slideToggle();
        }
    });
    /***********column dropdown box*******************/
    if ($('body').width() < 768) {
        leftColumn = $('body').find('#column-left');
        leftColumn.remove().insertAfter('#content');
        jQuery("img.lazy").unveil(1, function () {
            jQuery(this).load(function () {
                jQuery(this).animate({'opacity': 1}, 700);
            });
        });
        jQuery('.col-sm-3 .box-heading h3').append('<i class="fa fa-minus-circle"></i>');
        jQuery('.col-sm-3 .box-heading').on("click", function () {
            if (jQuery(this).find('i').hasClass('fa-plus-circle')) {
                jQuery(this).find('i').removeClass('fa-plus-circle').parents('.col-sm-3 .box').find('.box-content').slideToggle();
                jQuery(this).find('i').addClass('fa-minus-circle');
            }
            else {
                jQuery(this).find('i').removeClass('fa-minus-circle');
                jQuery(this).find('i').addClass('fa-plus-circle').parents('.col-sm-3 .box').find('.box-content').slideToggle();
            }
        })
    }
    ;
    /************************* RELATED PRODUCTS************************************/
    $('.related-slider').owlCarousel({
        smartSpeed: 450,
        dots: false,
        nav: true,
        loop:true,
        margin: 30,
        navClass: ['owl-prev fa fa-angle-left', 'owl-next fa fa-angle-right'],
        responsive: {
            0: {items: 1},
            768: {items: 2},
            992: {items: 3},
            1199: {items: 4}
        }
    });

    /*********product tabs**********/
    if ($('body').width() < 768) {
        jQuery('.tab-heading').append('<i class="fa fa-plus-circle"></i>');
        jQuery('.tab-heading').on("click", function () {
            if (jQuery(this).find('i').hasClass('fa-minus-circle')) {
                jQuery(this).find('i').removeClass('fa-minus-circle').parents('.tabs').find('.tab-content').slideToggle();
            }
            else {
                jQuery(this).find('i').addClass('fa-minus-circle').parents('.tabs').find('.tab-content').slideToggle();
            }
        })
    }
    ;

});

         jQuery(window).load(function () {
            jQuery(window).trigger('lookup.unveil');
        });


var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);

/***********************************/
if (!isMobile) {
    /***********************Green Sock*******************************/

    $(document).ready(function () {
        var stickMenu = false;
        var docWidth = $('body').find('.container').width();


        if (!isMobile) {
            // init controller
            controller = new ScrollMagic();
        }

    })


    function listBlocksAnimate(block, element, row, offset, difEffect) {
        if (!isMobile) {
            if (jQuery(block).length) {
                var i = 0;
                var j = row;
                var k = 1;
                var effect = -1;

                $(element).each(function () {
                    i++;

                    if (i > j) {
                        j += row;
                        k = i;
                        effect = effect * (-1);
                    }

                    if (effect == -1 && difEffect == true) {
                        ef = TweenMax.from(element + ':nth-child(' + i + ')', 0.5, {
                            left: -1 * 200 - i * 300 + "px",
                            alpha: 0,
                            ease: Power1.easeOut
                        })

                    } else {
                        ef = TweenMax.from(element + ':nth-child(' + i + ')', 0.5, {
                            right: -1 * 200 - i * 300 + "px",
                            alpha: 0,
                            ease: Power1.easeOut
                        })
                    }

                    var scene_new = new ScrollScene({
                        triggerElement: element + ':nth-child(' + k + ')',
                        offset: offset,
                    }).setTween(ef)
                        .addTo(controller)
                        .reverse(false);
                });
            }
        }
    }

    function listTabsAnimate(element) {
        if (!isMobile) {
            if (jQuery(element).length) {
                TweenMax.staggerFromTo(element, 0.3, {alpha: 0, rotationY: -90, ease: Power1.easeOut}, {
                    alpha: 1,
                    rotationY: 0,
                    ease: Power1.easeOut
                }, 0.1);
            }
        }
    }

    $(window).load(function () {
        listBlocksAnimate('.box.featured', '.box.featured .product-layout', 4, -300, true);
        listBlocksAnimate('.box.latest', '.box.latest .product-layout', 4, -300, true);
        if (!isMobile) {
            if (jQuery(".fluid_container").length) {
                var welcome = new TimelineMax();

                welcome.from(".fluid_container h2", 0.5, {right: -300, autoAlpha: 0})
                    .from(".fluid_container p", 0.5, {right: -300, autoAlpha: 0})
                    .from(".fluid_container a", 0.5, {bottom: -200, autoAlpha: 0});

                var scene_welcome = new ScrollScene({
                    triggerElement: ".fluid_container",
                    offset: -100
                }).setTween(welcome).addTo(controller).reverse(false);
            }

            if (jQuery(".banner-1").length) {
                var welcome = new TimelineMax();

                welcome.from(".banner-1:nth-child(1)", 0.5, {left: -300, autoAlpha: 0})
                    .from(".banner-1:nth-child(2)", 0.5, {right: -300, autoAlpha: 0})
                var scene_welcome = new ScrollScene({
                    triggerElement: ".banners",
                    offset: -100
                }).setTween(welcome).addTo(controller).reverse(false);
            }

            if (jQuery(".box_html.About").length) {
                var welcome = new TimelineMax();

                welcome.from(".box_html.About .col-sm-6:nth-child(1)", 0.5, {left: -300, autoAlpha: 0})
                    .from(".box_html.About .col-sm-6:nth-child(2)", 0.5, {right: -300, autoAlpha: 0})
                var scene_welcome = new ScrollScene({
                    triggerElement: ".box_html.About",
                    offset: -100
                }).setTween(welcome).addTo(controller).reverse(false);
            }
        }
    });
}


