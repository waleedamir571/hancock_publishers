<?php include ('partials/header.php') ?>
<header class="section book_editing masthead-bold new_header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-sm-12 _pt-5 position-relative">
				<h1 class="text-styles-subheading">What Our Clients Say </h1>
				<p class="text-styles-header">Testimonials</p>

			</div>

		</div>
	</div>
</header>
<?php include ('partials/clients-section.php') ?>

<!-- start fancy box -->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css'>
<link rel="stylesheet" href="./style.css">


<?php // include ('partials/complete-solution.php') ?>
<?php // include ('partials/customers-reviews.php') ?>


<?php // include ('partials/complete-solution-bottom.php') ?>

<!-- start video testimonials -->
<section class="_bg-light vertical-spacing client-reviews-section">
	<div class="container">
		<div class="row mb-4">
			<div class="col-md-12 text-center">
				<h2 data-aos="zoom-out-down" data-aos-duration="1000">See What Authors Say About Our Work</h2>
				<p class="paragraph-2 pb-5 p-text-large">Check out what our customers have to say</p>
			</div>
		</div>
		<div class="row testimonial_wrapper">


			<div class="col-md-3">
				<div class="card-white">
					<!-- <img class="card-img-top" src="assets/images/slider/slider-1.png" alt="Review 1" title="HOI Solutions Review 1 Card Png"
                                        alt="Card image cap"> -->
					<iframe width="100%" height="250"
						src="https://www.youtube.com/embed/2AMnGjHFRTo?si=vQMTbhkfnN_Li2yQ&autoplay=0&mute=0&controls=1"
						title="YouTube video player" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
						referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
					</iframe>





				</div>
			</div>
			<div class="col-md-3">
				<div class="">
					<div class="card-white">
						<iframe width="100%" height="250"
							src="https://www.youtube.com/embed/hUfCt4tLC8Y?si=azijxWZiw1x0J4Qv"
							title="YouTube video player" frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
							referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
						</iframe>



					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="">
					<div class="card-white">
						<iframe width="100%" height="250"
							src="https://www.youtube.com/embed/KBRnmwl03Kg?si=hz30mv6_hnoBrETF"
							title="YouTube video player" frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
							referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
						</iframe>

					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="">
					<div class="card-white" onclick="openVideoPopup('2AMnGjHFRTo')">
						<div class="thumbnail">
							<img src="https://img.youtube.com/vi/2AMnGjHFRTo/hqdefault.jpg" alt="Video thumbnail">
							<div class="play-button">&#9658;</div>
						</div>
					</div>
				</div>
			</div>



		</div>
	</div>
	</div>
</section>

<div id="videoPopup" class="video-popup">
	<div class="video-popup-content">
		<span class="close-btn" onclick="closeVideoPopup()">&times;</span>
		<iframe id="popupIframe" width="100%" height="400" frameborder="0"
			allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
			allowfullscreen>
		</iframe>
	</div>
</div>
<!-- end video testimonials -->


<?php include ('partials/book-editing-testmonials.php') ?>

<?php include ('partials/form.php') ?>
<?php include ('partials/popupform.php') ?>
<?php include ('partials/footer.php') ?>


<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css'>
<link rel="stylesheet" href="./style.css">


<!-- partial -->
<script src='https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js'></script>
<script>Fancybox.bind("[data-fancybox]", {
		// Your custom options
	});</script>

</body>

</html>

<script>
function openVideoPopup(videoId) {
  const popup = document.getElementById('videoPopup');
  const iframe = document.getElementById('popupIframe');
  iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
  popup.style.display = 'flex';
}

function closeVideoPopup() {
  const popup = document.getElementById('videoPopup');
  const iframe = document.getElementById('popupIframe');
  iframe.src = ''; // stop video
  popup.style.display = 'none';
}
</script>
