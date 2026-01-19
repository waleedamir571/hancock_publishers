<?php include 'partials/header.php'; ?>

<style>
    .hbg {
        padding-top: 185px !important;
    }

    .hbg-top.paddingHeader {
        padding-top: 35px;
    }


    .whatweoffer_content {
        position: absolute;
        top: 65% !important;
        background: #fff;
        width: 81% !important;
        right: 20px !important;
        padding: 30px;
        overflow-y: scroll;
        height: 90%;
        box-shadow: 0px 0px 15px #ccc;
    }

    .scrollbar-thin {
        scrollbar-width: thin;
    }

    .card {
        background: #fff;
        border-bottom: 15px solid #FFBB00 !important;
        width: 100% !important;
        padding-top: 0px !important;
        box-shadow: 0px 0px 25px #ccc;
    }
    @media (min-width:320px) and (max-width:1024px) {
        .hbg-top.paddingHeader {
            padding-top: 0px !important;
        }
    }
    

    @media (min-width:320px) and (max-width:480px) {
        .whatweoffer_content {
            position: static !important;
            top: 40px !important;
            background: #fff !important;
            width: 100% !important;
            right: 0 !important;
            padding: 22px !important;
        }
    }
  
    @media (min-width:480px) and (max-width:991px) {
        .whatweoffer_content {
            /* position: absolute !important; */
            top: 40px !important;
            background: #fff !important;
            width: 100% !important;
            right: 0 !important;
            padding: 22px !important;
        }
    }
 
</style>


<?php

    $inner_page_header = [
        'heading' => 'You Write It,
        <br>
        We <span class="coloryellow">Design</span>  It',
        'paragraph' => 'There’s so much more to your book’s design than its cover. <br> Make it stand out with a smart layout and thoughtful <br>
         typesetting. We\'ve handpicked the best interior book <br> designers to start working on your next best seller.',
        'links' => true,
        'imgs' => true,
        'img_url' => 'assets/imgs/design/Designpageheader.png',
        'link1' => '',
        'link2' => '',
        'link1_text' => 'Get started',
        'link2_text' => 'Free Consultation'
    ];

    includeWithVariables('includes/inner-page-header.php', $inner_page_header);

?>

<div class="container">
    <div class="text-center wow slideInRight">
        <h1 class="f-48 form-group mf-29">What's <span class="coloryellow">available?</span></h1>
        <div class="col-md-6 center-block">
            <div class="form-group">
                <img class="img-responsive" src="assets/imgs/divider.png">
            </div>
        </div>
    </div>
</div>


