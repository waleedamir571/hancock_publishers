    <?php include('partials/header.php')?>

    <style type="text/css">
    	.not-found-wrapper {
		    height: 70vh;
		    display: flex;
		    justify-content: center;
		    align-items: center;
		    align-content: center;
		    text-align: center;
		    margin-top: 30px;
		}
		.not-found-wrapper h2 {
			font-size: 90px !important;
		}

		.not-found-wrapper p {
	    	font-size: 22px;
	    	margin-bottom: 15px !important;
	    	    font-weight: bold;
		}

		.not-found-btn {
		     padding: 15px 30px !important;
			 font-size: 16px;
			 text-transform: initial;
			 background: white;
			 border: 1px solid #F24405;
			 color: #F24405 !important;
		    display: inline-table;
		}

		.not-found-wrapper .fa-long-arrow-alt-left {
			padding-right: 5px;
		}

		.not-found-wrapper .book-btn:hover {
		    background: #F24405;
		    color: white !important;
		}

    </style>
<body>
	<section class="not-found-wrapper">
		<div class="container">
			<div class="row align-content-center">
				<div class="col-md-12">
					<p class="mb-4">The page you are looking for can’t be found.</p>
					<h2 class="fw-bold _inner-h2 mb-4">
					   <span class="brand-font">4</span>0<span class="brand-font">4</span>
    				</h2>
    				<a class="cta-btn-small main-btn book-btn not-found-btn" href="./"><i class="fas fa-long-arrow-alt-left"></i> Go to the Home Page</a>

				</div>
			</div>
		</div>
	</section>
	<?php include ('partials/form.php')?>
	<?php include('partials/popupform.php') ?>
    <?php include('partials/footer.php')?>

</body>
</html>