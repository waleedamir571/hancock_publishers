<div class="modal fade" id="mainpopupform" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal_main">
            <!-- Left floating image -->
            <!-- <img src="assets/img/about/GIFT.png" class="modal-float modal-left" alt="Snowman"> -->

            <!-- Right floating image -->
            <!-- <img src="assets/imgs/house.png" class="modal-float modal-right" alt="Igloo"> -->

            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body popupform">
                <div class="container aos-init aos-animate" data-aos="zoom-out-in" data-aos-duration="2000">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="contact-title">
                                <h2>ACTIVATE YOUR COUPON TO AVAIL 50% DISCOUNT</h2>
                                <p>It’s a limited time offer so hurry up! Don’t wait!</p>
                            </div>

                        </div>
                    </div>
                    <div class="row contact-info-row">
                        <div class="col-md-12">
                            <form class="main-form" action="backend/action/action" method="POST">
                                <input type="hidden" name="type" value="formlongsiteMain">
                                <div class="row gx-3 py-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="formname"
                                                aria-describedby="formname" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" pattern="[^ @]*@[^ @]*"
                                                class="form-control" id="formemail" aria-describedby="formemail"
                                                placeholder="Email" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-3 _py-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="phone" class="form-control" id="formcw"
                                                aria-describedby="formcw" placeholder="Phone Number" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="custom-select-arrow w-100" name="services_category"
                                                required="">
                                                <option value="" disabled selected>Select Service</option>
                                                <option value="Audio Book">Audio Book</option>
                                                <option value="Author Website">Author Website</option>
                                                <option value="Book Editing">Book Editing</option>
                                                <option value="Book Publishing">Book Publishing</option>
                                                <option value="Book Ghostwriting">Book Ghostwriting</option>
                                                <option value="Fiction">Fiction</option>
                                                <option value="Non-Fiction">Non-Fiction</option>
                                                <option value="Memoir">Memoir</option>
                                                <option value="Childrens Books">Childrens Books</option>
                                                <option value="Book Marketing">Book Marketing</option>
                                                <option value="Book illustration">Book illustration</option>
                                                <option value="Cover Design">Cover Design</option>
                                                <option value="Formatting">Formatting</option>
                                                <option value="Video Trailer">Video Trailer</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row gx-3 py-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="book_title" class="form-control" id="formbudget"
                                                aria-describedby="formbudget" placeholder="Book Title" required="">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row gx-3 py-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="formmsg" rows="3"
                                        placeholder="Tell Us About Your Book" required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row row gx-3 py-3">
                            <div class="col-md-12">
                                <div class="form-group pt-40">
                                    <button type="submit" name="submit_contact"
                                        class="btn-form btn-hover cta-btn-small w-100">Submit Now
                                        <span></span></button>
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
</div>