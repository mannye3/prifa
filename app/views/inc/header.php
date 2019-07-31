<!DOCTYPE html>

<!-- Mirrored from www.vasterad.com/themes/findeo/agencies-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Dec 2018 11:44:36 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title><?php echo SITENAME; ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/colors/main.css" id="colors">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link href="<?php echo URLROOT; ?>/css/dropzone.css" rel="stylesheet" type="text/css">
<link href="<?php echo URLROOT; ?>/images/icon.jpg" type="img/x-icon" rel="shortcut icon">






</head>

<body>

<!-- Wrapper -->
<div id="wrapper">





<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Topbar -->
	<div id="top-bar">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Top bar -->
				<ul class="top-bar-menu">
					<li><i class="fa fa-phone"></i> (123) 123-456 </li>
					<li><i class="fa fa-envelope"></i> <a href="#"><span class="__cf_email__" data-cfemail="771811111e141237120f161a071b125914181a">[email&#160;protected]</span></a></li>
					
				</ul>

			</div>
			<!-- Left Side Content / End -->


			<!-- Left Side Content -->
			<div class="right-side">

				<!-- Social Icons -->
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li>
				</ul>

			</div>
			<!-- Left Side Content / End -->

		</div>
	</div>
	<div class="clearfix"></div>
	<!-- Topbar / End -->


	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="<?php echo URLROOT; ?>"><img src="<?php echo URLROOT; ?>/images/logo.png" alt=""></a>
				</div>


				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>


				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li><a href="<?php echo URLROOT; ?>">Home</a></li>

						<li><a href="<?php echo URLROOT; ?>/pages/about">About Us</a></li>

						<li><a href="<?php echo URLROOT; ?>/pages/rent">For Rent</a></li>

						<li><a href="<?php echo URLROOT; ?>/pages/sale">For Sale</a></li>

						<li><a href="<?php echo URLROOT; ?>/pages/agents">Agents</a></li>

						
						</li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->



					<!-- Right Side Content / End -->
			<?php if(isset($_SESSION['user_id']) AND $_SESSION['user_type'] == 'User' ) : ?>
			<div class="right-side">
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name">Hi <?php echo $_SESSION['user_name']; ?></div>
					
						<ul>
							<li><a href="<?php echo URLROOT; ?>/accounts"><i class="sl sl-icon-user"></i> My Profile</a></li>
							
							<!-- <li><a href="<?php echo URLROOT; ?>/accounts/my_properties"><i class="sl sl-icon-docs"></i> My Properties</a></li> -->
							<li><a href="<?php echo URLROOT; ?>/users/logout"><i class="sl sl-icon-power"></i> Log Out</a></li>
						</ul>
		
					</div>

					<!-- <a href="<?php echo URLROOT; ?>/accounts/submit_property" class="button border">Submit Property</a> -->
				</div>
				
			</div>

				<?php endif; ?>

			<?php if(isset($_SESSION['user_id']) AND $_SESSION['user_type'] == 'Agent' ) : ?>
			<div class="right-side">
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name">Hi <?php echo $_SESSION['user_name']; ?></div>
					
						<ul>
							<li><a href="<?php echo URLROOT; ?>/accounts"><i class="sl sl-icon-user"></i> My Profile</a></li>
							
							<li><a href="<?php echo URLROOT; ?>/accounts/my_properties"><i class="sl sl-icon-docs"></i> My Properties</a></li>
							<li><a href="<?php echo URLROOT; ?>/users/logout"><i class="sl sl-icon-power"></i> Log Out</a></li>
						</ul>
		
					</div>

					<a href="<?php echo URLROOT; ?>/accounts/submit_property" class="button border">Submit Property</a>
				</div>
				
			</div>
			
			<?php endif; ?>


			<?php if(isset($_SESSION['user_id']) =="") : ?>


			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					<a href="<?php echo URLROOT; ?>/users/login" class="sign-in"><i class="fa fa-user"></i> Log In / Register</a>
					<a href="<?php echo URLROOT; ?>/accounts/submit_property" class="button border">Submit Property</a>
				</div>
				<!-- Header Widget / End -->
			</div>
			<?php endif; ?>
			<!-- Right Side Content / End -->





		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

