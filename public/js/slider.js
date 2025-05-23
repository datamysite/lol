$(document).ready(function() {
  // SLIDER
  var carouselslider = new Swiper('.carousel-slider', {
    spaceBetween: 0,
    slidesPerView: 3,
    centeredSlides: true,
    autoplay: false,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'progressbar',
    },
    loop: true,
    breakpoints: {
      1024: {
        slidesPerView: 3
      },
      768: {
        slidesPerView: 2
      },
      640: {
        slidesPerView: 1
      },
      320: {
        slidesPerView: 1
      }
    }
  });
});

jQuery(document).ready(function($) {
    var tabwrapWidth= $('.tabs-wrapper').outerWidth();
    var totalWidth=0;
    jQuery("ul li").each(function() { 
      totalWidth += jQuery(this).outerWidth(); 
    });
    if(totalWidth > tabwrapWidth){
      $('.scroller-btn').removeClass('inactive');
    }
    else{
      $('.scroller-btn').addClass('inactive');
    }

    if($("#scroller").scrollLeft() == 0 ){
      $('.scroller-btn.left').addClass('inactive');
    }
    else{
       $('.scroller-btn.left').removeClass('inactive');
    }
    var liWidth= $('#scroller li').outerWidth();
    var liCount= $('#scroller li').length;
    var scrollWidth = liWidth * liCount;

        $('.right').on('click', function(){
          $('.nav-tabs').animate({scrollLeft: '+=200px'}, 300);
          console.log($("#scroller").scrollLeft() + " px");
        });
        
        $('.left').on('click', function(){
          $('.nav-tabs').animate({scrollLeft: '-=200px'}, 300);
        });
      scrollerHide()
     
      function scrollerHide(){
        var scrollLeftPrev = 0;
        $('#scroller').scroll(function () {
            var $elem=$('#scroller');
            var newScrollLeft = $elem.scrollLeft(),
                width=$elem.outerWidth(),
                scrollWidth=$elem.get(0).scrollWidth;
            if (scrollWidth-newScrollLeft==width) {
                $('.right.scroller-btn').addClass('inactive');
            }
            else{

                 $('.right.scroller-btn').removeClass('inactive');
            }
            if (newScrollLeft === 0) {
              $('.left.scroller-btn').addClass('inactive');
            }
            else{

                 $('.left.scroller-btn').removeClass('inactive');
            }
            scrollLeftPrev = newScrollLeft;
        });
      }
  });