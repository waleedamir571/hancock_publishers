<div class="header-lead-form" data-aos="zoom-out-down" data-aos-duration="1000">
    <div class="contact-title">
        <h2>Activate Your Coupon To AVAIL 50% DISCOUNT</h2>
        <p>It’s a limited time offer so hurry up! Don’t wait!</p>
    </div>
    <form class="main-form" action="../../backend/action/action" method="POST">
        <input type="hidden" name="type" value="formlongsiteMain">
        <div class="row">
            <div class="col-md-6">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><img src="assets/img/icons/name-icon.svg"
                            alt="Hancock Publishers" title="Hancock Publishers"></span>
                    <input type="text" name="name" class="form-control" id="formname" aria-describedby="formname"
                        placeholder="Name" required="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><img src="assets/img/icons/email-icon.svg"
                            alt="Hancock Publishers Email" title="Hancock Publishers Email"></span>
                    <input type="email" name="email" pattern="[^ @]*@[^ @]*" class="form-control" id="formemail"
                        aria-describedby="formemail" placeholder="Email" required="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 gy-md-4">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><img src="assets/img/icons/phone-icon.svg"
                            alt="Hancock Publishers Phone" title="Hancock Publishers Phone"></span>
                    <input type="number" name="phone" class="form-control" id="formcw" aria-describedby="formcw"
                        placeholder="123-456-7890" required="">
                </div>
            </div>
            <div class="col-md-12 gy-md-4">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><img src="assets/img/icons/title-icon.svg"
                            alt="Hancock Publishers" title="Hancock Publishers"></span>
                    <input type="text" name="book_title" class="form-control" id="formbudget"
                        aria-describedby="formbudget" placeholder="Book Title" required="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 gy-md-4">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text align-items-start" id="addon-wrapping"><img
                            src="assets/img/icons/msg-icon.svg" alt="Hancock Publishers Message"
                            title="Hancock Publishers Message" style="margin-top: 15px;"></span>
                    <textarea class="form-control" name="message" id="formmsg" rows="3"
                        placeholder="Tell Us About Your Book" required=""></textarea>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="g-recaptcha" data-callback="recaptchaCallback"
                        data-sitekey="6LeRvEwpAAAAAKhQ5Hu8Hhpz19j8XWIYIiY6DaoJ"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group _pt-40">
                    <button type="submit" name="submit_contact" class="btn-form btn-hover btn-small recaptchaview"
                        disabled>Submit Now
                        <span></span></button>
                </div>
            </div>
        </div>
    </form>
</div>