<div class="pt-50 pb-100">
    <div class="container">
        <div class="row wow slideInRight">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top w-100" src="assets/imgs/design/card1.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="pr-pl-20">
                            <h5 class="card-title fw-500 fs-30 mf-21">Completely custom book layout design</h5>
                            <p class="card-text fs-22">There’s so much more to your book’s design than its cover. Make
                                it
                                stand
                                out with a smart layout and thoughtful typesetting. We've handpicked the best interior
                                book
                                designers to start working on your next best seller.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top w-100" src="assets/imgs/design/card2.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="pr-pl-20">
                            <h5 class="card-title fw-500 fs-30 mf-21">Typesetting, Logo marks & Icons</h5>
                            <p class="card-text fs-22">Upload your manuscript and let our professional designers do the
                                rest. They will arrange your words onto the page so it's incredibly easy for readers to
                                absorb. Our designers can make your beautiful book unique (on the inside, which is where
                                it counts). They'll create amazing stylized chapter pages suited to your genre,
                                including logo marks or icons.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top w-100" src="assets/imgs/design/card3.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="pr-pl-20">
                            <h5 class="card-title fw-500 fs-30 mf-21">Full book interiors</h5>
                            <p class="card-text fs-22">Our designers can use text, imagery and color photos to make your
                                cookbooks, photo books or children's books the best they can be.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="best_selling3">
    <section class="">
        <div class="container">
            <div class="pdtop">
                <h1 class="text-center f-65 form-group color-white wow slideInRight">How it works</h1>
                <div class="col-md-4 center-block form-group">
                    <br />
                    <img src="assets/imgs/publishing/sep1.png" class="img-responsive pb-50" />
                    <br>
                </div>
                <div class="row wow slideInLeft">
                    <div class="col-md-4 ">
                        <div class="row">
                            <div class="col-xs-3">
                                <img src="assets/imgs/publishing/pp1.png" class="img-responsive">
                            </div>
                            <div class="col-md-9">
                                <h2 class="f-26 fcolor">We assign a designer</h2>
                            </div>
                        </div>
                        <p class="fs-20 pt-20 fcolor">Hancock Ghost Writers assign you a design so you can share
                            your ideas and discuss the details of your project.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-xs-3">
                                <img src="assets/imgs/publishing/pp2.png" class="img-responsive">
                            </div>
                            <div class="col-md-9">
                                <h2 class="f-26 fcolor">Collaborate</h2>
                            </div>
                        </div>
                        <p class="fs-20 pt-20 fcolor">The designer gets to work! You review designs as they come in
                            and provide your valuable feedback.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-xs-3">
                                <img src="assets/imgs/publishing/pp3.png" class="img-responsive">
                            </div>
                            <div class="col-md-9">
                                <h2 class="f-26 fcolor">Finalize your project</h2>
                            </div>
                        </div>
                        <p class="fs-20 pt-20 fcolor">We finalize your design, and send you all the parent files
                            when the work is complete.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="pt-100 pb-300">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow slideInRight">
                <div class="text-center">
                    <h1 class="fs-48">Decide What You Need!</h1>
                    <img src="assets/imgs/divider.png" style="width: 40%;height: 3px;" />
                    <p class="f-20 fw-500">Book editing companies like ours exist to make your book better. We provide
                        our
                        services to make sure that your book has no flaws. This ensures that your book is as perfect as
                        it
                        can be. Many bestselling authors hire the services of professional book editors. This is because
                        it
                        provides them with an outsider's point of view about the book.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 whatweoffer_container wow slideInLeft">
                <div class="w-100">
                    <img class="mw-100" src="assets/imgs/design/redbooknew.png" />
                </div>
                <div class="whatweoffer_content ">
                    <h1 class="fw-bold">Cover <br>
                        Design</h1>
                    <p class="fs-20"><img class="mr-5" src="assets/imgs/book-marketing/icon.png" alt=""> A kick-off
                        phone call with our creative director to discuss potential concepts and throw around some ideas
                    </p>
                    <p class="fs-20"><img class="mr-5" src="assets/imgs/book-marketing/icon.png" alt=""> A minimum of 4
                        cover design drafts, based on your specifications, 10 days after the kick-off call.</p>
                    <p class="fs-20"><img class="mr-5" src="assets/imgs/book-marketing/icon.png" alt=""> A minimum of 4
                        cover design drafts, based on your specifications, 10 days after the kick-off call.</p>
                </div>
            </div>
            <div class="col-md-4 whatweoffer_container wow slideInLeft">
                <div class="w-100">
                    <img class="mw-100" src="assets/imgs/design/whitebook new.png" / style="margin-left: -5px;">
                </div>
                <div class="whatweoffer_content mt-10">
                    <h1 class="fw-bold">Internal
                        Design and
                        Layout</h1>
                    <p class="fs-20"><img class="mr-5" src="assets/imgs/book-marketing/icon.png" alt=""> A
                        professionally formatted, print-ready PDF file of your book for paperback
                    </p>
                    <p class="fs-20"><img class="mr-5" src="assets/imgs/book-marketing/icon.png" alt=""> Professionally
                        formatted ePub and Kindle (KPF) copies of your fiction book
                    </p>
                    <p class="fs-20"><img class="mr-5" src="assets/imgs/book-marketing/icon.png" alt=""> A table of
                        contents
                    </p>
                </div>

            </div>
            <div class="col-md-4 whatweoffer_container wow slideInRight">
                <div class="w-100">
                    <img class="mw-100" src="assets/imgs/design/blackbook.png" / style="margin-left: 7px;">
                </div>
                <div class="whatweoffer_content mt-10">
                    <h1 class="fw-bold">Finalize
                        your
                        project</h1>
                    <p class="fs-20"><img class="mr-5" src="assets/imgs/book-marketing/icon.png" alt=""> Fully
                        illustrated book
                        Full-color or grayscale / black and white
                        Digital or traditional media
                    </p>
                    <p class="fs-20"><img class="mr-5" src="assets/imgs/book-marketing/icon.png" alt=""> Collaboration
                        on up to two revisions per chosen
                    </p>
                    <p class="fs-20"><img class="mr-5" src="assets/imgs/book-marketing/icon.png" alt=""> Up to two
                        illustration concepts to review (per illustration)</p>
                </div>
            </div>
        </div>
    </div>
</div>




