'use strict';
let svg4everybody = require('svg4everybody'),
  popup = require('jquery-popup-overlay'),
  iMask = require('imask'),
  Swiper = require('swiper'),
  tabslet = require('tabslet'),
  fancybox = require('@fancyapps/fancybox'),
  jQueryBridget = require('jquery-bridget'),
  Isotope = require('isotope-layout'),
  matchHeight = require('jquery-match-height-browserify');

jQuery(document).ready(function($) {
  jQueryBridget( 'isotope', Isotope, $ );

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
    let btnHtml = '<tfoot>\n' +
      '              <tr>\n' +
      '                <td colspan="8">\n' +
      '                  <a href="#" class="championship-table__more">More...</a>\n' +
      '                </td>\n' +
      '              </tr>\n' +
      '              </tfoot>';

    $('.championship-table table').append(btnHtml);

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
            $(this).parents('tfoot').hide();
          }

          if ($('.championship-slider').length) {
            champSlider.update();
          }
        });
      });
    }
  };

  if ($('.team').length) {

    $('.team').each(function(i, el) {

      let $this = $(this);
      $this.addClass("team-" + i);
      $this.parent().find(".swiper-pagination").addClass("swiper-pagination-" + i);

      let pagination = '.swiper-pagination-' + i;

      new Swiper('.team-' + i, {
        slidesPerView: 1,
        spaceBetween: 70,
        watchOverflow: true,
        pagination: {
          el: pagination,
          type: 'bullets',
          clickable: true
        },
        breakpoints: {
          1231: {
            slidesPerView: 4,
          }
        }
      });
    });
  }

  $('.services-tabs').tabslet({
    animation: true
  });

  $('body').on('click', '.filter-resource .filter-dropdown__body a', function(e) {
    e.preventDefault();
    let id = $(this).data('term-id');
    let val = $(this).text();
    let response = $('#response');

    $(this).siblings().removeClass('active');
    $(this).addClass('active');
    $('.filter-dropdown__head').text(val);

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

  $('body').on('click', '.filter-news .filter-dropdown__body a', function(e) {
    e.preventDefault();
    let newsType = $(this).data('news-type');
    let val = $(this).text();
    let response = $('#response');

    $(this).siblings().removeClass('active');
    $(this).addClass('active');
    $('.filter-dropdown__head').text(val);

    $.ajax({
      type: "POST",
      url: window.wp_data.ajax_url,
      data : {
        action : 'news_filter',
        news_type: newsType
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

  $('.team-card__more').fancybox().attr('data-fancybox', 'group');

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

  // Filtering isotop
  $(window).on('load', function () {
    let $grid = $('.team-list').isotope({
      itemSelector: '.team-list .team-card',
      horizontalOrder: true,
      fitWidth: true,
      layoutMode: 'masonry',
      filter: $('.team-filter__btn.is-checked').data('filter')
    });

    // bind filter button click
    $('.team-filter').on( 'click', 'button', function() {
      let filterValue = $( this ).attr('data-filter');
      $grid.isotope({ filter: filterValue });
    });

    // change is-checked class on buttons
    $('.team-filter').each( function( i, buttonGroup ) {
      let $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', 'button', function() {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        $( this ).addClass('is-checked');
      });
    });

  });

  $('.partners-card__img').matchHeight();

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