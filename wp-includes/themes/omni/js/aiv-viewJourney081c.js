(function($){

       // OMNI SLICK INITI
   function omniSlicks() {

    // JOURNEY SLICK BOX
    $('.image-slick-box').each(function () {
      var carousel = $(this);
      carousel.slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true,
        arrows: false,
        draggable: true,
        mobileFirst: true,
        customPaging: function (slider, i) {
          return '<i class="fas fa-circle active-dot"></i><i class="far fa-circle inactive-dot "></i>';
        },
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,

          }
        }, ]

      });
    });


      // Accomondation  SLICK BOX
      $('.accom-slick-box').each(function() {
        var carousel = $(this);
        var id = $(this).attr('id');
        console.log('blog slider slick loaded');        
        if (!carousel.hasClass('slick-initialized')) {
          carousel.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            draggable: true,
            adaptiveHeight: true,
            prevArrow: $('#'+id+'.blog-slider.arrow.previous'),
            nextArrow: $('#'+id+'.blog-slider.arrow.next'),
            customPaging: function(slider, i) {
              return '<i class="fas fa-circle active-dot"></i><i class="far fa-circle inactive-dot "></i>';
            },
            responsive: [{
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
    
              }
            }, ]            
          });
        }
      });

     // Accomondation images SLICK BOX
     $('.accom-image-slick-box').each(function () {
      var carousel = $(this);
      carousel.slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true,
        arrows: false,
        draggable: true,
        mobileFirst: true,
        customPaging: function (slider, i) {
          return '<i class="fas fa-circle active-dot"></i><i class="far fa-circle inactive-dot "></i>';
        },
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,

          }
        }, ]

      });
    });

    // ROOMS SLICK BOX 
    $('.rooms-slick-box').each(function () {
      var carousel = $(this);
      carousel.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,    
        arrows: false,   
        // prevArrow: '<span class="rooms-arrow rooms-slick-prev " aria-label="Previous" type="button" ></span>',
        // nextArrow: '<span  class="rooms-arrow rooms-slick-next " aria-label="Next" type="button" ></span>',
        draggable: true,
         mobileFirst: true,         
        customPaging: function (slider, i) {
          return '<i class="fas fa-circle active-dot"></i><i class="far fa-circle inactive-dot "></i>';
        },
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,

          }
        }, ]

      });
    });

    $('.rooms-slider-slick-box').each(function() {
      var carousel = $(this);
      var id = $(this).attr('id');
      console.log('blog slider slick loaded');      
      if (!carousel.hasClass('slick-initialized')) {
        carousel.slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          mobileFirst: true,
          dots: false,
          arrows: true,
          draggable: true,
          adaptiveHeight: true,
          prevArrow: $('.blog-slider.arrow.previous'),
          nextArrow: $('.blog-slider.arrow.next'),
          customPaging: function(slider, i) {
            return '<i class="fas fa-circle active-dot"></i><i class="far fa-circle inactive-dot "></i>';
          },
          responsive: [{
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
  
            }
          }, ]
        });
      }
    });

    $('.addon-slider-slick-box').each(function() {
      var carousel = $(this);
      var id = $(this).attr('id');
      console.log('blog slider slick loaded');
      
      if (!carousel.hasClass('slick-initialized')) {
        carousel.slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          mobileFirst: true,
          dots: false,
          arrows: true,
          draggable: true,
          adaptiveHeight: true,
          prevArrow: $('.blog-slider.arrow.previous'),
          nextArrow: $('.blog-slider.arrow.next'),
          customPaging: function(slider, i) {
            return '<i class="fas fa-circle active-dot"></i><i class="far fa-circle inactive-dot "></i>';
          },
          responsive: [{
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
  
            }
          }, ]
        });
      }
    });

    $('.blog1-slider-slick-box').each(function() {
      var carousel = $(this);
      var id = $(this).attr('id');
      console.log('blog slider slick loaded');
      
      if (!carousel.hasClass('slick-initialized')) {
        carousel.slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          mobileFirst: true,
          dots: false,
          arrows: true,
          draggable: true,
          adaptiveHeight: true,
          prevArrow: $('#'+id+' .blog-slider.arrow.previous'),
          nextArrow: $('#'+id+' .blog-slider.arrow.next'),
          customPaging: function(slider, i) {
            return '<i class="fas fa-circle active-dot"></i><i class="far fa-circle inactive-dot "></i>';
          },
          responsive: [{
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
  
            }
          }, ]
        });
      }
    });

    $('.blog2-slider-slick-box').each(function() {
      var carousel = $(this);
      var id = $(this).attr('id');
      console.log('blog slider slick loaded');
      
      if (!carousel.hasClass('slick-initialized')) {
        carousel.slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          mobileFirst: true,
          dots: false,
          arrows: true,
          draggable: true,
          adaptiveHeight: true,
          prevArrow: $('#'+id+' .blog-slider.arrow.previous'),
          nextArrow: $('#'+id+' .blog-slider.arrow.next'),
          customPaging: function(slider, i) {
            return '<i class="fas fa-circle active-dot"></i><i class="far fa-circle inactive-dot "></i>';
          },
          responsive: [{
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
  
            }
          }, ]
        });
      }
    });

    // $('.aiv-journey-slider-slick-box').each(function() {
    //   var carousel = $(this);
    //   var id = $(this).attr('id');
    //   console.log('blog slider slick loaded');
      
    //   if (!carousel.hasClass('slick-initialized')) {
    //     carousel.slick({
    //       slidesToShow: 1,
    //       slidesToScroll: 1,
    //       mobileFirst: true,
    //       dots: false,
    //       arrows: true,
    //       draggable: true,
    //       adaptiveHeight: true,
    //       prevArrow: $('.blog-slider.arrow.previous'),
    //       nextArrow: $('.blog-slider.arrow.next'),
    //       customPaging: function(slider, i) {
    //         return '<i class="fas fa-circle active-dot"></i><i class="far fa-circle inactive-dot "></i>';
    //       },
    //       responsive: [{
    //         breakpoint: 768,
    //         settings: {
    //           slidesToShow: 2,
    //           slidesToScroll: 2,
  
    //         }
    //       }, ]
    //     });
    //   }
    // });
    $(document).scroll(function() {
      var y = $(this).scrollTop();
      if (y > 600) {
        $('.aiv-sideButtonsExpierence').fadeIn();
      } else {
        $('.aiv-sideButtonsExpierence').fadeOut();
      }
    });

    // ROOMS SLIDER IMAGES
    $('.image-rooms-slick-box').each(function () {
      var carousel = $(this);
      carousel.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        prevArrow: '<button class="slide-arrow slick-prev" aria-label="Previous" type="button"><i class="fas fa-angle-left"></i></button>',
              nextArrow: '<button class="slide-arrow slick-next" aria-label="Next" type="button"><i class="fas fa-angle-right"></i></button>',
        draggable: true,        
        customPaging: function (slider, i) {
          return '<i class="fas fa-circle active-dot"></i><i class="far fa-circle inactive-dot "></i>';
        },
      });
    });

 // RELATED JOURNEY SLICK BOX 
 $('.related-journey-slick').each(function () {
  var carousel = $(this);
  carousel.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,    
    arrows: false,   
    // prevArrow: '<span class="rooms-arrow rooms-slick-prev " aria-label="Previous" type="button" ></span>',
    // nextArrow: '<span  class="rooms-arrow rooms-slick-next " aria-label="Next" type="button" ></span>',
    draggable: true,
     mobileFirst: true,         
    customPaging: function (slider, i) {
      return '<i class="fas fa-circle active-dot"></i><i class="far fa-circle inactive-dot "></i>';
    },
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,

      }
    }, ]  

  });
});

  // RELATED BLOGS SLICK BOX 
  $('.related-blogs-slick').each(function () {
    var carousel = $(this);
    carousel.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,    
      arrows: true,   
      // prevArrow: '<span class="rooms-arrow rooms-slick-prev " aria-label="Previous" type="button" >Previous</span>',
      // nextArrow: '<span  class="rooms-arrow rooms-slick-next " aria-label="Next" type="button" >Next</span>',
      nextArrow: '<div class="slick-custom-arrow slick-custom-arrow-right"><i class="fas fa-angle-right"></i></div>',
      prevArrow: '<div class="slick-custom-arrow slick-custom-arrow-left"><i class="fa fa-angle-left"></i></div>',
      draggable: true,
       mobileFirst: true,         
      customPaging: function (slider, i) {
        return '<i class="fas fa-circle active-dot"></i><i class="far fa-circle inactive-dot "></i>';
      },
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,

        }
      }, ]

    });
  });
    $('.slicks>div').fadeIn();

  }

    $(".viewJourney").click(function () {
        
        var qstr = 'journey_id=' + $(this).data("journey_id") + '&action=getViewJourneyQuery';
        qstr.replace(/\s/g, '');


        $("#viewJourneyContent").html("Loading...");

        $.ajax({
            type: "POST",
            dataType: "html",
            url: omni_ajax_script.ajaxurl,
            data: qstr,
            success: function (data) {
                $("#viewJourneyContent").html(data);
                omniSlicks();
            },
            
            error: function (jqXHR, textStatus, errorThrown) {
              console.log(errorThrown);
              console.log(textStatus);
              console.log(jqXHR);
            }
        });

    })
  
})(jQuery);