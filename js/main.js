$(function(){
    "use strict";

    // $('.text-slide-show').unslick({
    //     arrows: false,
    //     dots: false,
    //     fade: true,
    //     autoplay: true,
    //     speed: 2000
    //   });

      $('.process-slider').slick({
        arrows: false,
        dots: false,
        fade: true,
        autoplay: true,
        speed: 2000
      });

      $('.team-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        variableWidth: true,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
           breakpoint: 400,
           settings: {
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1
           }
        }]
    });
      

});