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
        var divHeight = $(this).height() / 1.7; 
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

    function realTime() {

      var timeWrapper = $('.timezone');
      var getTime = new Date();
      // var setTime = new Date(getTime).toLocaleTimeString("en-US");
      var hours = getTime.getHours();
      var minute = checkTime(getTime.getMinutes());
      var seconds = checkTime(getTime.getSeconds());
      var timeFormat = (hours >= 12)? " PM ":" AM ";
      hours = (hours >= 12)? hours - 12: hours;
      if (hours === 0 && timeFormat === ' PM ') {
          if (minute === 0 && seconds === 0) {
              hours = 12;
              timeFormat = ' Noon';
              timeWrapper.find('.time-msg').text('Its a grate good after noon');
          } else {
              hours = 12;
              timeFormat = ' PM';
              timeWrapper.find('.time-msg').text('Its a grate day ahead');
          }
      }

      if (hours === 0 && timeFormat === ' AM ') {
          if (minute === 0 && seconds === 0) {
              hours = 12;
              timeFormat = ' Midnight';
              timeWrapper.find('.time-msg').text('Midnight stories');
          }
          else {
              hours = 12;
              timeFormat = ' AM';
              timeWrapper.find('.time-msg').text('Awaking nights :)');
          }
      }

      if(timeFormat === ' AM ') {
        timeWrapper.find('.time-msg').text('Happy Day.');
      } else if(timeFormat === ' PM ') {
        timeWrapper.find('.time-msg').text('I like the night.');
      }

      var clock = hours + '' + timeFormat + ':' + minute + ':' + seconds;
      timeWrapper.find('.time').text(clock);
      setTimeout(realTime, 500); //recursive
      
    }
    
    function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
    }

    $.get("https://api.ipdata.co?api-key=test", function (response) {
      try {
       // console.log(JSON.stringify(response, null, 4))
       // console.log(response.time_zone.current_time);
        $('.country').text(response.country_name);
        realTime();
      } catch (error) {
        throw error
      }
      // $("#response").html(JSON.stringify(response, null, 4));
    }, "jsonp");
      
    setTimeout(function(){
      $('body').addClass('loaded');
    }, 5000);

    $("section, div, figure").each(function(indx) {
      if ($(this).attr("data-background")) {
          $(this).css("background-image", "url(" + $(this).data("background") + ")");
      }
  });

  // $(".navicon").on('click',function(e){
  //   e.preventDefault();
  //   e.stopPropagation();
  //   $(this).toogleClass("active")
  // });
  $( ".navicon" ).click(function(e) {
      e.preventDefault();
      e.stopPropagation();
      $( this ).toggleClass( "active" );
      $( '.navigation-bg' ).toggleClass( "active" );
      $( '.navigation' ).toggleClass( "active" );
  });

});