

<?php include ('partials/header.php'); ?>




<header class="section masthead bg-gradient" id="hero">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- LEFT TEXT COLUMN -->
      <div class="col-lg-6 col-sm-12 _pt-md-5 position-relative m-br-hide">

        <h1 class="home">
          Book Writing Services Simplified For You!
        </h1>

        <h2>
          Hancock Publishers Bring You Premium Book <br>
          <span class="text-primary fw-lighter">
            <span class="typewrite"
                  data-type='["Writing","Editing","Designing","Publishing","Marketing"]'>
              <span class="wrap-banner-text">Writing</span>
              <span class="border-blink"></span>
            </span>
          </span>
          Services
        </h2>

        <p class="mt-3">
          Discover the secret of Ebook Success
          with Hancock Book Writing Services
        </p>

        <p class="d-flex">
          <a class="cta-btn-small main-btn book-btn"
             data-bs-toggle="modal"
             href="#mainpopupform"
             role="button">
            Get Started
          </a>

          <a class="cta-btn-small main-btn book-btn mx-4 btn-black-bg"
             href="contact-us">
            Free consultation
          </a>
        </p>

        <?php include('partials/header-counter.php'); ?>

        <!-- Only ONE header arrow image, with fixed size & lazy load to avoid CLS -->
        <img class="header-arrow img-fluid"
             src="assets/img/header-arrow.png"
             alt="Arrow icon"
             title="Hancock Publishers"
             width="72" height="72"
             loading="lazy"
             decoding="async">
      </div>

      <!-- RIGHT IMAGE COLUMN -->
      <div class="col-lg-6 col-sm-12 _px-5">
        <div class="carousel carousel1 carousel-showmanymoveone slide mobilenone"
             id="carousel123"
             data-bs-touch="false"
             aria-label="Service preview carousel">
          <div class="carousel-inner mobilenone">
            <div class="item active mobilenone">
              <!-- HERO / LCP IMAGE -->
              <img id="dynamic-image"
                   src="assets/img/writing.jpg"
                   class="img-fluid"
                   alt="Service Image"
                   width="600" height="420"
                   loading="eager"
                   fetchpriority="high"
                   decoding="async">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</header>


</div>



<script>
  (function () {
    function initHeroTypewriter() {
      var typeEl = document.querySelector('.typewrite');
      var textEl = document.querySelector('.wrap-banner-text');
      var imgEl  = document.getElementById('dynamic-image');

      if (!typeEl || !textEl || !imgEl) return;

      // Data from data-type attribute
      var rawTypes = typeEl.getAttribute('data-type') || '[]';
      var dataTypes;
      try {
        dataTypes = JSON.parse(rawTypes);
      } catch (e) {
        dataTypes = ['Writing', 'Editing', 'Designing', 'Publishing', 'Marketing'];
      }

      if (!Array.isArray(dataTypes) || !dataTypes.length) {
        dataTypes = ['Writing', 'Editing', 'Designing', 'Publishing', 'Marketing'];
      }

      var currentIndex = 0;

      // Image sources mapped to keywords
      var images = {
        "Writing":   "assets/img/book-publishing/book-publishing.png",
        "Editing":   "assets/img/book-editing/book-editing.png",
        "Designing": "assets/img/book-marketing/book-marketing.png",
        "Publishing":"assets/img/book-ghostwriting/book-ghostwriting.png",
        "Marketing": "assets/img/cover-designing/cover-designing.png"
      };

      function changeImage(type) {
        var src = images[type] || images["Writing"];
        if (imgEl.src.indexOf(src) === -1) {
          imgEl.src = src;
        }
      }

      function updateHero() {
        var currentType = dataTypes[currentIndex];
        textEl.textContent = currentType;
        changeImage(currentType);

        currentIndex = (currentIndex + 1) % dataTypes.length;
      }

      // Set first state immediately
      updateHero();

      // Change every 6 seconds
      setInterval(updateHero, 6000);
    }

    // Run after page fully loaded (so painting block na ho)
    if (document.readyState === 'complete') {
      // Thoda delay taaki first paint ho jaye
      setTimeout(initHeroTypewriter, 0);
    } else {
      window.addEventListener('load', function () {
        setTimeout(initHeroTypewriter, 0);
      });
    }
  })();
</script>





