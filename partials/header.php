<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); 
header("Pragma: no-cache"); 
header("Expires: 0");
?>


<?php include 'includes/function.php'; ?>


<!doctype html>
<html lang="en">

<head>
  <title><?php echo $title_name; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- OG / SEO -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $title_name; ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywordwords; ?>">
  <meta property="og:url" content="<?php echo $url; ?>">
  <meta property="og:image" content="https://hancockpublishers.com/assets/img/logo.svg">
  <meta property="og:image:width" content="880">
  <meta property="og:image:height" content="660">
  <meta property="og:locale" content="en_US">
  <meta property="og:site_name" content="hancockpublishers">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="hancockpublishers">
  <meta name="twitter:creator" content="@hanpublishers">
  <meta name="twitter:title" content="<?php echo $title_name; ?>">
  <meta name="twitter:description" content="<?php echo $description; ?>">
  <meta name="twitter:image" content="https://hancockpublishers.com/assets/img/logo.svg">

  <meta name="google-site-verification" content="YXZQn-gbCrUnMJuKthkVI6HYbjZ_Y2lW7pKzVMI1WzE">
  <meta name="msvalidate.01" content="E64F21744FD03769D85D1F703D472644">

  <!-- content-language multiple baar dene ki zarurat nahi, ek hi kaafi hai -->
  <meta http-equiv="content-language" content="en-us">

  <meta name="robots" content="<?php echo $indexfollow; ?>">
  <meta name="googlebot" content="<?php echo $indexfollow; ?>, max-snippet: -1">
  <meta name="bingbot" content="<?php echo $indexfollow; ?>, max-snippet: -1">

  <link rel="alternate" hreflang="x-default" href="<?php echo $url; ?>">
  <link rel="canonical" href="<?php echo $url; ?>">
  <link rel="alternate" href="<?php echo $url; ?>" hreflang="en-us">
  <link rel="alternate" href="<?php echo $url; ?>" hreflang="en-ca">
  <link rel="alternate" href="<?php echo $url; ?>" hreflang="en-gb">

  <link rel="icon" type="image/x-icon" href="assets/imgs/favicon.png">

  <!-- ===== Critical inline CSS (minimal) ===== -->


  <!-- Preload hero/above-the-fold image (change path if needed) -->
  <link rel="preload" as="image" href="assets/img/logo.svg">

  <!-- Preload + load CSS in non-blocking way -->
  <link rel="preload" href="assets/bootstrap-5.3.0/css/bootstrap.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="assets/bootstrap-5.3.0/css/bootstrap.min.css">
  </noscript>

  <link rel="preload" href="assets/css/main.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="assets/css/main.css">
  </noscript>

  <!-- Other non-critical CSS (can also be deferred via JS if chaho) -->
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/slick-theme.css">
  <link rel="stylesheet" href="assets/css/aos.css">
  <link rel="stylesheet" href="assets/css/dummy-slider.css">
  <link rel="stylesheet" href="assets/css/popupformnew.css">

  <!-- Preconnect helpful origins -->
  <link rel="preconnect" href="https://connect.facebook.net" crossorigin>
  <link rel="preconnect" href="https://static.zdassets.com" crossorigin>
  <link rel="preconnect" href="https://www.google-analytics.com" crossorigin>


  <!-- Start of hancockghostwritershelp Zendesk Widget script -->
<script id="ze-snippet"
  src="https://static.zdassets.com/ekr/snippet.js?key=053e2c67-be01-471b-bd16-852776fdb086"> </script> 


 <!-- End of hancockghostwritershelp Zendesk Widget script  -->

  <!-- Schema etc. -->
  <?php include 'partials/schema.php'; ?>

  <!-- Tumhare original JS includes -->
  <?php include 'partials/scripts.php'; ?>

 


  <!-- <div class="top-header-image">
  <img class="nonemob" src="assets/img/about/header.jpg" alt="Christmas Banner">
   <img class="show1" src="assets/imgs/mobile.jpg" alt="Christmas Banner">

</div> -->


