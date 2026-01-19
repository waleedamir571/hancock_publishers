<?php
error_reporting(E_ALL);

// start country block code
// Get user IP address
// $ip = $_SERVER['REMOTE_ADDR'];
// // Using the API to get information about this IP
// $details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip"));
// // City
// $city = $details->geoplugin_city;
// // Using geoplugin to get the continent for this IP
// $continent = $details->geoplugin_continentCode;
// // And for the country
// $country = $details->geoplugin_countryCode;
// // Blocked countries
// $blocked_countries = array("PK", "IN", "CN", "NGA");
// // Check if the country is in the blocked list
// if (in_array($country, $blocked_countries)) {
//     header("Location: https://hancockpublishers.com/country-block.php");
//     exit;D
// }
// end country block code

// $functions = basename($_SERVER['PHP_SELF']); 

$baseUrl = "https://hancockpublishers.com/";
$functions = basename($_SERVER['PHP_SELF']); // Get just the filename

switch ($functions) {
    case "index.php";
        $title_name = "Hancock Publishers | Professional Book Writing Services";
        $description = "At Hancock Publishers, our professional book writing services in USA, transform your vision into a polished manuscript that naturally resonates with readers.";
        $form_heading1 = "Contact Us";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl;
        $indexfollow = "index, follow";
        $keywordwords = "Professional Book Writing Services, Book Writing Services, Book Writing Services in USA, Book Writing Company";
        break;
    case "about-us.php";
        $title_name = "About US | Hancock Publishers";
        $description = "Discover Hancock Publishers' story. Our rich heritage and forward-thinking innovation fuel custom publishing solutions that empower every author.";
        $form_heading1 = "Contact Us";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "about-us";
        $indexfollow = "index, follow";
        $keywordwords = "About Us Hancock Publishers";
        break;
    case "thank-you.php";
        $title_name = "Expressing Gratitude | Thank You Page by Hancock Publishers";
        $description = "Discover heartfelt appreciation on Hancock Publishers' thank you page. Explore our gratitude for your support and engagement with our brand. Thank you for being a part of our journey";
        $form_heading1 = "Contact Us";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "thank-you";
        $indexfollow = "index, follow";
        $keywordwords = "Thank You";
        break;
    case "services.php";
        $title_name = "Premier Service Solutions | Hancock Publishers";
        $description = "Hancock Publishers Services offers Writing, Editing, and Publishing that empower your brand and drive measurable, lasting success.";
        $form_heading1 = "Contact Us";
        $form_heading2 = "Pitch Your Book Idea";
        $indexfollow = "index, follow";
        $url = $baseUrl . "services";
        $keywordwords = "Hancock Publisher Services";
        break;
    case "book-editing-services.php";
        $title_name = "Book Editing Services | Hancock Publishers";
        $description = "Hancock Publishers provides Professional Book Editing Services in USA, to refine manuscripts with precision, clarity, and a polished narrative for success.";
        $form_heading1 = "";
        $form_heading2 = "Work With Professional Editors";
        $url = $baseUrl . "book-editing-services";
        $indexfollow = "index, follow";
        $keywordwords = " Book Editing Services in USA, Book Editing Services, Book Editing Company";
        break;
    case "audiobook-service.php";
        $title_name = "Professional Audiobook Services | Hancock Publishers";
        $description = " Boost your success with our professional audiobook services in the USA. Hancock Publishers delivers tailored strategies to maximize reach today.";
        $form_heading1 = "";
        $form_heading2 = "Work With Professional Editors";
        $url = $baseUrl . "audiobook-service";
        $indexfollow = "index, follow";
        $keywordwords = "Professional Audiobook Services in USA, Audiobook Services, Audiobook Company";
        break;
    case "author-website-design.php";
        $title_name = "Author Website Design Services | Hancock Publishers";
        $description = "Hancock Publishers provides expert author website design services in the USA, boosting your brand and engaging readers with a standout site.";
        $form_heading1 = "";
        $form_heading2 = "Work With Professional Editors";
        $url = $baseUrl . "author-website-design";
        $indexfollow = "index, follow";
        $keywordwords = "Professional Author Website Design Services in USA, Author Website Design Services, Author Website Design Company";
        break;
    case "book-cover-design.php";
        $title_name = "Book Cover Design Services | Hancock Publishers";
        $description = "Hancock Publishers offers professional book cover design services in the USA, creating eye-catching covers that captivate readers and boost sales.";
        $form_heading1 = "";
        $form_heading2 = "Work With Professional Editors";
        $url = $baseUrl . "book-cover-design";
        $indexfollow = "index, follow";
        $keywordwords = "professional book cover design services in the USA, book cover design services, book cover design Company";
        break;
    case "book-formatting-services.php";
        $title_name = "Professional Book Formatting Service | Hancock Publishers";
        $description = "Hancock Publishers provides professional book formatting services in USA, ensuring a polished, reader-friendly layout for print and digital books.";
        $form_heading1 = "";
        $form_heading2 = "Work With Professional Editors";
        $url = $baseUrl . "book-formatting-services";
        $indexfollow = "index, follow";
        $keywordwords = "Professional Book Formatting Services in USA, Book Formatting Services, Book Formatting Company";
        break;
    case "book-video-trailer.php";
        $title_name = "Expert Book Trailer Video Services | Hancock Publishers";
        $description = "Hancock Publishers offers expert book trailer video services in the USA, creating engaging videos that captivate audiences and boost book visibility";
        $form_heading1 = "";
        $form_heading2 = "Work With Professional Editors";
        $url = $baseUrl . "book-video-trailer";
        $indexfollow = "index, follow";
        $keywordwords = "Expert Book Trailer Video Services, Book Trailer Video Services, Book Trailer Video Company";
        break;
    case "ghostwriting-services.php";
        $title_name = "Professional Ghostwriting Services | Hancock Publishers";
        $description = "Hancock Publishers offers the Best Professional Ghostwriting Services in USA, expertly turning your ideas into compelling stories with precision.";
        $form_heading1 = "";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "ghostwriting-services";
        $indexfollow = "index, follow";
        $keywordwords = "Professional Ghostwriting Services in USA, Ghostwriting Services, Ghostwriting Company";
        break;
    case "book-publishing-services.php";
        $title_name = "Book Publishing Services | Hancock Publishers";
        $description = "Hancock Publishers delivers the Best Professional Book Publishing Services in USA, expertly turning manuscripts into market-ready masterpieces.";
        $form_heading1 = "";
        $form_heading2 = "Pitch Your Book Published";
        $url = $baseUrl . "book-publishing-services";
        $indexfollow = "index, follow";
        $keywordwords = "Professional Book Publishing Services in USA, Book Publishing Services, Book Publishing Company";
        break;
    case "book-illustration-services.php";
        $title_name = "Professional Book Illustration Services | Hancock Publishers ";
        $description = "Transform your book with expert illustration services in the USA. At Hancock Publishers, we craft captivating visuals that bring your story to life.";
        $form_heading1 = "";
        $form_heading2 = "Get Your Book <br> Illustrated";
        $url = $baseUrl . "book-illustration-services";
        $indexfollow = "index, follow";
        $keywordwords = "Professional Book Illustration Services in USA, Book Illustration Services, Book Illustration Company";
        break;
    case "book-marketing-services.php";
        $title_name = "Professional Book Marketing Services | Hancock Publishers";
        $description = "Boost your book's success with professional marketing services in the USA. Hancock Publishers crafts tailored strategies to drive book sales.";
        $form_heading1 = "";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "book-marketing-services";
        $indexfollow = "index, follow";
        $keywordwords = "Professional Book Marketing Services in USA, Book Marketing Services, Book Marketing Company";
        break;
    case "fiction-book-writing.php";
        $title_name = "Fiction Book Writing Services | Hancock Publishers ";
        $description = "Get Professional Fiction Book Writing Services in USA from Hancock Publishers. Our experts craft custom, compelling fiction to elevate your story";
        $form_heading1 = "";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "fiction-book-writing";
        $indexfollow = "index, follow";
        $keywordwords = "Professional Fiction Book Writing Services in USA, Fiction Book Writing Services, Fiction Book Writing Company";
        break;
    case "non-fiction-book-writing.php";
        $title_name = "Nonfiction Writing Services | Hancock Publishers";
        $description = "Get professional non-fiction book writing services in USA from Hancock Publishers. Our team crafts compelling, authoritative narratives that engage.";
        $form_heading1 = "";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "non-fiction-book-writing";
        $indexfollow = "index, follow";
        $keywordwords = "Professional Nonfiction Book Writing Services in USA, Nonfiction Book Writing Services, Nonfiction Book Writing Company";
        break;
    case "memoir-writing-services.php";
        $title_name = "Professional Memoir Writing Services | Hancock Publishers ";
        $description = "Professional memoir writing services in USA. Our professional team crafts personalized, authentic stories that truly celebrate your life journey";
        $form_heading1 = "";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "memoir-writing-services";
        $indexfollow = "index, follow";
        $keywordwords = "Professional memoir writing services in USA, memoir writing services, memoir writing Company";
        break;
    case "childrens-book-writing.php";
        $title_name = "Children’s Book Writing Services | Hancock Publishers";
        $description = ": Hancock Publishers offers professional children’s book writing services in USA, crafting engaging stories that spark young imaginations.";
        $form_heading1 = "";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "childrens-book-writing";
        $indexfollow = "index, follow";
        $keywordwords = "Professional Children’s Book Writing Services in USA, Children’s Book Writing Services, Children’s Book Writing Company";
        break;
    case "testimonial.php";
        $title_name = "Customer Testimonials | Hancock Publishers";
        $description = "Read real testimonials from clients about their experience with Hancock Publishers and our commitment to quality service.";
        $form_heading1 = "Contact Us";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "testimonial";
        $indexfollow = "index, follow";
        $keywordwords = "";
        break;
    case "portfolio.php";
        $title_name = "Our Portfolio | Hancock Publishers";
        $description = "Explore the diverse range of projects by Hancock Publishers, showcasing our expertise in delivering high-quality books and publishing solutions.";
        $form_heading1 = "Contact Us";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "portfolio";
        $indexfollow = "index, follow";
        $keywordwords = "";
        break;
    case "privacy-policy.php";
        $title_name = "Privacy Policy | Hancock Publishers";
        $description = "Learn more about how Hancock Publishers handles visitors’ data and information.";
        $form_heading1 = "";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "privacy-policy";
        $indexfollow = "index, follow";
        $keywordwords = "Privacy Policy";
        break;
    case "terms-and-conditions.php";
        $title_name = "Terms and Conditions | Hancock Publishers";
        $description = "Learn more about the terms and conditions of working with Hancock Publishers";
        $form_heading1 = "";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "terms-and-conditions";
        $indexfollow = "index, follow";
        $keywordwords = "Terms and Conditions";
        break;
    case "contact-us.php";
        $title_name = "Contact a Professional Ghostwriter | Hancock Publishers ";
        $description = "Looking for an affordable ghostwriting company? Contact us and hire a ghostwriter for your next fiction or non-fiction book, memoir, or children's book.";
        $form_heading1 = "Contact Us";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "contact-us";
        $indexfollow = "index, follow";
        $keywordwords = "Professional Ghostwriter";
        break;
    case "faq.php";
        $title_name = "Hancock Publishers FAQs | Your Questions, Our Answers";
        $description = "Discover answers to your questions about Hancock Publishers in our FAQs section. From submission guidelines to publication queries, find the 
        information you need here.";
        $form_heading1 = "Contact Us";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "faq";
        $indexfollow = "noindex, nofollow";
        $keywordwords = "";
        break;
    case "404.php";
        $title_name = "404 Not Found | Hancock Publishers";
        $description = "The page you are looking for can’t be found.";
        $form_heading1 = "Contact Us";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "404";
        $indexfollow = "noindex, nofollow";
        $keywordwords = "";
        break;
}