<section class=" vertical-spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <p class="mb-4" data-aos="zoom-in-left" data-aos-duration="1000">Whether you're starting from scratch,
                    refining a draft, illustrating a children's book,
                    self-publishing on Amazon, or developing a marketing strategy – our top-tier book writing and
                    publishing services are here to assist! So, become a bestselling author with our dedicated book
                    writing services!</p>
                <p class="d-flex aos-init aos-animate d-flex1" data-aos="zoom-out-up" data-aos-duration="1000">
                    <a class="cta-btn-small main-btn book-btn" data-bs-toggle="modal" href="#mainpopupform"
                        role="button">Get Started</a>
                    <a class="cta-btn-small main-btn book-btn mx-4 btn-black-bg" href="contact-us">Free Consultation</a>
                </p>

            </div>
            <div class="col-md-7" data-aos="zoom-in-left" data-aos-duration="1000">
                <h2 class="fw-bold inner-h2">
                    A Book Writing Company Dedicated to Your Authorial Success!
                </h2>
            </div>
        </div>
    </div>
</section>
<section class="services-section bg-light text-center vertical-spacing">
    <div class="row mb-2">
        <div class="col-12">
            <h2 data-aos="zoom-in-left" data-aos-duration="1000">Our Ebook Services Include</h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 mt-4">
                <a href="ghostwriting">
                    <div class="card p-4 h-100">
                        <div class="card-body" data-aos="zoom-in-left" data-aos-duration="1000">
                            <figure>
                                <!-- <img class="img-fluid" src="assets/img/icons/gif/writing-icon.gif" alt="Book Writing Services" title="Book Writing Services"> -->
                                <video width="150" autoplay loop muted>
                                    <source src="assets/img/icons/writing-icon.webm" type="video/webm">
                                </video>
                            </figure>
                            <h3 class="card-title my-4">Expert Ghostwriting</h3>
                            Collaborate with a team of subject matter experts, editors, and book strategists
                            specializing in diverse narrative styles. Whether it's fiction, non-fiction, or a niche
                            topic, we match you with a writer who understands your style and brings your story to life
                            seamlessly.
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4">
                <a href="book-editing">
                    <div class="card p-4 h-100">
                        <div class="card-body" data-aos="zoom-in-left" data-aos-duration="1000">
                            <figure>
                                <!-- <img class="img-fluid" src="assets/img/icons/gif/pencil-icon.gif" alt="Pencil Writing Services" title="Pencil Writing Services"> -->
                                <video width="150" autoplay loop muted>
                                    <source src="assets/img/icons/pencil-icon.webm" type="video/webm">
                                </video>
                            </figure>
                            <h3 class="card-title my-4">Editing & Proofreading</h3>
                            Receive expert feedback on book drafts from seasoned editors with a strong opinion on the
                            Oxford comma. Our experienced editors refine your prose, address inconsistencies, and ensure
                            your ebook is polished to perfection.
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4">
                <a href="book-illustration">
                    <div class="card p-4 h-100">
                        <div class="card-body" data-aos="zoom-in-left" data-aos-duration="1000">
                            <figure>
                                <!-- <img class="img-fluid" src="assets/img/icons/gif/designing-icon.gif" alt="Book Designing Services" title="Book Designing Services"> -->
                                <video width="150" autoplay loop muted>
                                    <source src="assets/img/icons/designing-icon.webm" type="video/webm">
                                </video>
                            </figure>
                            <h3 class="card-title my-4">Illustrations and Layout</h3>
                            Enhance the reader experience with carefully crafted illustrations and layouts. We pay
                            attention to the visual elements, ensuring that your ebook is not only a pleasure to read
                            but also visually appealing.
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4">
                <a href="book-publishing">
                    <div class="card p-4 h-100">
                        <div class="card-body" data-aos="zoom-in-left" data-aos-duration="1000">
                            <figure>
                                <!-- <img class="img-fluid" src="assets/img/icons/gif/publishing-icon.gif" alt="Book Publishing Services" title="Book Publishing Services"> -->
                                <video width="150" autoplay loop muted>
                                    <source src="assets/img/icons/publishing-icon.webm" type="video/webm">
                                </video>
                            </figure>
                            <h3 class="card-title my-4">Publishing Strategy</h3>
                            Consult with industry professionals to create effective book writing and publishing
                            solutions. Choose platforms like Amazon or explore various marketplaces.
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4">
                <a href="book-marketing">
                    <div class="card p-4 h-100">
                        <div class="card-body" data-aos="zoom-in-left" data-aos-duration="1000">
                            <figure>
                                <!-- <img class="img-fluid" src="assets/img/icons/gif/marketing-icon.gif" alt="Book Marketing Services" title="Book Marketing Services"> -->
                                <video width="150" autoplay loop muted>
                                    <source src="assets/img/icons/marketing-icon.webm" type="video/webm">
                                </video>
                            </figure>
                            <h3 class="card-title my-4">Marketing Plan</h3>
                            Develop a marketing plan to achieve your specific goals and maximize sales through social
                            media, SEO, and PPC.
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 text-start" data-aos="zoom-in-left" data-aos-duration="1000">
                <div class="card p-4 h-100 border-bottom-primary">
                    <div class="card-body">

                        <h2 class="card-title mb-4 text-primary font-44">Explore More Services </h2>
                        Explore more of Hancock Publishers ’s services, and find exactly what you’re looking for!

                    </div>
                    <div class="card-footer bg-transparent border-0 text-end">
                        <a class="main-btn book-btn" href="services" role="button">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ('partials/home-complete-solution.php'); ?>


