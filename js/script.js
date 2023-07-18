$(function () {
  var navbar = $(".header-inner");
  $(window).scroll(function () {
    if ($(window).scrollTop() <= 40) {
      navbar.removeClass("navbar-scroll");
    } else {
      navbar.addClass("navbar-scroll");
    }
  });
});

// --------------------------------Active-link-Navbar--------------------
const currentlink = location.href;
const menuitems = document.getElementsByClassName("nav-link");
// console.log(menuitems);
for (let i = 0; i < menuitems.length; i++) {
  if (menuitems[i].href === currentlink) {
    menuitems[i].className = "current";
  }
}

// ----------------------------Home-gallery--------------------------
$(".gallery_slider_area").owlCarousel({
  autoplay: true,
  slideSpeed: 900,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  items: 3,
  loop: true,
  rtl: true,
  mouseDrag: true,
  nav: true,
  navText: [
    '<i class="fa fa-arrow-left"></i>',
    '<i class="fa fa-arrow-right"></i>',
  ],
  margin: 10,
  dots: true,
  dotsEach: true,
  responsive: {
    320: {
      items: 1,
    },
    767: {
      items: 2,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 4,
    },
  },
});

// --------------------------------Fancybox--------------
if ($.isFunction($.fn.fancybox)) {
  $('[data-fancybox],[data-fancybox="gallery1"]').fancybox({});
}

// --------------------carousel_for_testimonial------------
$(".owl_testimonial").owlCarousel({
  autoplay: true,
  slideSpeed: 3000,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  items: 1,
  loop: true,
  rtl: false,
  mouseDrag: true,
  nav: false,
  navText: [
    '<i class="fa fa-arrow-left"></i>',
    '<i class="fa fa-arrow-right"></i>',
  ],
  // margin: 10,
  dots: false,
  dotsEach: true,
  responsive: {
    320: {
      items: 1,
    },
    767: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

// -----------------------slick-carousel-for-gallery----------------
$(".slider-single").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  arrows: false,
  asNavFor: ".slider-nav",
});

$(".slider-nav").slick({
  slidesToShow: 4,
  infinite: true,
  autoplay:true,
  autoplaySpeed: 2000,
  slidesToScroll: 4,
  dots: true,
  arrows: true,
  asNavFor: ".slider-single",
  focusOnSelect: true,
  centerMode: true,
});


// ----------------number_validation-----------------------
function validateNumber(elem, alertId) {
  if (isNaN(elem.value)) {
    document.getElementById(alertId).innerHTML = " * Enter Only Number";
  } else {
    document.getElementById(alertId).innerHTML = "";

    if (elem.value.length  > 10 || elem.value.length  < 10 ) {
      document.getElementById(alertId).innerHTML = "* Enter Only 10 digits";
    }
   
  }
}