<?php include('partials/header.php'); ?>



<style>
    a.menu-bottom {
        display: none;
    }
    header .col-md-10 {
    display: none;
}
.mt-160{
    margin-top:160px;
}
.questionair {
    display: none;
}
    .egg-offer .top figure img {
    opacity: 1;
    width: 50px;
    height: 50px;
    animation: lantern2 3.5s infinite !important;
}
   
@media (min-width:320px) and (max-width:1024px){
    .mt-160{
    margin-top:80px;
}
}
</style>
<meta property="og:title" content="Questionnaire – Blogs and/or Articles" />
<title>Questionnaire – Blogs and/or Articles</title>

<!--<?php require 'nav.php' ?>-->


<div class="container mt-160">
    <h2 class="text-center">Answer all the questions you can; more information helps us build a better voice for your company's blog.</h2>
    <br>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6 form-group">
                <label>What is the target market of your company? </label>
                <input type="text" class="form-control" name="name" />
            </div>
            <div class="col-md-6 form-group">
                <label>What portion of your target market do you hope to reach through your blog?</label>
                <input type="text" class="form-control" name="email" />
            </div>
        </div>
        <div class="form-group">
            <label>What do you hope to accomplish through your blog? (More sales, more memberships, brand familiarity, image awareness, service sign-up, use of coupons, interaction, public relations, etc.) </label>
            <input type="text" class="form-control" name="location" />
        </div>
        <div class="form-group">
            <label>What kind of voice do you want to have for your blog? (Personal, genuine, professional, expert, neighborly, helpful, funny, trendy...) </label>
            <input type="text" class="form-control" name="year_business" />
        </div>
        <div class="form-group">
            <label>What social marketing have you done for your company?</label>
            <textarea class="form-control" name="summary"></textarea>
        </div>
        <div class="form-group">
            <label>What blogging history does your company have?</label>
            <textarea class="form-control" name="list_services"></textarea>
        </div>
        <div class="form-group">
            <label>What is your customer service style/standard?</label>
            <textarea class="form-control" name="list_business"></textarea>
        </div>
        <div class="form-group">
            <label>What is your company's unique offering?</label>
            <textarea class="form-control" name="list_product"></textarea>
        </div>
        <div class="form-group">
            <label>What is the message you want people to know about your company?</label>
            <textarea class="form-control" name="ideal_customer"></textarea>
        </div>
        <div class="form-group">
            <label>Do you have specific products and/or services you wish to promote through your blog? </label>
            <textarea class="form-control" name="ideal_customer_details"></textarea>
        </div>
        <div class="form-group">
            <label>What do you want people to do after they read your blog? (Find the local store, come into a retail center, call us, make an appointment, go to another page on our website, find out more, order something online...)</label>
            <textarea class="form-control" name="ideal_customer_solutions"></textarea>
        </div>
        <div class="form-group">
            <label>How do you plan to follow up with blog readers? (Answer comments, offer an e-newsletter, answer questions, interact on social sites...) </label>
            <textarea class="form-control" name="ideal_customer_relate"></textarea>
        </div>
        <div class="form-group">
            <label>Provide a brief explanation about your requirement and do you have any specific title for your blog?</label>
            <textarea class="form-control" name="ideal_customer_merrier"></textarea>
        </div>
        <div class="form-group">
            <label>What are the central keywords/trigger words that prospects might use to find you online? (i.e. what words would your target audience use to describe the key products/services/information you provide)</label>
            <textarea class="form-control" name="ideal_customer_visit"></textarea>
        </div>
        <div class="form-group">
            <label>Do you have any competitors? if so, then mention their names and websites</label>
            <textarea class="form-control" name="page_aboutme"></textarea>
        </div>
        <div class="form-group">
            <label>Is there anything else you want us to know as we begin creating your blog</label>
            <textarea class="form-control" name="page_contactus"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" name="booksform" value="Submit" />
    </form>
</div>
<br /><br />
<?php include('partials/footer.php'); ?>