<section class="vertical-spacing base-font-color">
    <div class="container">
        <div class="row mb-2">
            <div class="col-12 ">
                <h2 class="pb-4" data-aos="zoom-out-down" data-aos-duration="1000">Become a Published Author</h2>
                <p class="pb-5 col-md-12" data-aos="zoom-out-up" data-aos-duration="1000">Lack of time and
                    energy should not result in your ideas going unread. Our professional book writing services are here
                    to transform your concepts into compelling manuscripts, ensuring your voice is heard and your
                    stories are shared.
                </p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-lg-6" data-aos="zoom-in-left" data-aos-duration="1000">
                <h3 class="pt-2 mb-4">Collaborate with Hancock Publishers for Exceptional Book Writing Services</h3>
                <p>Your book is not merely a project to ghostwrite; it is a literary masterpiece deserving attention
                    from millions of like-minded individuals seeking quality literature.</p>
                <p>At Hancock Publishers, our commitment to excellence is evident in every aspect of our book writing
                    and publishing solutions. We invest our heart and soul into each project, leveraging the right
                    talent and skills. Our pride lies in our dedicated team and streamlined processes.</p>
                <p>Over the last seven years, we have immersed ourselves in the art of storytelling, assisting authors
                    in kick starting their writing careers. We've empowered brands to expand their reach with
                    meticulously crafted books, ensuring each piece remains a captivating read for years to come.</p>
                <p class="pb-3">Partner with Hancock Publishers, and witness not only the shaping of your story to
                    resonate with a broad audience but also receive guidance throughout the entire book publishing
                    process. Your literary journey deserves the expertise and dedication that define Hancock Publishers.
                </p>
                <p class="d-flex align-items-center">
                    <a class="cta-btn-small main-btn book-btn" data-bs-toggle="modal" href="#mainpopupform"
                        role="button">Get Started</a>
                    <a class="cta-btn-small main-btn book-btn mx-4 btn-black-bg" href="contact-us">Free Consultation</a>
                </p>
            </div>
            <div class="col-lg-6 col-sm-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <figure class="text-center">
                    <img src="assets/img/whatwedo.svg" class="img-fluid max-height-500" alt="Book Writing Services"
                        title="Exceptional Book Writing Services">
                </figure>
            </div>

        </div>
    </div>
</section>
<?php include ('partials/portfolio-section.php') ?>


