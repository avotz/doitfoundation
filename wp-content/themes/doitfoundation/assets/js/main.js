;(function($){

   
  $('.property-slider .slider').slick({
      infinite: true,
      speed: 500,
      fade: true,
      autoplay: true,
      arrows:true,
      prevArrow:'<i class="fa fa-angle-left"></i>',
      nextArrow:'<i class="fa fa-angle-right"></i>',
      dots:false,
      cssEase: 'linear'
  });

    $('.banner-slider').slick({
        dots: false,
        autoplay: true,
        speed: 500,
        arrows: false,
        cssEase: 'linear',
        fade: true,
        pauseOnHover: false
    });
  
  $('.map')
  .click(function(){
      $(this).find('iframe').addClass('clicked')})
  .mouseleave(function(){
      $(this).find('iframe').removeClass('clicked')});

  function isHome(){
      return $('body').hasClass('home');
    }
    
    $(window).scroll(function () {

          if(isHome()){
            
              if ($(this).scrollTop() > 0) {
                  $('body').addClass("header--fixed");
              } else {
                  $('body').removeClass("header--fixed");
              }
        }

        /* if ($(this).scrollTop() > $('.banner').height()-200) {
                  $('.banner-title').addClass("inSection");
              } else {
                  $('.banner-title').removeClass("inSection");
              }*/

      });



    // SMOOTH ANCHOR SCROLLING
    var $root = $('html, body');
    $('a.anchor').click(function (e) {
        var href = $.attr(this, 'href');
        if(isHome()){
            if (typeof ($(href)) != 'undefined' && $(href).length > 0) {
                var anchor = '';

                if (href.indexOf("#") != -1) {
                    anchor = href.substring(href.lastIndexOf("#"));
                }

                if (anchor.length > 0) {
                    console.log($(anchor).offset().top);
                    console.log(anchor);
                    $root.animate({
                        scrollTop: $(anchor).offset().top
                    }, 500, function () {
                        window.location.hash = anchor;
                    });
                    e.preventDefault();
                }
            }
        }else{
            window.location = '/' + href;
        }
    });
 
$(window).on('load', function() {
      
      resize();
     

});


$(window).resize(resize);

function resize () {
   responsive();
}

function responsive() {
           
                // var isResponsive = $('.main').hasClass('fp-responsive');
                // if (getWindowWidth() < 1000) {
                //     if (!isResponsive) {
                //         $.fn.fullpage.setAutoScrolling(false, 'internal');
                //         $.fn.fullpage.setFitToSection(false, 'internal');
                //         $('.main').addClass('fp-responsive');
                //     }
                // } else if (isResponsive) {
                //      $.fn.fullpage.setAutoScrolling(true, 'internal');
                //      $.fn.fullpage.setFitToSection(true, 'internal');
                //      $('.main').removeClass('fp-responsive');
                // }

               
            
        }


    
})(jQuery);

