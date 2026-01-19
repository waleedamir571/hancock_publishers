$("document").ready(function(){
    $('.books').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });

    $('.client-logo').owlCarousel({
        loop:true,
        margin:10,
        dots:true,
        nav:false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:6
            }
        }
    })
    
    $('.clientmonials').owlCarousel({
        loop:true,
        margin:50,
        nav:true, 
        dots:false,     
        responsive:{
            0:{
                items:1
            },
            768:{
                items:1
            },
            1152:{
                items:1
            },
            1280:{
                items:1
            }
        }
    });

    $('.publishmonials').owlCarousel({
        loop:true,
        margin:50,
        nav:true, 
        dots:false,     
        responsive:{
            0:{
                items:1
            },
            768:{
                items:1
            },
            1152:{
                items:3
            },
            1280:{
                items:3
            }
        }
    });

    $('.book-writing').owlCarousel({
        loop:true,
        margin:60,
        nav:true,
        dots:false,

       
        responsive:{
            0:{
                items:1
            },
            767:{
                items:1
            },
            1000:{
                items:4
            }
        }
    });

    $('.nonfiction-books').owlCarousel({
        loop:true,
        margin:10,
        dots:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:6
            }
        }
    });

    $('.publishing-books').owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:6
            }
        }
    });

    $('.videotutorials').owlCarousel({
        loop:true,
        nav:true,
        autoplay:true,
        navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        margin:10,
       
        items:2
    });

    $(".setheight").css({
        height : $(".getheight").height(),
    });

    $('.centerSlider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        arrows: false,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });
    
});

    
    