
import lightbox from '../../node_modules/lightbox2/dist/js/lightbox';

// const debounce = require('lodash/debounce');




jQuery(document).ready(function($) {


  if($('#front-page-ig').length > 0) {

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
  }


// add padding top to show content behind navbar



// var lastScrollTop = 0;

// function debounce(func, wait, immediate) {
//   var timeout;
//   return function() {
//       var context = this, args = arguments;
//       var later = function() {
//           timeout = null;
//           if (!immediate) func.apply(context, args);
//       };
//       var callNow = immediate && !timeout;
//       clearTimeout(timeout);
//       timeout = setTimeout(later, wait);
//       if (callNow) func.apply(context, args);
//    };
//   };
  
//   // call debounce logic by passing target event handler
//   var optimisedFunc= debounce(function() {
//      var currentScrollTop = $(this).scrollTop();
//      if (currentScrollTop > lastScrollTop) {
//        console.log('!!!')
//       $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
//      } else {
//       console.log('???')

//       $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
//      }
//      lastScrollTop = currentScrollTop;
//   }, 250);
  
//   $(window).on('scroll', function() {
//         optimisedFunc();
//   });



// detect scroll top or down
if ($('.smart-scroll').length > 0) { // check if element exists
    var last_scroll_top = 0;

    const scroll = $(document).scrollTop();
    const navHeight = $('.navbar').outerHeight();
    $(window).on('scroll', function() {

        const scroll_top = $(this).scrollTop();
      const scrolled = $(document).scrollTop();
 
        console.log(navHeight)

        if(scrolled < navHeight ) {
      $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');

      // $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');

        }
        else if(scroll_top > last_scroll_top) {
          $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');

      //  console.log('!!!')

        } else if (scroll_top < last_scroll_top) {
      $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');


        }
        last_scroll_top = scroll_top;
    });
}






lightbox.option({
  'resizeDuration': 300,
  'fadeDuration' : 700,
  'alwaysShowNavOnTouchDevices' : true,


})

if($('.dropdown-menu').children('.current_page_item').length > 0) {
$('.current_page_ancestor > a').css('text-decoration', 'underline')
}

if($('.listen-artist-on-concert').length > 0) {

if($('.concert-exists-unique-class-for-js-only').length === 0) {
  $('.listen-artist-on-concert').text(' ');
}
}




// let vh = window.innerHeight * 0.01;
// document.documentElement.style.setProperty('--vh', `${vh}px`);

// console.log(vh);

// // We listen to the resize event
// window.addEventListener('resize', () => {
//   // We execute the same script as before
//   let vh = window.innerHeight * 0.01;
//   document.documentElement.style.setProperty('--vh', `${vh}px`);
// });




})


