$(document).ready(function () {
  $(".carousel").slick({
    mobileFirst: true,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3200,
    responsive: [
      {
        breakpoint: 374,
        settings: {
          arrows: true,
          prevArrow:
            '<button type="button" class="slide-arrow slick-prev"><img class="arrow-left carousel-arrow" src="/wp-content/themes/caroline/assets/svg/left-arrow.svg"></button>',
          nextArrow:
            '<button type="button" class="slide-arrow slick-next"><img class="arrow-right carousel-arrow" src="/wp-content/themes/caroline/assets/svg/right-arrow.svg"></button>',
        },
      },
    ],
  });
});