<section class="pt-100 pt-260">
    <div class="container">

        <div class="pdtop">
            <h1 class="text-center f-65 form-group wow slideInRight">Step by step</h1>
            <div class="col-md-4 center-block form-group">
                <br />
                <img src="assets/imgs/design/designlline.png" class="w-100" />
            </div>

            <div class="row wow slideInLeft">
                <div class="col-md-4">
                    <h2 class="fs-30 fw-bold mf-21"> <img src="assets/imgs/professional/img1.png" alt="">
                        Brainstorming
                    </h2>
                    <h2 class="fs-26 coloryellow fw-500"> Choosing a style</h2>
                    <p class="fs-20 pt-20 fw-500 ">The first step in creating the  perfect cover design is 
                        choosing the best
                        suited design style for your project.</p>
                </div>
                <div class="col-md-4">
                    <h2 class="fs-30 fw-bold mf-21"> <img src="assets/imgs/professional/img2.png" alt="">
                        Initial designs
                    </h2>
                    <h2 class="fs-26 coloryellow fw-500">Review the draft designs</h2>
                    <p class="fs-20 pt-20 fw-500 ">Creating the initial concepts usually takes around 10 to 15 business
                        days.
                        Once the draft cover designs are ready you will receive a preview image of each of them.</p>
                </div>
                <div class="col-md-4">
                    <h2 class="fs-30 fw-bold mf-21"> <img src="assets/imgs/professional/img2.png" alt="">
                        Revise & finalize
                    </h2>
                    <h2 class="fs-26 coloryellow fw-500"> The revision process</h2>
                    <p class="fs-20 pt-20 fw-500 ">Once you choose your favorite cover art I’ll proceed with the
                        tweaking
                        phase. You can request a set of revisions and I’ll tweak the design as much as it’s needed to
                        make it perfect.</p>
                </div>
            </div>
            <div class="row wow slideInRight">
                <div class="col-md-4 ">
                    <h2 class="fs-26 coloryellow fw-500">
                        Exchanging ideas
                    </h2>
                    <p class="fs-20 pt-20 fw-500 mf-21">If you already have an idea of what part of the story you’d like the
                        cover
                        art to depict then I’ll do my best to include it in at least one of the draft designs.</p>
                </div>
                <div class="col-md-4">
                    <h2 class="fs-26 coloryellow fw-500">
                        Choose your favorite
                    </h2>
                    <p class="fs-20 pt-20 fw-500 mf-21">Out of the initial designs you can now choose your favorite one. This
                        concept goes next into the revision phase.</p>
                </div>
                <div class="col-md-4">
                    <h2 class="fs-26 coloryellow fw-500">
                        Publishing
                    </h2>
                    <p class="fs-20 pt-20 fw-500 mf-21">The final ready-for-publishing files are now carefully prepared to
                        match the
                        publisher’s guidelines.</p>
                </div>
            </div>

        </div>
    </div>
</section>




<div class="hidden-xs hidden-sm hide-tablet">
    <div class="pt-50 pb-40">
        <section class="">


            <div class="container">
                <div class="col-md-7 wow slideInRight">
                    <div class="good-story-left good-story-container">
                        <h1 class="mt-8">
                            Covers that demand <br>
                            attention<br />

                        </h1>
                        <p class="fs-20">
                            Yes, people do judge books by their covers, and we’re here to make sure yours is dressed for
                            success. Bringing your book’s story and message to your audience is an art we’ve mastered.
                        </p>
                       <a href="<?php echo $chatbutton; ?>"> <input type="submit" value="View covers" class="fformbtn1"></a>
                    </div>
                </div>
                <div class="col-md-5 wow slideInLeft">
                    <div class="text-right">
                        <img src="assets/imgs/design/coversdemand.png" class="good-story-img center-block w-70" />
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="pt-50 pb-40">
        <section class="">
            <div class="container">
                <div class="col-md-4 wow slideInRight">
                    <div class="">
                        <img src="assets/imgs/design/img2.png" class="good-story-img center-block w-100" />
                    </div>
                </div>
                <div class="col-md-7 col-md-offset-1 wow slideInLeft">
                    <div class="good-story-right good-story-container">
                        <h1 class="mt-8">
                            Pages that keep <br>
                            you turning <br />
                        </h1>
                        <p class="fs-20">
                            A well designed book interior that reflects the mood of your content is critical to
                            anysuccessful literary venture. From simple text books to complex photographic layoutsand
                            everything in between—we have you covered
                        </p>
                       <a href="<?php echo $chatbutton; ?>"> <input type="submit" value="View interiors" class="fformbtn1"></a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="pt-50 pb-40">
        <section class="">
            <div class="container">
                <div class="col-md-7 wow slideInRight">
                    <div class="good-story-left good-story-container">
                        <h1 class="mt-8">
                            Check Out a few <br>
                            Trailers

                        </h1>
                        <p class="fs-20">
                            Set up a call with one our talented producers who can walk you through the process and
                            answer any questions you might have.
                        </p>
                       <a href="<?php echo $chatbutton; ?>"> <input type="submit" value="Consult a Writer" class="fformbtn1"></a>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1 wow slideInLeft">
                    <div class="text-right">
                        <img src="assets/imgs/design/checkout.png" class="good-story-img center-block w-75" />
                    </div>
                </div>
            </div>

        </section>
    </div>