<!-- <section class="bg-light text-center vertical-spacing">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
            <h2 data-aos="zoom-out-down" data-aos-duration="1000">Our Work</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <ul class="nav nav-underline-tabs mb-3 justify-space-between in-mobile-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"> Featured work</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Art</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Book Covers</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">Book Marketing Blogs</a>
                    </li>
                  </ul>
            </div>
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="row gx-5 justify-content-center">
                        <div class="col-lg-6 mt-md-5" data-aos="fade-right" data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                <div class="card portfolio-radius">
                                    <img class="portfolio-radius-top" src="assets/img/portfolio/6.png">
                                    <div class="card-body text-start p-5 card-details">
                                        <h4>2D Animation</h4>
                                        <p class="card-text">Cartoon depiction of a book concept</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-md-5" data-aos="fade-left" data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                <div class="card portfolio-radius">
                                    <img class="portfolio-radius-top" src="assets/img/portfolio/5.png">
                                    <div class="card-body text-start p-5 card-details">
                                        <h4>2D Animation</h4>
                                        <p class="card-text">Cartoon depiction of a book concept</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-md-5" data-aos="fade-right" data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                <div class="card portfolio-radius">
                                    <img class="portfolio-radius-top" src="assets/img/portfolio/3.png">
                                    <div class="card-body text-start p-5 card-details">
                                        <h4>Handdrawn art</h4>
                                        <p class="card-text">Children’s book illustration </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-md-5" data-aos="fade-left" data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                <div class="card portfolio-radius">
                                    <img class="portfolio-radius-top" src="assets/img/portfolio/4.png">
                                    <div class="card-body text-start p-5 card-details">
                                        <h4>Family legacy art</h4>
                                        <p class="card-text">Cartoonized character illustration</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-md-5" data-aos="fade-right" data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                <div class="card portfolio-radius">
                                    <img class="portfolio-radius-top" src="assets/img/portfolio/1.png">
                                    <div class="card-body text-start p-5 card-details">
                                        <h4>Whimsical art</h4>
                                        <p class="card-text">Playful, juvenile art for a pizza-related fictional story
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-md-5" data-aos="fade-left" data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                <div class="card portfolio-radius">
                                    <img class="portfolio-radius-top" src="assets/img/portfolio/2.png">
                                    <div class="card-body text-start p-5 card-details">
                                        <h4>Vector-based art</h4>
                                        <p class="card-text">Graphics for children’s book about diversity </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        <div class="row gx-5">
                        <div class="col-lg-6 mt-md-5" data-aos="fade-right" data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                <div class="card portfolio-radius">
                                    <img class="portfolio-radius-top" src="assets/img/portfolio/6.png">
                                    <div class="card-body text-start p-5 card-details">
                                        <h4>Handdrawn art</h4>
                                        <p class="card-text">Children’s book illustration </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-md-5" data-aos="fade-left" data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                <div class="card portfolio-radius">
                                    <img class="portfolio-radius-top" src="assets/img/portfolio/5.png">
                                    <div class="card-body text-start p-5 card-details">
                                        <h4>Family legacy art</h4>
                                        <p class="card-text">Cartoonized character illustration</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-md-5" data-aos="fade-right" data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                <div class="card portfolio-radius">
                                    <img class="portfolio-radius-top" src="assets/img/portfolio/1.png">
                                    <div class="card-body text-start p-5 card-details">
                                        <h4>Whimsical art</h4>
                                        <p class="card-text">Playful, juvenile art for a pizza-related fictional story
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-md-5" data-aos="fade-left" data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                <div class="card portfolio-radius">
                                    <img class="portfolio-radius-top" src="assets/img/portfolio/2.png">
                                    <div class="card-body text-start p-5 card-details">
                                        <h4>Vector-based art</h4>
                                        <p class="card-text">Graphics for children’s book about diversity </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                        tabindex="0">
                        <div class="row gx-5">
                        <div class="col-lg-6 mt-md-5" data-aos="fade-right" data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                <div class="card portfolio-radius">
                                    <img class="portfolio-radius-top" src="assets/img/portfolio/3.png">
                                    <div class="card-body text-start p-5 card-details">
                                        <h4>Handdrawn art</h4>
                                        <p class="card-text">Children’s book illustration </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-md-5" data-aos="fade-left" data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                <div class="card portfolio-radius">
                                    <img class="portfolio-radius-top" src="assets/img/portfolio/4.png">
                                    <div class="card-body text-start p-5 card-details">
                                        <h4>Family legacy art</h4>
                                        <p class="card-text">Cartoonized character illustration</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab"
                        tabindex="0">
                        <div class="row gx-5">
                        <div class="col-lg-6 mt-md-5" data-aos="fade-right" data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                <div class="card portfolio-radius">
                                    <img class="portfolio-radius-top" src="assets/img/portfolio/4.png">
                                    <div class="card-body text-start p-5 card-details">
                                        <h4>Family legacy art</h4>
                                        <p class="card-text">Cartoonized character illustration</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> -->

