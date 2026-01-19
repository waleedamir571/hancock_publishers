<div class="floatbutton hidden-mob">
    <div class="btns_wrap">
        <a href="mailto:<?php echo $brandEmail; ?>" class="chat_wrap">
            <span class="icoo"><i class="fa fa-envelope"></i></span>
            <span><?php echo $brandEmail; ?></span>
         
        </a>
        <a href="tel:<?php echo $brandPhone; ?>" class="call_wrap">
            <span class="icoo"><i class="fa fa-phone"></i></span>
            <span><?php echo $brandPhone; ?></span>
           
        </a>
        <!-- <a href="https://twitter.com" class="twitter_wrap">
            <span>Abcd</span>
            <span class="icoo"><i class="fa fa-twitter"></i></span>
        </a> -->
    </div>
    <div class="clickbutton">
        <div class="crossplus">GET A QUOTE</div>
    </div>
    <div class="banner-form">
        <h3>Chat With Us to <br>Avail 50% Discount</h3>
        <div class="banform">
            <div class="container">
                <div class="row">
                    <div class="ban-form">
                        <!--<form class="form-get-quote" id="ordernow-form" action="https://agilewebstudios.com/shopify/javascript;" method="post">-->
                        <form method="POST" action="backend/action/action">
                            <input type="hidden" name="type" value="formLong">
                            <!-- <input type="hidden" name="cta" class="cta" value="">
                            <div class="alert alert-danger error" style="display: none;"></div> -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input id="username" name="name" minlength="2" type="text"
                                            placeholder="Enter your name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input id="cemail" type="email" name="email" placeholder="Enter email here"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input type="text" name="phone" id="phone-coun"
                                            class="phone-country masking contact phoneNum" placeholder="Phone*"
                                            required="">
                                        <span class="bg-danger col-lg-offset-3 contact_error "
                                            style="display: none;">Contact No Incorrect</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <textarea name="message" id="" rows="7"
                                            placeholder="Talk About Your Project"></textarea>
                                    </div>
                                </div>

                                <!-- <input name="page_link" type="hidden" value="#0"> -->

                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input name="submit" type="submit" style="cursor: pointer;">
                                         <!-- <button name="submit" class="btn btn-primary" id="submit-btn-modal2" type="submit">submit</button> -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
 
    </script>