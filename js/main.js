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

    function coverImgArea() {
      $('.tempt-img-container').each(function(){
        var divHeight = $(this).height(); 
        $(this).parent('section').find('.blank').css('height', divHeight+'px');
      });
    }

    coverImgArea();

    $('.testimonial-slider').slick({
      arrows: false,
      dots: true,
      fade: true,
      infinite: true,
      autoplay: true,
      speed: 2000,
      slidesToScroll: 1,
      adaptiveHeight: true,
      pauseOnHover: true
    });

    function realTime(time) {
      var timeWrapper = $('.timezone');
      var getTime = new Date(time);
      var setTime = new Date(getTime).toLocaleTimeString("en-US");
      var getTimeStatus = setTime.replace(/[^a-zA-Z ]/g, "").trim();
      if(getTimeStatus === 'AM') {
        timeWrapper.text('Its a grate day ahead');
      } else {
        timeWrapper.text('What a wonderful evening!!!');
      }
    }
    

    $.get("https://api.ipdata.co?api-key=test", function (response) {
      try {
        console.log(JSON.stringify(response, null, 4))
       // console.log(response.time_zone.current_time);
        $('.country').text(response.country_name);
        realTime(response.time_zone.current_time);
      } catch (error) {
        throw error
      }
      // $("#response").html(JSON.stringify(response, null, 4));
    }, "jsonp");
      
    setTimeout(function(){
      $('body').addClass('loaded');
    }, 5000);

});