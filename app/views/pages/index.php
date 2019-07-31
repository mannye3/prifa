<?php require APPROOT . '/views/inc/header.php'; ?>



<!-- Banner
================================================== -->
<div class="parallax" data-background="images/home-parallax-2.jpg" data-color="#36383e" data-color-opacity="0.5" data-img-width="2500" data-img-height="1600">

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="search-container">

					<!-- Form -->
					<h2>Find New Home</h2>

					<!-- Row With Forms -->
					<div class="row with-forms">

						<!-- Property Type -->
						<!-- <div class="col-md-3">
							<select data-placeholder="Any Type" class="chosen-select-no-single" >
								<option>Apartments</option>
								<option>Houses</option>
								<option>Commercial</option>
								<option>Garages</option>
								<option>Lots</option>
							</select>
						</div> -->

						<!-- Status -->
						<!-- <div class="col-md-3">
							<select data-placeholder="Any Status" class="chosen-select-no-single" >
								<option>For Sale</option>
								<option>For Rent</option>
							</select>
						</div> -->

						<!-- Main Search Input -->
						<form action="<?php echo URLROOT; ?>/searches" method="get" >
						<div class="col-md-12">
							<div class="main-search-input">
								<input type="text" placeholder="Enter address e.g. street, city or state" name="location" />
								<button class="button" type="submit"><i class="fa fa-search"></i></button>
							</div>
						</div>
						</form>

					</div>
					<!-- Row With Forms / End -->

					<!-- Browse Jobs -->
					<!-- <div class="adv-search-btn">
						Need more search options? <a href="listings-list-full-width.html">Advanced Search</a>
					</div> -->

					<!-- Announce -->
					<div class="announce">
						We’ve 1000 properties for you!
					</div>

				</div>

			</div>
		</div>
	</div>

</div>


<!-- Content
================================================== -->
<!-- Fullwidth Section -->
<section class="fullwidth border-bottom margin-top-0 margin-bottom-0 padding-top-50 padding-bottom-50" data-background-color="#ffffff">

	<!-- Content -->
	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<!-- Icon Box -->
				<div class="icon-box-1 alternative">

					<div class="icon-container">
						<i class="im im-icon-Checked-User"></i>
					</div>

					<h3>Agent Finder</h3>
					<p>See who specializes in your area, has the most reviews and the right experience to meet your needs.</p>
				</div>
			</div>

			<div class="col-md-4">
				<!-- Icon Box -->
				<div class="icon-box-1 alternative">

					<div class="icon-container">
						<i class="im im-icon-Cloud-Computer"></i>
					</div>

					<h3>Modern Technology</h3>
					<p>More than 10,000 customers buy or sell a home with us each year. We help people and homes find each together.</p>
				</div>
			</div>

			<div class="col-md-4">
				<!-- Icon Box -->
				<div class="icon-box-1 alternative">

					<div class="icon-container">
						<i class="im im-icon-Idea"></i>
					</div>

					<h3>Home Designs Ideas</h3>
					<p>Our specialists can help you get started on that home project. Find paint colors, that perfect tile and more. </p>
				</div>
			</div>

		</div>
	</div>

</section>
<!-- Fullwidth Section / End -->


<!-- Featured -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline margin-bottom-25 margin-top-65">Featured</h3>
		</div>

		<!-- Carousel -->
		<div class="col-md-12">
			<div class="carousel">
				<?php foreach($data['feat_pro'] as $feat_pro) : ?>
				<!-- Listing Item -->
				<div class="carousel-item">
					<div class="listing-item compact">

						<a href="<?php echo URLROOT; ?>/listings/<?php echo $feat_pro->ref_id; ?>" class="listing-img-container">

							<div class="listing-badges">
								<span class="featured">For <?php echo $feat_pro->purpose; ?></span>
								
							</div>

							<div class="listing-img-content">
								<span class="listing-compact-title"><?php echo $feat_pro->title; ?> <i>₦<?php  echo number_format($feat_pro->price).""; ?></i></span>

								<ul class="listing-hidden-content">
									
									<li>Rooms <span><?php echo $feat_pro->rooms; ?></span></li>
									<li>Beds <span><?php echo $feat_pro->bathrooms; ?></span></li>
									<li>Type <span><?php echo $feat_pro->type; ?></span></li>
								</ul>
							</div>

							<img src="<?php echo URLROOT; ?>/pro_pics/<?php echo $feat_pro->pic; ?>" alt="">
						</a>

					</div>
				</div>
				<!-- Listing Item / End -->

		 <?php endforeach; ?>

			</div>
		</div>
		<!-- Carousel / End -->

	</div>
</div>
<!-- Featured / End -->









<!-- Container -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-bottom-35 margin-top-10">Most Popular Places <span>Properties In Most Popular Places</span></h3>
		</div>

		<div class="col-md-4">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-01.jpg">

				<!-- Badge -->
				<div class="listing-badges">
					<span class="featured">Featured</span>
				</div>

				<div class="img-box-content visible">
					<h4>New York </h4>
					<span>14 Properties</span>
				</div>
			</a>

		</div>

		<div class="col-md-8">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-02.jpg">
				<div class="img-box-content visible">
					<h4>Los Angeles</h4>
					<span>24 Properties</span>
				</div>
			</a>

		</div>

		<div class="col-md-8">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-03.jpg">
				<div class="img-box-content visible">
					<h4>San Francisco </h4>
					<span>12 Properties</span>
				</div>
			</a>

		</div>

		<div class="col-md-4">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-04.jpg">
				<div class="img-box-content visible">
					<h4>Miami</h4>
					<span>9 Properties</span>
				</div>
			</a>

		</div>

	</div>
</div>
<!-- Container / End -->





<!-- Flip banner -->
<a href="listings-half-map-grid-standard.html" class="flip-banner parallax" data-background="images/flip-banner-bg.jpg" data-color="#274abb" data-color-opacity="0.9" data-img-width="2500" data-img-height="1600">
	<div class="flip-banner-content">
		<h2 class="flip-visible">We help people and homes find each other</h2>
		<h2 class="flip-hidden">Browse Properties <i class="sl sl-icon-arrow-right"></i></h2>
	</div>
</a>
<!-- Flip banner / End -->


<?php require APPROOT . '/views/inc/footer.php'; ?>

