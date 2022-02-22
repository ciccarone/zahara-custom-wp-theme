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

  if ($('.terpene__effects__button').length > 0) {
    $('.terpene__effects__button').click(function(e){
      e.preventDefault();
      $('.terpene__effects__button').each(function(){
        $(this).removeClass('active');
        $(this).addClass('inactive');
      });
      $(this).addClass('active');
      $(this).removeClass('inactive');

      $('.terpene__icons__icon').each(function(){
        $(this).hide();
      });
      $('.terpene__screens__screen').each(function(){
        $(this).hide();
      })

      $('.terpene__icons__icon[data-effect="'+$(this).attr('id')+'"]').show();
    });

    // $('.terpene__effects__button:first-child').click();

    $('.terpene__icons__icon').click(function(z){
      z.preventDefault();
      $('.terpene__screens__screen').each(function(){
        $(this).hide();
      })
      $('.terpene__screens__screen[data-screen="'+$(this).data('screens')+'"]').show();

    });
  }


});