$favIcon = 'https://hancockpublishers.com/assets/imgs/favicon.png';

$brandPhone = '(949) 239-6045';
$brandEmail = 'info@hancockpublishers.com';
$brandAddress = '895 Dove Street, Newport Beach, CA 92660 United States';

$privacyPolicy = 'https://hancockpublishers.com/privacy-policy';
$termsConditions = 'https://hancockpublishers.com/terms-and-conditions';

// start social links
$facebookURL = 'https://www.facebook.com/hancockpublisher';
$instagramURL = 'https://www.instagram.com/hancockpublishers/';
$linkedinURL = 'https://www.linkedin.com/company/hancockpublishers/';
$twitterURL = 'https://twitter.com/hanpublishers';
$youtubeURL = 'https://www.youtube.com/@HancockPublishers';
// end social links

$tawkChatLink = 'href="javascript:$zopim.livechat.window.show()"';

// $tawkChatLink = 'href="javascript:void(0)" onclick="openTawkChat()"';


// old zendesk widget
// $chat = '
// <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=053e2c67-be01-471b-bd16-852776fdb086"> </script>
// ';
// old zendesk widget


// 28 May 2024 hubspot widget
// $chat = '
// <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/45046778.js"></script>
// ';
// 28 May 2024 hubspot widget

// ali zendesk widget
// $chat = '
// <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=725e9781-bcac-4b9d-a877-ccca0b85ff48" defer> </script>
// ';
// ali zendesk widget
// $chatscript = '
// <script>
//         zE(function () {
//             $zopim(function () {
//                 $zopim.livechat.setOnUnreadMsgs(unread);

//                 function unread(number) {
//                     if (number >= 1) {
//                         $zopim.livechat.window.show();
//                     }
//                 }
//             });
//         });
// </script>
// ';

// $chatbutton = 'javascript:$zopim.livechat.window.show()';


// start body google tag manager 
// $bodyGoogleTag = '

// ';
// end body google tag manager 