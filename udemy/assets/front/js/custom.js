jQuery(document).ready(function() {
  jQuery('.box-category .menu').find('li>ul').before('<i class="fa fa-angle-right"></i>');
  jQuery('.box-category .menu li i').on("click", function() {
    if (jQuery(this).hasClass('fa-angle-down')) {
      jQuery(this).removeClass('fa-angle-down').parent('li').find('> ul').slideToggle();
    } else {
      jQuery(this).addClass('fa-angle-down').parent('li').find('> ul').slideToggle();
    }
  });
  var slider = $('.specials-scroll');
  if ($(window).width() > 767) {
    slider.bxSlider({
      mode: 'vertical',
      slideWidth: 270,
      minSlides: 3,
      maxSlides: 3,
      moveSlides: 1,
      pager: false,
      slideMargin: 30,
      controls: true
    });
  } else {
    if (!slider.hasClass('activated')) {
      slider.owlCarousel({
        items: 3,
        margin: 30,
        smartSpeed: 450,
        dots: false,
        nav: true,
        loop: true,
        navClass: ['owl-prev fa fa-angle-up', 'owl-next fa fa-angle-down'],
        responsive: {
          0: {
            items: 1
          },
          370: {
            items: 2
          },
          570: {
            items: 3
          }
        }
      });
      slider.addClass('activated');
    }
  }
  var slider = $(".bestseller-slider");
  if ($(window).width() > 767) {
    slider.bxSlider({
      mode: 'vertical',
      slideWidth: 270,
      minSlides: 3,
      maxSlides: 3,
      moveSlides: 1,
      pager: false,
      slideMargin: 30,
      controls: true
    });
  } else {
    if (!slider.hasClass('activated')) {
      slider.owlCarousel({
        items: 3,
        margin: 30,
        smartSpeed: 450,
        dots: false,
        nav: true,
        loop: true,
        navClass: ['owl-prev fa fa-angle-up', 'owl-next fa fa-angle-down'],
        responsive: {
          0: {
            items: 1
          },
          370: {
            items: 2
          },
          570: {
            items: 3
          }
        }
      });
      slider.addClass('activated');
    }
  }
  jQuery('#camera_wrap_0').camera({
    navigation: true,
    playPause: false,
    thumbnails: false,
    navigationHover: false,
    barPosition: 'top',
    loader: false,
    time: 3000,
    transPeriod: 800,
    alignment: 'center',
    autoAdvance: true,
    mobileAutoAdvance: true,
    barDirection: 'leftToRight',
    barPosition: 'bottom',
    easing: 'easeInOutExpo',
    fx: 'simpleFade',
    height: '39.6551724137931%',
    minHeight: '250px',
    hover: true,
    pagination: false,
    loaderColor: '#1f1f1f',
    loaderBgColor: 'transparent',
    loaderOpacity: 1,
    loaderPadding: 0,
    loaderStroke: 3,
  });
  $('.latest-scroll').owlCarousel({
    smartSpeed: 450,
    dots: false,
    nav: true,
    loop: true,
    navClass: ['owl-prev fa fa-angle-up', 'owl-next fa fa-angle-down'],
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 2,
        margin: 20
      },
      992: {
        items: 3,
        margin: 30
      }
    }
  });

  $(".quickview").fancybox({
    maxWidth: 800,
    maxHeight: 600,
    fitToView: false,
    width: '70%',
    height: '70%',
    autoSize: false,
    closeClick: false,
    openEffect: 'elastic',
    closeEffect: 'elastic',
  });
  $('.featured-scroll').owlCarousel({
    smartSpeed: 450,
    dots: false,
    nav: true,
    loop: true,
    navClass: ['owl-prev fa fa-angle-up', 'owl-next fa fa-angle-down'],
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 2,
        margin: 20
      },
      992: {
        items: 3,
        margin: 30
      }
    }
  });

  $(".quickview").fancybox({
    maxWidth: 800,
    maxHeight: 600,
    fitToView: false,
    width: '70%',
    height: '70%',
    autoSize: false,
    closeClick: false,
    openEffect: 'elastic',
    closeEffect: 'elastic',
  });

  var myPhotoSwipe = $("#gallery a").photoSwipe({
    enableMouseWheel: false,
    enableKeyboard: false,
    captionAndToolbarAutoHideDelay: 0
  });

  function getChar(event) {
    if (event.which == null) {
      if (event.keyCode < 32) return null;
      return String.fromCharCode(event.keyCode) // IE
    }

    if (event.which != 0 && event.charCode != 0) {
      if (event.which < 32) return null;
      return String.fromCharCode(event.which)
    }

    return null;
  }
  jQuery('#reviews_form_title').addClass('close-tab');
  jQuery('#reviews_form_title').on("click", function() {
    if (jQuery(this).hasClass('close-tab')) {
      jQuery(this).removeClass('close').parents('#tab-review').find('#reviews_form').slideToggle();
    } else {
      jQuery(this).addClass('close-tab').parents('#tab-review').find('#reviews_form').slideToggle();
    }
  })
  $('.addToCart').click(function(){
    productid = $('.addToCart').attr("value");
    fiyat     = $('.fiyat').attr("value");
    resim     = $('.resim').attr("value");
    baslik    = $('.baslik').attr("value");
    adet      = 1;
    $.ajax({
      url : "http://localhost/kocunubul/udemy/sepet/add",
      type: "POST",
      data :{productid:productid,fiyat:fiyat,resim:resim,baslik:baslik,adet:adet},
      success: function(data){
        alert("Ürün Sepetinize Eklendi");
        window.location.reload();
      }
    });
  });

});
