$(document).ready(function () {

  // sticky-menu
  $(window).scroll(function () {
    if ($(window).scrollTop() > 20) {
      $(".main-menu").addClass('sticky');
    } else {
      $(".main-menu").removeClass('sticky');
    }
  });

  //BackToTop
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#back_to_top').fadeIn();
      } else {
        $('#back_to_top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#back_to_top').click(function () {
      $('#back-to-top').tooltip('hide');
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });

    $('#back_to_top').tooltip('show');

  });
});

// Isotope masonary media gallery
$(document).ready(function () {
  $('.grid').isotope({
    itemSelector: '.grid-item',
    masonry: {
      columnWidth: 0
    }
  });
});

// back-to
var btn = $('#button');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, '300');
});


// slider
$(document).ready(function () {
  $('.hero-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 3000,
    lazyLoad: 'ondemand',
    fade:true,
    autoplay: true,
    prevArrow: '<span class="priv_arrow"><i class="fas fa-chevron-left"></i></span>',
    nextArrow: '<span class="next_arrow"><i class="fas fa-chevron-right"></i></span>',
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
          dots: true,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }

    ]

  });

});

//Search

$(".menu-search").click(function (event) {
  event.preventDefault();

  $(".search_block").toggle("show hide");

});

$('a.close-search').click(function (e) {

  e.preventDefault();

  $(".search_block").toggle("show hide");

});


// slider
  $(document).ready(function () {
    $('.customer-logos').slick({
      dots: false,
      arrows: false,
      infinite: true,
      speed: 500,
      lazyLoad: 'ondemand',
      autoplay: true,
      cssEase: 'linear',
      prevArrow: '<span class="priv_arrow"><i class="fas fa-chevron-left"></i></span>',
      nextArrow: '<span class="next_arrow"><i class="fas fa-chevron-right"></i></span>',
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1023,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: false,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }

      ]

    });
  });