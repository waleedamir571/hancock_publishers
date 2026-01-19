AOS.init();

/* ------ Sticky Headers ------  */


window.addEventListener('scroll', () => {
    let navbar = document.querySelector('nav')
    if (scrollY > 85) {
        navbar.classList.add('bg-white');
        navbar.classList.add('shadow-sm');
        navbar.classList.remove('pt-4');
    } else {
        navbar.classList.add('pt-4');
        navbar.classList.remove('bg-white');
        navbar.classList.remove('shadow-sm');
    }
})


/* ------ Slick Sliders ------  */


 $(document).on('ready', function() {
      $(".regular").slick({
        dots: false,
        loop: true,
        autoplay:true,
        autoplaySpeed:4000,
        centerMode: true,
        centerPadding: '0px',

        slidesToShow: 5,
        slidesToScroll: 1,
        arrows:true,
        nav:true,
        responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
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
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
      });
});

$(document).on('ready', function() {
      $(".regular-portfolio").slick({
        dots: false,
        loop: true,
        autoplay:true,
        autoplaySpeed:3000,
        centerMode: false,
        centerPadding: '60px',

        slidesToShow: 6,
        slidesToScroll: 1,
        arrows:true,
        nav:true,
        responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
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
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
      });
});


$(document).on('ready', function() {
      $(".regular-1").slick({
        dots: true,
        infinite: true,
        autoplay:true,
        autoplaySpeed:3000,
        centerMode: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:true,
        nav:true
      });
});


/* ------ Typewriter Editor ------  */


$(document).ready(function($) { 
 
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap-banner-text">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 10; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = `.typewrite {
  border-right: .1em solid currentColor;
  padding: 0 3px;
  animation: blink-caret 600ms step-end infinite
}

@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: currentColor }
}`;
        document.body.appendChild(css);
    };
      
    });


/* ------ Search Overlay  ------  */


function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}


/* ------ Navigation Menu Active  ------  */


$(document).on('ready', function() {
  var urlact = window.location;
  $('.navbar-nav li > a[href="' + urlact + '"]').parent().addClass('text-primary fw-bold');
  $('.navbar-nav li > a').filter(function () {
          return this.href == urlact;
  }).addClass('text-primary fw-bold').addClass('text-text-primary fw-bold');
});

 
/* ------ For Nav  ------  */



let navbar = document.querySelector(".navbar");
let searchBox = document.querySelector(".search-box .bx-search");
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .fa-bars");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}


let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function() {
 navLinks.classList.toggle("show1");
}

// Search Function


$(document).ready(function () {
    function fetchData() {
        var s = $("#search-box").val();
        if (s == '') { 
            $('#dropdown').css('display', 'none');
        }
        $.post("backend/search-api/autocomplete.php",
            {
                s: s
            },
            function (data, status) {
                if (data != "not found") {
                    $('#dropdown').css('display', 'block');
                    $('#dropdown').html(data);
                }
            });
    }
    $('#search-box').on('input', fetchData);
    $("body").on('click', () => {
        $('#dropdown').css('display', 'none');
    });
    $('#search-box').on('click', fetchData);
});

//  CTA Form

$(document).ready(function () {

    $(".cta_for_emb_form").click(function(event) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $("#after_cta").offset().top -50
      }, 1000);
    });
});




// site counter 

$(document).ready(function () {

$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
});

// video caousel 


var lightbox = GLightbox();
    lightbox.on('open', (target) => {
        console.log('lightbox opened');
    });
    var lightboxDescription = GLightbox({
        selector: '.glightbox2'
    });
    var lightboxVideo = GLightbox({
        selector: '.glightbox3'
    });
    lightboxVideo.on('slide_changed', ({ prev, current }) => {
        console.log('Prev slide', prev);
        console.log('Current slide', current);

        const { slideIndex, slideNode, slideConfig, player } = current;

        if (player) {
            if (!player.ready) {
                // If player is not ready
                player.on('ready', (event) => {
                    // Do something when video is ready
                });
            }

            player.on('play', (event) => {
                console.log('Started play');
            });

            player.on('volumechange', (event) => {
                console.log('Volume change');
            });

            player.on('ended', (event) => {
                console.log('Video ended');
            });
        }
    });

    var lightboxInlineIframe = GLightbox({
        selector: '.glightbox4'
    });

// anas js    

function myFunction1() {
  var dots = document.getElementById("dots-1");
  var moreText = document.getElementById("more-1");
  var btnText = document.getElementById("myBtn-1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}

