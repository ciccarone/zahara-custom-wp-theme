// Add your custom JS here.

jQuery(document).ready(function( $ ) {
  $(document).ready(function(){

    function scrollToAnchor(aid){
        var aTag = $("a[name='"+ aid +"']");
        $('html,body').animate({scrollTop: aTag.offset().top},'fast');
    }

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


    $('.full-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      adaptiveHeight: true,
      customPaging: function(slider, i) {
        return '<div class="custom-slick-dots" id="' + i + '"><i class="fa fa-solid fa-circle"></i></div>';
      }
      // nextArrow: '<i class="far fa-chevron-right"></i>',
      // prevArrow: '<i class="far fa-chevron-left"></i>',

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
        scrollToAnchor('screens-anchor');
        $('.terpene__screens__screen').each(function(){
          $(this).hide();
        })
        $('.terpene__screens__screen[data-screen="'+$(this).data('screens')+'"]').show();
        $('.terpene__screens__screen[data-screen="'+$(this).data('screens')+'"] .screen__block').addClass('animate__animated').addClass('animate__fadeIn');
        $('.terpene__screens__screen[data-screen="'+$(this).data('screens')+'"] .screen__data').addClass('animate__animated').addClass('animate__fadeInRight');

      });
    }

  });




});
