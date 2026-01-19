<?php include 'includes/function.php' ?>

<!doctype html>
<html lang="en">

<head>
    <title>
        <?php echo $title_name; ?>
    </title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- OG TAG -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $title_name; ?>" />
    <meta property="og:description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="<?php echo $keywordwords; ?>" />
    <meta property="og:url" content="<?php echo $url; ?>" />
    <meta property="og:image" content="https://hancockpublishers.com/assets/img/logo.svg" />
    <meta property="og:image:width" content="880" />
    <meta property="og:image:height" content="660" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="hancockpublishers" />

    <!-- TWITTER CARD TAG -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="hancockpublishers">
    <meta name="twitter:creator" content="@hanpublishers">
    <meta name="twitter:title" content="<?php echo $title_name; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="https://hancockpublishers.com/assets/img/logo.svg">
    <meta name="google-site-verification" content="YXZQn-gbCrUnMJuKthkVI6HYbjZ_Y2lW7pKzVMI1WzE" />
    <!-- start Bing -->
    <meta name="msvalidate.01" content="E64F21744FD03769D85D1F703D472644" />

    <!-- META LANGUAGE TAG -->

    <meta http-equiv='content-language' content='en-us'>
    <meta http-equiv='content-language' content='en-ca'>
    <meta http-equiv='content-language' content='en-gb'>

    <!-- ROBOT TAG -->

    <meta name="robots" content="<?php echo $indexfollow; ?>" />
    <meta name="googlebot" content="<?php echo $indexfollow; ?>, max-snippet: -1" />
    <meta name="bingbot" content="<?php echo $indexfollow; ?>, max-snippet: -1 " />

    <!-- X Default Language Tag -->

    <link rel="alternate" hreflang="x-default" href="<?php echo $url; ?>" />

    <!-- CANONICAL TAG -->
    <link rel="canonical" href="<?php echo $url; ?>" />

    <!-- LANGUAGE TAG -->

    <link rel="alternate" href="<?php echo $url; ?>" hreflang="en-us" />
    <link rel="alternate" href="<?php echo $url; ?>" hreflang="en-ca" />
    <link rel="alternate" href="<?php echo $url; ?>" hreflang="en-gb" />

    <link rel="icon" type="image/x-icon" href="assets/imgs/favicon.png">
    <link rel="stylesheet" href="assets/bootstrap-5.3.0/css/bootstrap.min.css" async>
    <!-- <link rel="stylesheet" href="assets/css/fontawesome.css" async> -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/aos.css">

    <!-- Start of HubSpot Embed Code 27-May-2024 -->
    <?php echo $chat; ?>
    <!-- End of HubSpot Embed Code 27-May-2024-->

    <!-- <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=053e2c67-be01-471b-bd16-852776fdb086"
        defer> </script> -->

    <!-- Start of hancockghostwriters6889 Zendesk Widget script 27-May-2024-->
    <?php echo $chatscript; ?>
    <!-- End of hancockghostwriters6889 Zendesk Widget script 27-May-2024-->
     
  <!-- Start Others scripts google tag managers and meta pixels -->
  <?php include 'partials/otherscripts.php' ?>
  <!-- End others scripts google tag managers and meta pixels -->
  <!-- Start Schema -->
  <?php include 'partials/schema.php' ?>
  <!-- End Schema -->


<!-- start dummy -->
 
<link rel="stylesheet" href="assets/css/dummy-slider.css">

</head>