</div>

<div class="hidden-md hidden-lg force-show">
    <br>
    <div class="pt-50 pb-40">
        <section class="">


            <div class="container">
                <div class="col-md-7 wow slideInLeft">
                    <div class="good-story-left good-story-container">
                        <h1 class="mt-8 fs-24">
                            Covers that demand <br>
                            attention<br />

                        </h1>
                        <p class="fs-20">
                            Yes, people do judge books by their covers, and we’re here to make sure yours is dressed for
                            success. Bringing your book’s story and message to your audience is an art we’ve mastered.
                        </p>
                       <a href="<?php echo $chatbutton; ?>"> <input type="submit" value="View covers" class="fformbtn1"></a>
                    </div>
                </div>
                <div class="col-md-5 wow slideInRight">
                    <div class="text-right">
                        <img src="assets/imgs/design/coversdemand.png" class="good-story-img center-block w-75" />
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="pt-50 pb-40">
        <section class="">
            <div class="container">

                <div class="col-md-8 wow slideInLeft">
                    <div class="good-story-right good-story-container">
                        <h1 class="mt-8 fs-24">
                            Pages that keep <br>
                            you turning <br />
                        </h1>
                        <p class="fs-20 ">
                            A well designed book interior that reflects the mood of your content is critical to
                            anysuccessful literary venture. From simple text books to complex photographic layoutsand
                            everything in between—we have you covered
                        </p>
                        <a href="<?php echo $chatbutton; ?>"><input type="submit" value="View interiors" class="fformbtn1"></a>
                    </div>
                </div>
                <div class="col-md-4 wow slideInRight">
                    <div class="">
                        <img src="assets/imgs/design/img2.png" class="good-story-img center-block w-100" />
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="pt-50 pb-40">
        <section class="">
            <div class="container">
                <div class="col-md-7 wow slideInLeft">
                    <div class="good-story-left good-story-container">
                        <h1 class="mt-8 fs-24">
                            Check Out a few <br>
                            Trailers

                        </h1>
                        <p class="fs-20">
                            Set up a call with one our talented producers who can walk you through the process and
                            answer any questions you might have.
                        </p>
                        <a href="<?php echo $chatbutton; ?>"><input type="submit" value="Consult a Writer" class="fformbtn1"></a>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1 wow slideInRight">
                    <div class="text-right">
                        <img src="assets/imgs/design/img3 (1).png" class="good-story-img center-block w-75" />
                    </div>
                </div>
            </div>

        </section>
    </div>

    <div class="pt-50 pb-40">
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-offset-1 wow slideInLeft">
                        <div class="good-story-right good-story-container">
                            <h1 class="mt-8">
                                Fairy Tales<br />
                            </h1>
                            <p class="f-22">
                                Fairy Tales are geared towards children ages 7 and above. These books generally
                                follow
                                the same characters (giants, witches, wizards, etc.) and can prove amazing to read
                                aloud
                                books for children.
                            </p>
                           <a href="<?php echo $chatbutton; ?>"> <button type="submit" class="btn btn-default">Consult a Writer</button></a>
                        </div>
                    </div>
                    <div class="col-md-4 wow slideInRight">
                        <div class="text-right">
                            <img src="assets/imgs/children/img4.png" class="good-story-img center-block" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<section class="testimonials">
    <div class="container wow slideInLeft">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center bestSellingHead font-24">Our <span class="coloryellow">Testimonials</span>

            </div>
        </div>
        <div class="clientmonials owl-carousel owl-theme">
            <div class="item">
                <div class="topbottom">
                    <div class="leftright">
                        <div class="monialsholder">
                            <p class="f-20">They were professional and gave me the results I wanted. They kept me
                                informed about the progress of
                                my story and came back to confirm.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="topbottom">
                    <div class="leftright">
                        <div class="monialsholder">
                            <p class="f-20">Hancock was an amazing partner. I am glad that I used their services for my
                                book writing business. They delivered exactly what they promised.
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="topbottom">
                    <div class="leftright">
                        <div class="monialsholder">
                            <p class="f-20">They are amazing! It was thrilling to work together. They provided me with
                                assistance with content
                                writing and SEO optimization.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right wow slideInRight">
            <img src="assets/imgs/trustpilot.png" />
        </div>
    </div>
</section>


<style>
    .mt-187-res-777 {
        background: url('assets/imgs/csb.png') bottom center no-repeat !important;
    }
</style>
<?php include 'partials/footer.php'; ?>