<body class="homepage-index gd-form">
  
  <!-- Loading screen -->
  <div id="loading-screen" aria-hidden="true">
    <img src="assets/imgs/favicon.png"
         alt="Hancock Publishers Favicon"
         title="Hancock Publishers Favicon"
        
         loading="eager" decoding="async">
  </div>

  <!-- Main navigation -->

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="pt-4" aria-label="Main navigation">
          <div class="navbar">
            <i class="fas fa-solid fa-bars bx bx-menu" aria-hidden="true"></i>

            <div class="logo">
              <a href="./" aria-label="Hancock Publishers home">
                <img src="assets/img/logo.svg"
                     width="160" height="48"
                     alt="Hancock Publishers"
                     title="Hancock Publishers logo"
                     loading="eager" decoding="async">
              </a>
            </div>

            <div class="nav-links">
              <div class="sidebar-logo">
                <span class="logo-name">
                  <a class="navbar-brand" href="./">
                    <img src="assets/img/logo.svg"
                         width="140" height="44"
                         alt="Hancock Publishers"
                         title="Hancock Publishers logo"
                         loading="lazy" decoding="async">
                  </a>
                </span>
                <i class="fas fa-times bx bx-x" aria-hidden="true"></i>
              </div>

              <ul class="links" role="menubar">
                <li><a href="./">Home</a></li>
                <li>
                  <a href="services">Services</a>
                  <i class="fas fa-chevron-down bx bxs-chevron-down htmlcss-arrow arrow"
                     aria-hidden="true"></i>
                  <ul class="htmlCss-sub-menu sub-menu" role="menu">
                    <li><a href="audiobook-service">Audio Book</a></li>
                    <li><a href="author-website-design">Author Website</a></li>
                    <li><a href="book-editing-services">Book Editing</a></li>
                    <li><a href="book-publishing-services">Book Publishing</a></li>
                    <li class="js-sub-menu-2 custom">
                      <a href="ghostwriting-services">Book Ghostwriting</a>
                      <i class="fas fa-chevron-left bx bxs-chevron-down htmlcss-arrow arrow"
                         aria-hidden="true"></i>
                      <ul class="js-sub-menu-2 sub-menu">
                        <li><a href="fiction-book-writing">Fiction</a></li>
                        <li><a href="non-fiction-book-writing">Non-Fiction</a></li>
                        <li><a href="memoir-writing-services">Memoir</a></li>
                        <li><a href="childrens-book-writing">Childrens Books</a></li>
                      </ul>
                    </li>
                    <li><a href="book-marketing-services">Book Marketing</a></li>
                    <li><a href="book-illustration-services">Book illustration</a></li>
                    <li><a href="book-cover-design">Book Cover Design</a></li>
                    <li><a href="book-formatting-services">Book Formatting</a></li>
                    <li><a href="book-video-trailer">Book Video Trailer</a></li>
                  </ul>
                </li>
                <li><a href="about-us">About Us</a></li>
                <li><a href="portfolio">Portfolio</a></li>
                <li><a href="testimonial">Testimonial</a></li>
                <li><a href="https://hancockpublishers.com/blogs/">Blogs</a></li>
              </ul>

              <a class="main-btn btn-hover btn-contact custom" href="contact-us">Free Consultation</a>
            </div>

            <a class="main-btn btn-hover btn-contact" href="contact-us">Free Consultation</a>
            <a class="navnum" href="tel:<?php echo $brandPhone; ?>">
              <?php echo $brandPhone; ?>
            </a>
          </div>
        </nav>
      </div>
    </div>
  </div>

  <!-- Sticky social icons -->
  <div id="sticky-social-icons-container"
       class="design-rounded alignment-left with-animation hide-in-mobile"
       aria-hidden="false">
    <ul>
      <li class="fab-fa-facebook" len="0">
        <a href="https://www.facebook.com/hancockpublisher" target="_blank" rel="noopener"
           class="fab-fa-facebook"><i class="fab fa-facebook" aria-hidden="true"></i></a>
      </li>
      <li class="fab-fa-instagram" len="0">
        <a href="https://www.instagram.com/hancockpublishers/" target="_blank" rel="noopener"
           class="fab-fa-instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
      </li>
      <li class="fab-fa-twitter" len="0">
        <a href="https://twitter.com/hanpublishers" target="_blank" rel="noopener"
           class="fab-fa-twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
      </li>
      <li class="fab-fa-linkedin-in" len="0">
        <a href="https://www.linkedin.com/company/hancockpublishers/" target="_blank" rel="noopener"
           class="fab-fa-linkedin-in"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
      </li>
      <li class="fab-fa-youtube" len="0">
        <a href="https://www.youtube.com/@HancockPublishers" target="_blank" rel="noopener"
           class="fab-fa-youtube"><i class="fab fa-youtube" aria-hidden="true"></i></a>
      </li>
      <li class="fab-fa-pinterest-p" len="0">
        <a href="https://www.pinterest.com/hancockpublishers/" target="_blank" rel="noopener"
           class="fab-fa-pinterest-p"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
      </li>
    </ul>
  </div>

 


  <!-- ===== Global lazy-load for non-critical images/iframes ===== -->


  <!-- Optional: third-party scripts ko thoda delay se inject karna ho toh yahan se karo
       (agar partials/scripts.php me nahi hai to) -->





   <div class="bottom-reviews" id="bottomReviews">
    <span class="close-btn" id="closeBtn">&times;</span>

    <div class="review-card active">
      <p class="review-text">Working with Hancock Publishers was a transformative experience. Their team's expertise in
        publishing is evident in every step.</p>
      <h5 class="review-author">— Daniel Rhodes</h5>
    </div>
    <div class="review-card">
      <p class="review-text">Hancock Publishers consistently delivers outstanding results. Their editorial team is
        thorough and insightful.</p>
      <h5 class="review-author">— Olivia Martinez</h5>
    </div>
    <div class="review-card">
      <p class="review-text">The professionalism and dedication of Hancock Publishers are unmatched. The final
        publication exceeded expectations.</p>
      <h5 class="review-author">— Richard Collins</h5>
    </div>
    <div class="review-card">
      <p class="review-text">They understood our vision and turned it into reality. The finished product stands out
        beautifully.</p>
      <h5 class="review-author">— Jessica Freeman</h5>
    </div>
    <div class="review-card">
      <p class="review-text">Hancock Publishers’ commitment to quality and client satisfaction is commendable.
        Responsive and professional team.</p>
      <h5 class="review-author">— Samuel Ellis</h5>
    </div>
  </div>

<script>
(function () {
  let loaded = false;

  function loadHomeJS() {
    if (loaded) return;
    loaded = true;

    document.querySelectorAll('script[data-home-delay]').forEach(el => {
      const s = document.createElement('script');
      s.src = el.getAttribute('data-home-delay');
      s.async = true;
      document.body.appendChild(s);
    });
  }

  window.addEventListener('scroll', loadHomeJS, { once:true });
  window.addEventListener('mousemove', loadHomeJS, { once:true });
  setTimeout(loadHomeJS, 3000); // safety
})();
</script>
  
</body>
</html>
