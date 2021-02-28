console.log('hello')

import bootstrap from 'bootstrap';
import lightbox from '../../node_modules/lightbox2/dist/js/lightbox';

  // import Swiper bundle with all modules installed
  import Swiper from '../../node_modules/swiper/swiper-bundle';

  // init Swiper:
  const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });


jQuery(document).ready(function($) {


// add padding top to show content behind navbar

// detect scroll top or down
if ($('.smart-scroll').length > 0) { // check if element exists
    var last_scroll_top = 0;
    $(window).on('scroll', function() {

        const scroll_top = $(this).scrollTop();
        console.log(scroll_top)

        if(scroll_top < last_scroll_top) {
            $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
        }
        else {
            $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
        }
        last_scroll_top = scroll_top;
    });
}


lightbox.option({
  'resizeDuration': 300,
  'fadeDuration' : 700,
  'alwaysShowNavOnTouchDevices' : true,


})


})

