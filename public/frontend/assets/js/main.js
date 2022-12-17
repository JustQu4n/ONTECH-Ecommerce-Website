window.onload = function () {
    window.setTimeout(fadeout, 200);
 }
 
 function fadeout() {
    document.querySelector('.preloader').style.opacity = '0';
    document.querySelector('.preloader').style.display = 'none';
 }
 $(function () {
    "use strict";
    $(window).on('scroll', function (event) {
       var scroll = $(window).scrollTop();
       if (scroll < 110) {
          $(".navigation").removeClass("sticky");
       } else {
          $(".navigation").addClass("sticky");
       }
    });
    $('.add').click(function () {
       if ($(this).prev().val()) {
          $(this).prev().val(+$(this).prev().val() + 1);
       }
    });
    $('.sub').click(function () {
       if ($(this).next().val() > 1) {
          if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
       }
    });
    $('select').niceSelect();
    $('.mobile-menu-open-1').on('click', function () {
       $('.navbar-sidebar-1').addClass('open')
       $('.overlay-1').addClass('open')
    });
    $('.close-mobile-menu-1').on('click', function () {
       $('.navbar-sidebar-1').removeClass('open')
       $('.overlay-1').removeClass('open')
    });
    $('.overlay-1').on('click', function () {
       $('.navbar-sidebar-1').removeClass('open')
       $('.overlay-1').removeClass('open')
    });
    $('.mobile-menu-dark-open-1').on('click', function () {
       $('.navbar-sidebar-dark-1').addClass('open')
       $('.overlay-dark-1').addClass('open')
    });
    $('.close-mobile-menu-dark-1').on('click', function () {
       $('.navbar-sidebar-dark-1').removeClass('open')
       $('.overlay-dark-1').removeClass('open')
    });
    $('.overlay-dark-1').on('click', function () {
       $('.navbar-sidebar-dark-1').removeClass('open')
       $('.overlay-dark-1').removeClass('open')
    });
    $('.mobile-menu-open-2').on('click', function () {
       $('.navbar-sidebar-2').addClass('open')
       $('.overlay-2').addClass('open')
    });
    $('.close-mobile-menu-2').on('click', function () {
       $('.navbar-sidebar-2').removeClass('open')
       $('.overlay-2').removeClass('open')
    });
    $('.overlay-2').on('click', function () {
       $('.navbar-sidebar-2').removeClass('open')
       $('.overlay-2').removeClass('open')
    });
    $('.mobile-menu-open-dark-2').on('click', function () {
       $('.navbar-sidebar-dark-2').addClass('open')
       $('.overlay-dark-2').addClass('open')
    });
    $('.close-mobile-menu-dark-2').on('click', function () {
       $('.navbar-sidebar-dark-2').removeClass('open')
       $('.overlay-dark-2').removeClass('open')
    });
    $('.overlay-dark-2').on('click', function () {
       $('.navbar-sidebar-dark-2').removeClass('open')
       $('.overlay-dark-2').removeClass('open')
    });
    $('.mobile-menu-open-3').on('click', function () {
       $('.navbar-sidebar-3').addClass('open')
       $('.overlay-3').addClass('open')
    });
    $('.close-mobile-menu-3').on('click', function () {
       $('.navbar-sidebar-3').removeClass('open')
       $('.overlay-3').removeClass('open')
    });
    $('.overlay-3').on('click', function () {
       $('.navbar-sidebar-3').removeClass('open')
       $('.overlay-3').removeClass('open')
    });
    $('.mobile-menu-open-dark-3').on('click', function () {
       $('.navbar-sidebar-dark-3').addClass('open')
       $('.overlay-dark-3').addClass('open')
    });
    $('.close-mobile-menu-dark-3').on('click', function () {
       $('.navbar-sidebar-dark-3').removeClass('open')
       $('.overlay-dark-3').removeClass('open')
    });
    $('.overlay-dark-3').on('click', function () {
       $('.navbar-sidebar-dark-3').removeClass('open')
       $('.overlay-dark-3').removeClass('open')
    });
    $('.mobile-menu-open-4').on('click', function () {
       $('.navbar-sidebar-4').addClass('open')
       $('.overlay-4').addClass('open')
    });
    $('.close-mobile-menu-4').on('click', function () {
       $('.navbar-sidebar-4').removeClass('open')
       $('.overlay-4').removeClass('open')
    });
    $('.overlay-4').on('click', function () {
       $('.navbar-sidebar-4').removeClass('open')
       $('.overlay-4').removeClass('open')
    });
    $('.mobile-menu-open-dark-4').on('click', function () {
       $('.navbar-sidebar-dark-4').addClass('open')
       $('.overlay-dark-4').addClass('open')
    });
    $('.close-mobile-menu-dark-4').on('click', function () {
       $('.navbar-sidebar-dark-4').removeClass('open')
       $('.overlay-dark-4').removeClass('open')
    });
    $('.overlay-dark-4').on('click', function () {
       $('.navbar-sidebar-dark-4').removeClass('open')
       $('.overlay-dark-4').removeClass('open')
    });
    $('.mobile-menu-open-5').on('click', function () {
       $('.navbar-sidebar-5').addClass('open')
       $('.overlay-5').addClass('open')
    });
    $('.close-mobile-menu-5').on('click', function () {
       $('.navbar-sidebar-5').removeClass('open')
       $('.overlay-5').removeClass('open')
    });
    $('.overlay-5').on('click', function () {
       $('.navbar-sidebar-5').removeClass('open')
       $('.overlay-5').removeClass('open')
    });
    $('.mobile-menu-open-dark-5').on('click', function () {
       $('.navbar-sidebar-dark-5').addClass('open')
       $('.overlay-dark-5').addClass('open')
    });
    $('.close-mobile-menu-dark-5').on('click', function () {
       $('.navbar-sidebar-dark-5').removeClass('open')
       $('.overlay-dark-5').removeClass('open')
    });
    $('.overlay-dark-5').on('click', function () {
       $('.navbar-sidebar-dark-5').removeClass('open')
       $('.overlay-dark-5').removeClass('open')
    });
    $('.mobile-menu-open-6').on('click', function () {
       $('.navbar-sidebar-6').addClass('open')
       $('.overlay-6').addClass('open')
    });
    $('.close-mobile-menu-6').on('click', function () {
       $('.navbar-sidebar-6').removeClass('open')
       $('.overlay-6').removeClass('open')
    });
    $('.overlay-6').on('click', function () {
       $('.navbar-sidebar-6').removeClass('open')
       $('.overlay-6').removeClass('open')
    });
    $('.mobile-menu-open-dark-6').on('click', function () {
       $('.navbar-sidebar-dark-6').addClass('open')
       $('.overlay-dark-6').addClass('open')
    });
    $('.close-mobile-menu-dark-6').on('click', function () {
       $('.navbar-sidebar-dark-6').removeClass('open')
       $('.overlay-dark-6').removeClass('open')
    });
    $('.overlay-dark-6').on('click', function () {
       $('.navbar-sidebar-dark-6').removeClass('open')
       $('.overlay-dark-6').removeClass('open')
    });
    $('.mobile-menu-open-7').on('click', function () {
       $('.navbar-sidebar-7').addClass('open')
       $('.overlay-7').addClass('open')
    });
    $('.close-mobile-menu-7').on('click', function () {
       $('.navbar-sidebar-7').removeClass('open')
       $('.overlay-7').removeClass('open')
    });
    $('.overlay-7').on('click', function () {
       $('.navbar-sidebar-7').removeClass('open')
       $('.overlay-7').removeClass('open')
    });
    $('.mobile-menu-open-dark-7').on('click', function () {
       $('.navbar-sidebar-dark-7').addClass('open')
       $('.overlay-dark-7').addClass('open')
    });
    $('.close-mobile-menu-dark-7').on('click', function () {
       $('.navbar-sidebar-dark-7').removeClass('open')
       $('.overlay-dark-7').removeClass('open')
    });
    $('.overlay-dark-7').on('click', function () {
       $('.navbar-sidebar-dark-7').removeClass('open')
       $('.overlay-dark-7').removeClass('open')
    });
    $('.mobile-menu-open-8').on('click', function () {
       $('.navbar-sidebar-8').addClass('open')
       $('.overlay-8').addClass('open')
    });
    $('.close-mobile-menu-8').on('click', function () {
       $('.navbar-sidebar-8').removeClass('open')
       $('.overlay-8').removeClass('open')
    });
    $('.overlay-8').on('click', function () {
       $('.navbar-sidebar-8').removeClass('open')
       $('.overlay-8').removeClass('open')
    });
    $('.mobile-menu-open-dark-8').on('click', function () {
       $('.navbar-sidebar-dark-8').addClass('open')
       $('.overlay-dark-8').addClass('open')
    });
    $('.close-mobile-menu-dark-8').on('click', function () {
       $('.navbar-sidebar-dark-8').removeClass('open')
       $('.overlay-dark-8').removeClass('open')
    });
    $('.overlay-dark-8').on('click', function () {
       $('.navbar-sidebar-dark-8').removeClass('open')
       $('.overlay-dark-8').removeClass('open')
    });
    $('.mobile-menu-open-9').on('click', function () {
       $('.navbar-sidebar-9').addClass('open')
       $('.overlay-9').addClass('open')
    });
    $('.close-mobile-menu-9').on('click', function () {
       $('.navbar-sidebar-9').removeClass('open')
       $('.overlay-9').removeClass('open')
    });
    $('.overlay-9').on('click', function () {
       $('.navbar-sidebar-9').removeClass('open')
       $('.overlay-9').removeClass('open')
    });
    $('.mobile-menu-open-dark-9').on('click', function () {
       $('.navbar-sidebar-dark-9').addClass('open')
       $('.overlay-dark-9').addClass('open')
    });
    $('.close-mobile-menu-dark-9').on('click', function () {
       $('.navbar-sidebar-dark-9').removeClass('open')
       $('.overlay-dark-9').removeClass('open')
    });
    $('.overlay-dark-9').on('click', function () {
       $('.navbar-sidebar-dark-9').removeClass('open')
       $('.overlay-dark-9').removeClass('open')
    });
    $('.mobile-menu-open-10').on('click', function () {
       $('.navbar-sidebar-10').addClass('open')
       $('.overlay-10').addClass('open')
    });
    $('.close-mobile-menu-10').on('click', function () {
       $('.navbar-sidebar-10').removeClass('open')
       $('.overlay-10').removeClass('open')
    });
    $('.overlay-10').on('click', function () {
       $('.navbar-sidebar-10').removeClass('open')
       $('.overlay-10').removeClass('open')
    });
    $('.mobile-menu-open-dark-10').on('click', function () {
       $('.navbar-sidebar-dark-10').addClass('open')
       $('.overlay-dark-10').addClass('open')
    });
    $('.close-mobile-menu-dark-10').on('click', function () {
       $('.navbar-sidebar-dark-10').removeClass('open')
       $('.overlay-dark-10').removeClass('open')
    });
    $('.overlay-dark-10').on('click', function () {
       $('.navbar-sidebar-dark-10').removeClass('open')
       $('.overlay-dark-10').removeClass('open')
    });
    $('.mobile-menu-open-11').on('click', function () {
       $('.navbar-sidebar-11').addClass('open')
       $('.overlay-11').addClass('open')
    });
    $('.close-mobile-menu-11').on('click', function () {
       $('.navbar-sidebar-11').removeClass('open')
       $('.overlay-11').removeClass('open')
    });
    $('.overlay-11').on('click', function () {
       $('.navbar-sidebar-11').removeClass('open')
       $('.overlay-11').removeClass('open')
    });
    $('.mobile-menu-open-dark-11').on('click', function () {
       $('.navbar-sidebar-dark-11').addClass('open')
       $('.overlay-dark-11').addClass('open')
    });
    $('.close-mobile-menu-dark-11').on('click', function () {
       $('.navbar-sidebar-dark-11').removeClass('open')
       $('.overlay-dark-11').removeClass('open')
    });
    $('.overlay-dark-11').on('click', function () {
       $('.navbar-sidebar-dark-11').removeClass('open')
       $('.overlay-dark-11').removeClass('open')
    });
    $('.mobile-menu-open-12').on('click', function () {
       $('.navbar-sidebar-12').addClass('open')
       $('.overlay-12').addClass('open')
    });
    $('.close-mobile-menu-12').on('click', function () {
       $('.navbar-sidebar-12').removeClass('open')
       $('.overlay-12').removeClass('open')
    });
    $('.overlay-12').on('click', function () {
       $('.navbar-sidebar-12').removeClass('open')
       $('.overlay-12').removeClass('open')
    });
    $('.mobile-menu-open-dark-12').on('click', function () {
       $('.navbar-sidebar-dark-12').addClass('open')
       $('.overlay-dark-12').addClass('open')
    });
    $('.close-mobile-menu-dark-12').on('click', function () {
       $('.navbar-sidebar-dark-12').removeClass('open')
       $('.overlay-dark-12').removeClass('open')
    });
    $('.overlay-dark-12').on('click', function () {
       $('.navbar-sidebar-dark-12').removeClass('open')
       $('.overlay-dark-12').removeClass('open')
    });
    $("#toggle-menu").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu").on('click', function () {
       $('.menu-vertical').slideToggle();
    });
    $("#toggle-menu-dark").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu-dark").on('click', function () {
       $('.menu-vertical-dark').slideToggle();
    });
    $("#toggle-menu-2").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu-2").on('click', function () {
       $('.menu-vertical-2').slideToggle();
    });
    $("#toggle-menu-dark-2").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu-dark-2").on('click', function () {
       $('.menu-vertical-dark-2').slideToggle();
    });
    $("#toggle-menu-4").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu-4").on('click', function () {
       $('.menu-vertical-4').slideToggle();
    });
    $("#toggle-menu-dark-4").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu-dark-4").on('click', function () {
       $('.menu-vertical-dark-4').slideToggle();
    });
    $("#toggle-menu-5").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu-5").on('click', function () {
       $('.menu-vertical-5').slideToggle();
    });
    $("#toggle-menu-dark-5").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu-dark-5").on('click', function () {
       $('.menu-vertical-dark-5').slideToggle();
    });
    $("#toggle-menu-6").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu-6").on('click', function () {
       $('.menu-vertical-6').slideToggle();
    });
    $("#toggle-menu-dark-6").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu-dark-6").on('click', function () {
       $('.menu-vertical-dark-6').slideToggle();
    });
    $("#toggle-menu-8").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu-8").on('click', function () {
       $('.menu-vertical-8').slideToggle();
    });
    $("#toggle-menu-dark-8").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu-dark-8").on('click', function () {
       $('.menu-vertical-dark-8').slideToggle();
    });
    $("#toggle-menu-10").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu-10").on('click', function () {
       $('.menu-vertical-10').slideToggle();
    });
    $("#toggle-menu-dark-10").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu-dark-10").on('click', function () {
       $('.menu-vertical-dark-10').slideToggle();
    });
    $("#toggle-menu-11").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu-11").on('click', function () {
       $('.menu-vertical-11').slideToggle();
    });
    $("#toggle-menu-dark-11").on('click', function () {
       $(this).toggleClass('active');
    });
    $("#toggle-menu-dark-11").on('click', function () {
       $('.menu-vertical-dark-11').slideToggle();
    });
    let body = document.querySelector('body');
 
    function displayWindowSize() {
       var w = document.documentElement.clientWidth;
       if (w > 991) {
          $('.main-navbar').removeClass('mobile-menu');
          $('.mega-dropdown-menu').removeClass('mobile-menu-dropdown');
          var $offCanvasNav = $('.mobile-menu');
          var $offCanvasNavSubMenu = $offCanvasNav.find('.sub-mega-dropdown, .sub-menu, .mega-dropdown-list ul');
          $offCanvasNavSubMenu.parent().prepend('<span class="d-none"></span>');
          $offCanvasNavSubMenu.slideDown();
          $offCanvasNav.on('click', 'li a, li .menu-expand, .mega-dropdown-list .mega-title', function (e) {
             var $this = $(this);
             if (($this.parent().attr('class').match(('menu-item-has-children')))) {
                if ($this.siblings('ul:visible').length) {
                   e.preventDefault();
                   $this.parent('li').removeClass('active');
                   $this.siblings('ul').slideDown();
                } else {
                   $this.parent('li').addClass('active');
                   $this.closest('li').siblings('li').find('ul:visible').slideDown();
                   $this.closest('li').siblings('li').removeClass('active');
                   $this.siblings('ul').slideUp();
                }
             }
          });
       } else {
          $('.main-navbar').addClass('mobile-menu');
          $('.mega-dropdown-menu').addClass('mobile-menu-dropdown');
          var $offCanvasNav = $('.mobile-menu');
          var $offCanvasNavSubMenu = $offCanvasNav.find('.sub-mega-dropdown, .sub-menu, .mega-dropdown-list ul');
          $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand d-lg-none"></span>');
          $offCanvasNavSubMenu.slideUp();
          $offCanvasNav.on('click', 'li a, li .menu-expand, .mega-dropdown-list .mega-title', function (e) {
             var $this = $(this);
             if (($this.parent().attr('class').match(('menu-item-has-children')))) {
                if ($this.siblings('ul:visible').length) {
                   e.preventDefault();
                   $this.parent('li').removeClass('active');
                   $this.siblings('ul').slideUp();
                } else {
                   $this.parent('li').addClass('active');
                   $this.closest('li').siblings('li').find('ul:visible').slideUp();
                   $this.closest('li').siblings('li').removeClass('active');
                   $this.siblings('ul').slideDown();
                }
             }
          });
       }
    }
    window.addEventListener("resize", displayWindowSize);
    displayWindowSize();
    $.validate({
       lang: 'es',
    });
    $(".toggle-password").click(function () {
       $(this).toggleClass("mdi-eye-outline mdi-eye-off-outline");
       var input = $($(this).attr("toggle"));
       if (input.attr("type") == "password") {
          input.attr("type", "text");
       } else {
          input.attr("type", "password");
       }
    });
    $('#checkout-steps').vjaccordionsteps({});
    $('#checkout-steps-dark').vjaccordionsteps({});
    $('#credit-input').formatter({
       'pattern': '{{9999}} {{9999}} {{9999}} {{9999}}',
    });
    $('.filter-size ul li').on("click", function () {
       $(this).siblings(this).removeClass('active').end().addClass('active');
    });
    $("#slider-range").slider({
       range: true,
       min: 0,
       max: 2000,
       values: [300, 1200],
       slide: function (event, ui) {
          $("#minAmount").val("$" + ui.values[0]);
          $("#maxAmount").val("$" + ui.values[1]);
       }
    });
    $("#minAmount").val("$" + $("#slider-range").slider("values", 0));
    $("#maxAmount").val("$" + $("#slider-range").slider("values", 1));
    $("#slider-range2").slider({
       range: true,
       min: 0,
       max: 2000,
       values: [300, 1200],
       slide: function (event, ui) {
          $("#minAmount2").val("$" + ui.values[0]);
          $("#maxAmount2").val("$" + ui.values[1]);
       }
    });
    $("#minAmount2").val("$" + $("#slider-range").slider("values", 0));
    $("#maxAmount2").val("$" + $("#slider-range").slider("values", 1));
    $("#slider-range-dark").slider({
       range: true,
       min: 0,
       max: 2000,
       values: [300, 1200],
       slide: function (event, ui) {
          $("#minAmountDark").val("$" + ui.values[0]);
          $("#maxAmountDark").val("$" + ui.values[1]);
       }
    });
    $("#minAmountDark").val("$" + $("#slider-range").slider("values", 0));
    $("#maxAmountDark").val("$" + $("#slider-range").slider("values", 1));
    $("#slider-range-dark2").slider({
       range: true,
       min: 0,
       max: 2000,
       values: [300, 1200],
       slide: function (event, ui) {
          $("#minAmountDark2").val("$" + ui.values[0]);
          $("#maxAmountDark2").val("$" + ui.values[1]);
       }
    });
    $("#minAmountDark2").val("$" + $("#slider-range").slider("values", 0));
    $("#maxAmountDark2").val("$" + $("#slider-range").slider("values", 1));
    $('.product-active').slick({
       dots: false,
       infinite: false,
       arrows: true,
       prevArrow: '<span class="prev"><i class="mdi mdi-chevron-left"></i></span>',
       nextArrow: '<span class="next"><i class="mdi mdi-chevron-right"></i></span>',
       speed: 800,
       slidesToShow: 1,
       slidesToScroll: 1,
    });
    $('.items-wrapper .single-item').on("click", function () {
       $(this).siblings(this).removeClass('active').end().addClass('active');
    });
    $('.size-select li').on("click", function () {
       $(this).siblings(this).removeClass('active').end().addClass('active');
    });
    $('.country-select li').on("click", function () {
       $(this).siblings(this).removeClass('active').end().addClass('active');
    });
    $('.color-select li').each(function () {
       var get_color = $(this).attr('data-color');
       $(this).css("background-color", get_color);
    });
    $('.color-select li').on("click", function () {
       $(this).siblings(this).removeClass('active').end().addClass('active');
    });
    $('.product-image-active-1').slick({
       slidesToShow: 1,
       slidesToScroll: 1,
       arrows: false,
       dots: false,
       fade: true,
       asNavFor: '.product-thumb-image-active-1',
       speed: 600,
    });
    $('.product-thumb-image-active-1').slick({
       slidesToShow: 5,
       slidesToScroll: 1,
       asNavFor: '.product-image-active-1',
       dots: false,
       arrows: true,
       prevArrow: '<span class="prev"><i class="mdi mdi-chevron-up"></i></span>',
       nextArrow: '<span class="next"><i class="mdi mdi-chevron-down"></i></span>',
       focusOnSelect: true,
       vertical: true,
       speed: 600,
    });
    $('.product-image-active-2').slick({
       slidesToShow: 1,
       slidesToScroll: 1,
       arrows: false,
       dots: false,
       fade: true,
       asNavFor: '.product-thumb-image-active-2',
       speed: 600,
    });
    $('.product-thumb-image-active-2').slick({
       slidesToShow: 5,
       slidesToScroll: 1,
       asNavFor: '.product-image-active-2',
       dots: false,
       arrows: true,
       prevArrow: '<span class="prev"><i class="mdi mdi-chevron-left"></i></span>',
       nextArrow: '<span class="next"><i class="mdi mdi-chevron-right"></i></span>',
       focusOnSelect: true,
       speed: 600,
    });
    $('.content-preview-active').slick({
       slidesToShow: 1,
       slidesToScroll: 1,
       arrows: true,
       prevArrow: '<span class="prev"><i class="mdi mdi-chevron-left"></i></span>',
       nextArrow: '<span class="next"><i class="mdi mdi-chevron-right"></i></span>',
       dots: false,
       fade: true,
       asNavFor: '.content-thumb-active',
       speed: 400,
    });
    $('.content-thumb-active').slick({
       slidesToShow: 5,
       slidesToScroll: 1,
       asNavFor: '.content-preview-active',
       dots: false,
       infinite: false,
       arrows: false,
       focusOnSelect: true,
       speed: 400,
    });
    $('.content-active').slick({
       dots: true,
       infinite: false,
       autoplay: true,
       arrows: false,
       prevArrow: '<span class="prev"><i class="mdi mdi-chevron-left"></i></span>',
       nextArrow: '<span class="next"><i class="mdi mdi-chevron-right"></i></span>',
       speed: 800,
       slidesToShow: 1,
       slidesToScroll: 1,
    });
    $('.header-items-active').slick({
       dots: true,
       infinite: false,
       autoplay: true,
       arrows: false,
       prevArrow: '<span class="prev"><i class="mdi mdi-chevron-left"></i></span>',
       nextArrow: '<span class="next"><i class="mdi mdi-chevron-right"></i></span>',
       speed: 800,
       slidesToShow: 1,
       slidesToScroll: 1,
    });
    $('.header-4-active').slick({
       dots: true,
       infinite: false,
       autoplay: true,
       arrows: false,
       prevArrow: '<span class="prev"><i class="mdi mdi-chevron-left"></i></span>',
       nextArrow: '<span class="next"><i class="mdi mdi-chevron-right"></i></span>',
       speed: 800,
       slidesToShow: 1,
       slidesToScroll: 1,
    });
    $('.header-5-active').slick({
       dots: true,
       infinite: false,
       autoplay: true,
       arrows: false,
       prevArrow: '<span class="prev"><i class="mdi mdi-chevron-left"></i></span>',
       nextArrow: '<span class="next"><i class="mdi mdi-chevron-right"></i></span>',
       speed: 800,
       slidesToShow: 1,
       slidesToScroll: 1,
    });
    $('.header-7-active').slick({
       dots: true,
       infinite: false,
       autoplay: true,
       arrows: false,
       prevArrow: '<span class="prev"><i class="mdi mdi-chevron-left"></i></span>',
       nextArrow: '<span class="next"><i class="mdi mdi-chevron-right"></i></span>',
       speed: 800,
       slidesToShow: 1,
       slidesToScroll: 1,
    });
    $('#stars li').on('mouseover', function () {
       var onStar = parseInt($(this).data('value'), 10);
       $(this).parent().children('li.star').each(function (e) {
          if (e < onStar) {
             $(this).addClass('hover');
          } else {
             $(this).removeClass('hover');
          }
       });
    }).on('mouseout', function () {
       $(this).parent().children('li.star').each(function (e) {
          $(this).removeClass('hover');
       });
    });
    var spansCounts = $('#stars li').length
    $('#stars li').on('click', function (e) {
       console.log($(this).index())
       $('#stars li').removeClass('selected');
       for (var i = 0; i < $(this).index() + 1; i++) {
          $('#stars li').eq(i).addClass('selected')
       }
    })
    $('#stars2 li').on('mouseover', function () {
       var onStar = parseInt($(this).data('value'), 10);
       $(this).parent().children('li.star').each(function (e) {
          if (e < onStar) {
             $(this).addClass('hover');
          } else {
             $(this).removeClass('hover');
          }
       });
    }).on('mouseout', function () {
       $(this).parent().children('li.star').each(function (e) {
          $(this).removeClass('hover');
       });
    });
    var spansCounts = $('#stars2 li').length
    $('#stars2 li').on('click', function (e) {
       console.log($(this).index())
       $('#stars2 li').removeClass('selected');
       for (var i = 0; i < $(this).index() + 1; i++) {
          $('#stars2 li').eq(i).addClass('selected')
       }
    })
    var cu = new counterUp({
       start: 0,
       duration: 2000,
       intvalues: true,
       interval: 100,
       append: '+'
    });
    cu.start();
    $('.client-logo-active').slick({
       dots: false,
       infinite: false,
       autoplay: true,
       arrows: false,
       speed: 800,
       slidesToShow: 4,
       slidesToScroll: 1,
       responsive: [{
          breakpoint: 992,
          settings: {
             slidesToShow: 3,
          }
       }, {
          breakpoint: 768,
          settings: {
             slidesToShow: 2,
          }
       }, {
          breakpoint: 500,
          settings: {
             slidesToShow: 1,
          }
       }, ]
    });
    $('.three-column-slider').slick({
       dots: true,
       infinite: false,
       autoplay: false,
       arrows: false,
       speed: 800,
       slidesToShow: 3,
       slidesToScroll: 1,
       responsive: [{
          breakpoint: 992,
          settings: {
             slidesToShow: 2,
          }
       }, {
          breakpoint: 576,
          settings: {
             slidesToShow: 1,
          }
       }, ]
    });
 });