// Add your custom JS here.

jQuery(document).ready(function( $ ) {
  $(document).ready(function(){
    $('.slider').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows: true,
      nextArrow: '<i class="far fa-chevron-right"></i>',
      prevArrow: '<i class="far fa-chevron-left"></i>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
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
});
