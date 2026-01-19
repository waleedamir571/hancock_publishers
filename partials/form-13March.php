<section id="after_cta" class="contact-form-section bg-gredient-1 vertical-spacing bg pt-sm-20 pb-sm-40">
	<div class="container aos-init aos-animate" data-aos="zoom-out-in" data-aos-duration="2000">
		<div class="row">
			<div class="col-xl-6 col-lg-6">
				<div class="contact-title">
					<h2>Pitch Your Book Idea</h2>
				</div>

			</div>
		</div>
		<div class="row contact-info-row">
			<div class="col-md-6 pr-6">
				<figure>
					<img src="assets/img/pitch.webp" class="img-fluid" alt="Pitch Your Book Idea"
						title="Pitch Your Book Idea">
				</figure>
			</div>
			<div class="col-md-6">
				<form class="main-form" action="backend/action/action" method="POST">
					<input type="hidden" name="type" value="formlongsiteMain">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="formlbl" for="formname">Full Name</label>
								<input type="text" name="name" class="form-control" id="formname"
									aria-describedby="formname" placeholder="" required="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="formlbl" for="formemail">Email</label>
								<input type="email" name="email" pattern="[^ @]*@[^ @]*" class="form-control"
									id="formemail" aria-describedby="formemail" placeholder="" required="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="formlbl" for="formcw">Phone Number</label>
								<input type="text" name="phone" class="form-control" id="formcw"
									aria-describedby="formcw" placeholder="" required="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="formlbl" for="formbudget">Book Title</label>
								<input type="text" name="book_title" class="form-control" id="formbudget"
									aria-describedby="formbudget" placeholder="" required="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="formlbl" for="formmsg">Tell Us About Your Book</label>
								<textarea class="form-control" name="message" id="formmsg" rows="3" placeholder=""
									required=""></textarea>
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
					<div class="row pt-3">
						<div class="col-md-6">
							<div class="form-group pt-40">
								<button type="submit" name="submit_contact" class="btn-form btn-hover recaptchaview"
									disabled>Submit Now <span></span></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>