<body class="homepage-index gd-form">
 <!-- Start Loading screen -->
 <div id="loading-screen">
        <img src="https://hancockpublishers.com/assets/imgs/favicon.png" alt="Loading Logo">
    </div>
    <!-- End Loading screen -->


  <!-- Google Tag Manager (noscript) -->
  <?php echo $bodyGoogleTag; ?>
  <!-- End Google Tag Manager (noscript) -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="pt-4">
                    <div class="navbar">
                        <i class="fas fa-solid fa-bars bx bx-menu"></i>
                        <div class="logo">
                            <a class="" href="./">
                                <img src="assets/img/logo.svg" width="50%" alt="Hancock Publishers"
                                    title="Hancock Publishers logo">
                            </a>
                        </div>
                        <div class="nav-links">
                            <div class="sidebar-logo">
                                <span class="logo-name">
                                    <a class="navbar-brand" href="./">
                                        <img src="assets/img/logo.svg" width="70%" alt="Hancock Publishers"
                                            title="Hancock Publishers logo">
                                    </a>
                                </span>
                                <i class='fas fa-times bx bx-x'></i>
                            </div>
                            <ul class="links">
                                <li><a href="./">Home</a></li>
                               
                                <li>
                                    <a href="services">Services</a>
                                    <i class='fas fa-chevron-down bx bxs-chevron-down htmlcss-arrow arrow'></i>
                                    <ul class="htmlCss-sub-menu sub-menu">
                                        <li><a href="audiobook-service">Audio Book</a></li>
                                        <li><a href="author-website-design">Author Website</a></li>
                                        <li><a href="book-editing">Book Editing</a></li>
                                        <li><a href="book-publishing">Book Publishing</a></li>
                                        <li class="js-sub-menu-2 custom">
                                            <a href="ghostwriting">Book Ghostwriting
                                            </a>
                                            <i class="fas fa-chevron-left bx bxs-chevron-down htmlcss-arrow arrow"></i>
                                            <ul class="js-sub-menu-2 sub-menu">
                                                <li><a href="fiction">Fiction</a></li>
                                                <li><a href="non-fiction">Non-Fiction</a></li>
                                                <li><a href="memoir">Memoir</a></li>
                                                <li><a href="childrens-book-writing">Childrens Books</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="book-marketing">Book Marketing</a></li>
                                        <li><a href="book-illustration">Book illustration</a></li>
                                        <li><a href="book-cover-design">Book Cover Design</a></li>
                                        <li><a href="book-formatting">Book Formatting</a></li>
                                        <li><a href="book-video-trailer">Book Video Trailer</a></li>
                                        <!-- <li class="js-sub-menu-2">
                              <a href="javascript:void(0);">Writing</a>
                              <i class="fas fa-chevron-left bx bxs-chevron-down htmlcss-arrow arrow"></i>
                                <ul class="js-sub-menu-2 _htmlCss-sub-menu sub-menu">
                                <li><a href="book-ghostwriting/fiction">Fiction</a></li>
                                <li><a href="book-ghostwriting/non-fiction">Non-Fiction</a></li>
                                <li><a href="book-ghostwriting/memoir">Memoir</a></li>
                                <li><a href="book-ghostwriting/childrens-books">Childrens Books</a></li>
                              </ul>
                            </li> -->
                                    </ul>
                                </li>
                                <li><a href="about-us">About Us</a></li>
                                <li><a href="portfolio">Portfolio</a></li>
                                <li><a href="testimonial">Testimonial</a></li>
                                <!-- <li><a href="https://hancockpublishers.com/blogs/">Blog</a></li> -->
                                <li><a href="https://hancockpublishers.com/blogs/">Blogs</a></li>
                            </ul>

                            <a class="main-btn btn-hover btn-contact custom" href="contact-us">Contact Us</a>
                            <!-- <div id="myOverlay" class="overlay">
                                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                <div class="overlay-content">
                                    <form id="search-form" class="header-form">
                                        <input class="search s-input" autocomplete="off" type="text" name="search"
                                            placeholder="Search Here For Services..." id="search-box" required="">
                                        <ul class="dropdown" id="dropdown"></ul>
                                        <button class="btn main-btn btn-search" type="submit"><i
                                                class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div> -->

                        </div>
                        <!-- <img src="assets/img/search-normal.svg" alt="" class="openBtn img-fluid" onclick="openSearch()"> -->
                        <a class="main-btn btn-hover btn-contact" href="contact-us">Contact Us</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>