<section class="brands-section vertical-spacing _base-font-color">
    <div class="container">
        <div class="row mb-2 text-center">
            <div class="col-12">
                <h2 class="pb-4" data-aos="zoom-out-down" data-aos-duration="1000">Platforms Where Our Books Are
                    Published</h2>
                <p class="pb-5 col-md-8 offset-md-2" data-aos="zoom-out-up" data-aos-duration="1000">Discover the
                    expansive reach of our published works as we strategically coordinate with online publishers.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-6" data-aos="zoom-in-right" data-aos-duration="1000">
                <figure>
                    <img src="assets/img/brands/b6.png" class="img-fluid" alt="Amazon KDP" title="Amazon KDP">
                </figure>
            </div>
            <div class="col-md-3 col-6" data-aos="zoom-in-right" data-aos-duration="1000">
                <figure>
                    <img src="assets/img/brands/b2.png" class="img-fluid" alt="Barnes & Nobel" title="Barnes & Nobel">
                </figure>
            </div>
            <div class="col-md-3 col-6" data-aos="zoom-in-left" data-aos-duration="1000">
                <figure>
                    <img src="assets/img/brands/b3.png" class="img-fluid" alt="Walmart" title="Walmart">
                </figure>
            </div>
            <div class="col-md-3 col-6" data-aos="zoom-in-left" data-aos-duration="1000">
                <figure>
                    <img src="assets/img/brands/b4.svg" class="img-fluid" alt="Apple Books" title="Apple Books">
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-6" data-aos="zoom-in-right" data-aos-duration="1000">
                <figure>
                    <img src="assets/img/brands/google-play-books.svg" class="img-fluid" alt="Google Play"
                        title="Google Play">
                </figure>
            </div>
            <div class="col-md-3 col-6" data-aos="zoom-in-right" data-aos-duration="1000">
                <figure>
                    <img src="assets/img/brands/kobo.svg" class="img-fluid" alt="Rakuten Kobo" title="Rakuten Kobo">
                </figure>
            </div>
            <div class="col-md-3 col-6" data-aos="zoom-in-left" data-aos-duration="1000">
                <figure>
                    <img src="assets/img/brands/spotify.svg" class="img-fluid" alt="Spotify" title="Spotify">
                </figure>
            </div>
            <div class="col-md-3 col-6" data-aos="zoom-in-left" data-aos-duration="1000">
                <figure>
                    <div class="p-card-content">Want to Publish Your Own Book? <span><a href=""
                                class="cta_for_emb_form">Yes!</a></span></div>
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- <section class="testmonials-section bg-light vertical-spacing _base-font-color">
    <div class="container">
        <div class="row mb-2 text-center">
            <div class="col-12">
                <h2 class="pb-4" data-aos="zoom-out-down" data-aos-duration="1000">Success Stories at Hancock Book
                    Writing Company</h2>
            </div>
        </div>
        <div class="row">
            <div class="blockquote-icons-left position-relative"> </div>
            <div class="col-md-10 offset-md-1 regular-1 slider-1">
                <div>
                    <p>I was skeptical, but once I got in touch with their team, I was sure that my book was in safe
                        hands.</p>
                    <h3 class="authot-name">- Alice Flowerdew</h3>
                </div>
                <div>
                    <p>Working with Hancock Publishers was one of the best decisions I have ever made. They delivered
                        exactly what they had promised me.</p>
                    <h3 class="authot-name">- Anton Hansen </h3>

                </div>
            </div>
            <div class="blockquote-icons-right position-relative"> </div>

        </div>
    </div>
</section> -->

<?php include ('partials/book-editing-testmonials.php') ?>

<!-- <section class="partners">
    <h2 class="fw-bold _inner-h2 mb-4"> Our Partners</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img class="w-100" src="https://res.cloudinary.com/dtdi9ddzk/image/upload/v1752779953/PR_As_Seen_Logo_1_ywwvwi.png"
                    alt="badges">
            </div>
            <div class="col-md-3">
                <img class="w-100" src="https://res.cloudinary.com/dtdi9ddzk/image/upload/v1752779953/PR_As_Seen_Logo_2_bpkewv.png"
                    alt="badges">
            </div>
            <div class="col-md-3">
                <img class="w-100" src="https://res.cloudinary.com/dtdi9ddzk/image/upload/v1752779952/PR_As_Seen_Logo_3_avobhu.png"
                    alt="badges">
            </div>
            <div class="col-md-3">
                <img class="w-100" src="https://res.cloudinary.com/dtdi9ddzk/image/upload/v1752779953/PR_As_Seen_Logo_4_xdzi8q.png"
                    alt="badges">
            </div>
        </div>



       

    </div>
</section> -->

