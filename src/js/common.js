'use strict';
let svg4everybody = require('svg4everybody'),
  popup = require('jquery-popup-overlay'),
  iMask = require('imask'),
  Swiper = require('swiper'),
  tabslet = require('tabslet'),
  fancybox = require('@fancyapps/fancybox');


jQuery(document).ready(function($) {
  // Toggle nav menu
  let toggleNav = function () {
    let toggle = $('.nav-toggle');
    let nav = $('.header__nav');
    let closeNav = $('.nav__close');
    let overlay = $('.nav-overlay');

    toggle.on('click', function (e) {
      e.preventDefault();
      nav.toggleClass('open');
      overlay.toggleClass('is-active');
    });

    closeNav.on('click', function (e) {
      e.preventDefault();
      nav.removeClass('open');
      overlay.removeClass('is-active');
    });

    overlay.on('click', function (e) {
      e.preventDefault();
      nav.removeClass('open');
      $(this).removeClass('is-active');
    });
  };

  // Modal
  let initModal = function() {
    $('.modal').popup({
      transition: 'all 0.3s',
      scrolllock: true,
      onclose: function() {
        $(this).find('label.error').remove();
        $(this).find('.wpcf7-response-output').hide();
      }
    });
  };

  // Input mask
  let inputMask = function() {
    let phoneInputs = $('input[type="tel"]');
    let maskOptions = {
      mask: '+{7} (000) 000-0000'
    };

    if (phoneInputs) {
      phoneInputs.each(function(i, el) {
        IMask(el, maskOptions);
      });
    }
  };

  // Slider
  let champSlider = new Swiper('.championship-slider', {
    spaceBetween: 30,
    autoHeight: true,
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
  });

  // Table show
  let showMoreRow = function() {
    let btnMore = $('.championship-table__more');

    if (btnMore) {
      btnMore.each(function() {
        let x = 10;
        $(this).click(function (e) {
          e.preventDefault();

          let table = $(this).parents('.championship-table');
          let tr_size = table.find('tbody tr').length;
          x += 10;
          table.find('tbody tr').slice(0, x).slideDown();
          if (x >= tr_size){
            $(this).hide();
          }

          if ($('.championship-slider').length) {
            champSlider.update();
          }
        });
      });
    }
  };

  if ($('.team').length) {
    let options = {};

    $('.team').each(function() {
      if ($(this).find('.team__item').length > 4 || $(window).width() <= 1230) {

        $(this).removeClass('disabled');

        options = {
          slidesPerView: 1,
          spaceBetween: 70,
          pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
          },
          breakpoints: {
            1231: {
              slidesPerView: 4,
            }
          }
        }
      }
      else {
        $(this).addClass('disabled');

        options = {
          slidesPerView: 1,
          spaceBetween: 70,
          loop: false,
          autoplay: false,
          pagination: false,
          simulateTouch: false,
          breakpoints: {
            1231: {
              slidesPerView: 4,
            }
          }
        }
      }
    });

    new Swiper('.team', options);
  }

  $('.services-tabs').tabslet({
    animation: true
  });

  $('body').on('click', '.resource-dropdown__body a', function(e) {
    e.preventDefault();
    let id = $(this).data('term-id');
    let val = $(this).text();
    let response = $('#response');

    $(this).siblings().removeClass('active');
    $(this).addClass('active');
    $('.resource-dropdown__head').text(val);

    $.ajax({
      type: "POST",
      url: window.wp_data.ajax_url,
      data : {
        action : 'resource_filter',
        id: id
      },
      beforeSend: function() {
        response.addClass('active');
      },
      success: function (data) {
        response.html(data);
        response.removeClass('active');
      }
    });
  });

  $('.blocks-gallery-item a').fancybox().attr('data-fancybox', 'gallery');

  $('.team__more').fancybox().attr('data-fancybox', 'group');

  // Fixed header
  let fixedHeader = function(e) {
    let header = $('.header');
    let h = header.innerHeight();

    if (e.scrollTop() > ($('body').height() / 100 * 20)) {
      $('body').css('padding-top', h);
      header.addClass('fixed');
    }
    else {
      $('body').css('padding-top', 0);
      header.removeClass('fixed');
    }
  };

  // Hide Header on on scroll down
  let didScroll;
  let lastScrollTop = 0;
  let delta = 5;
  let navbarHeight = $('.header').outerHeight();

  $(window).scroll(function(event){
    didScroll = true;
  });

  setInterval(function() {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);

  function hasScrolled() {
    let st = $(window).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
      return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
      // Scroll Down
      $('.header').removeClass('nav-down').addClass('nav-up');
    } else {
      // Scroll Up
      if(st + $(window).height() < $(document).height()) {
        $('.header').removeClass('nav-up').addClass('nav-down');
      }
    }

    lastScrollTop = st;
  }

  fixedHeader($(this));

  $(window).scroll(function() {
    fixedHeader($(this));
  });

  toggleNav();
  initModal();
  inputMask();
  showMoreRow();

  // SVG
  svg4everybody({});
});