<section class="testmonials-section _bg-light vertical-spacing _base-font-color">
	<div class="container">
		<div class="row mb-2 text-center">
			<div class="col-12">
				<h2 class="pb-5" >Our Partners
				</h2>
			</div>
		</div>
		<div class="row">
			<!-- <div class="blockquote-icons-left position-relative"> </div> -->
			<div class="col-md-12 regular-1 slider-1">
				<div>
					 <img class="w-100" src="https://res.cloudinary.com/dtdi9ddzk/image/upload/v1752779953/PR_As_Seen_Logo_1_ywwvwi.png"
                    alt="badges">
				</div>
				<div>
					 <img class="w-100" src="https://res.cloudinary.com/dtdi9ddzk/image/upload/v1752779953/PR_As_Seen_Logo_2_bpkewv.png"
                    alt="badges">
				</div>
				<div>
				 <img class="w-100" src="https://res.cloudinary.com/dtdi9ddzk/image/upload/v1752779952/PR_As_Seen_Logo_3_avobhu.png"
                    alt="badges">

				</div>
				<div>
					<img class="w-100" src="https://res.cloudinary.com/dtdi9ddzk/image/upload/v1752779953/PR_As_Seen_Logo_4_xdzi8q.png"
                    alt="badges">

				</div>
				
			</div>
			<!-- <div class="blockquote-icons-right position-relative"> </div> -->

		</div>
	</div>
</section>

<section class="vertical-spacing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-sm-12">
                <h2 class="fw-bold _inner-h2 mb-4"> Dreaming of <span class="brand-font">Publishing</span> Your Own
                    Book?</h2>
                <p class="mb-4">
                    Partner with a Comprehensive Solution to Book Writing And Designing Services That Enhances Readers’
                    Interest & Your Popularity
                </p>
                <p class="d-flex align-items-center">
                    <a class="cta-btn-small main-btn book-btn" data-bs-toggle="modal" href="#mainpopupform"
                        role="button">Get Started</a>
                    <a class="cta-btn-small main-btn book-btn mx-4 btn-black-bg" href="contact-us">Free Consultation</a>
                </p>
            </div>
            <div class="col-lg-7 col-sm-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card-1">
                            <img class="img-fluid p-3" src="assets/img/portfolio-home/solution-4.svg"
                                alt="Publishing Your Own Book?" title="Publishing Your Own Book?">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ('partials/form.php') ?>
<?php include ('partials/popupform.php') ?>
<?php include ('partials/footer.php') ?>

<!-- Bootstrap js Bundle with Popper -->


<!-- start slide header script -->

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<!-- <script src='assets/js/jquery.min.js'></script> -->
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>

<!-- start drage and drop functionality -->
<script>
    (function () {
        var $carousel = $('#carousel123');

        // Apply the dragging-icon class on hover
        $carousel.hover(
            function () {
                $(this).addClass('dragging-icon');
            },
            function () {
                $(this).removeClass('dragging-icon');
            }
        );

        // Dragging functionality
        var isDragging = false,
            startX = 0,
            endX = 0;

        $carousel.on('touchstart mousedown', function (e) {
            isDragging = true;
            startX = e.type === 'touchstart' ? e.originalEvent.touches[0].clientX : e.clientX;
            $carousel.addClass('dragging'); // Add a class to indicate dragging
        });

        $carousel.on('touchmove mousemove', function (e) {
            if (isDragging) {
                var x = e.type === 'touchmove' ? e.originalEvent.touches[0].clientX : e.clientX;
                endX = x;
            }
        });

        $carousel.on('touchend mouseup', function () {
            if (isDragging) {
                isDragging = false;
                var result = startX - endX;
                if (Math.abs(result) > 40) {
                    $carousel.carousel(result > 0 ? 'next' : 'prev');
                }
                $carousel.removeClass('dragging');
            }
        });

        $carousel.on('touchmove', function (e) {
            e.preventDefault();
        });

        // Clone items functionality
        $('.carousel-showmanymoveone .item').each(function () {
            var itemToClone = $(this);

            for (var i = 1; i < 1; i++) {
                itemToClone = itemToClone.next();

                if (!itemToClone.length) {
                    itemToClone = $(this).siblings(':first');
                }

                itemToClone.children(':first-child').clone()
                    .addClass("cloneditem-" + (i))
                    .appendTo($(this));
            }
        });
    }());

</script>

<!-- <script>
    window.addEventListener('scroll', function() {
  const logos = document.querySelectorAll('.logo-container img');
  logos.forEach(logo => {
    const rect = logo.getBoundingClientRect();
    if (rect.top < window.innerHeight - 100) {
      logo.style.transform = 'scale(1)';
      logo.style.opacity = '1';
    }
  });
});

</script> -->

<!-- end drage and drop functionality -->

<!-- end slide header script -->
</body>

</html>