<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Alacrity</title>
	<meta content="" name="descriptison">
	<meta content="" name="keywords">

	<!-- Linking necessary files -->
	<link href="assets/img/favicon.png" rel="icon" />
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet"/>
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/vendor/font-awesome/css/fontawesome.css" rel="stylesheet"/>
	<link href="assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet"/>
	<link href="assets/vendor/slick/slick.css" rel="stylesheet" />
	<link href="assets/vendor/slick/slick-theme.css" rel="stylesheet" />
	<link href="assets/vendor/font-awesome/css/brands.css" rel="stylesheet" />
	<link href="assets/vendor/font-awesome/css/solid.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />

</head>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>


<body>
	<div id="main">
	<header id="header" class="fixed-top">  
     	<nav class="nav-menu d-none d-lg-block">
			<ul>
				<li class="navbar-toggler third-button" type="button" onclick="toggleNav()">
					<div class="animated-icon3" id="toggler"><span></span><span></span><span></span></div>
				</li>
				<li ><a href="index.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<li class="active"><a href="about.php">About</a></li>
				<li ><a href="contact.php">Contact</a></li>
			</ul>
			<ul style="float: right;">
				<li class="drop-down"><a href="">Hello. Sign In</a>
					<ul class="js-signin-modal-trigger">
						<li><a class="cd-main-nav__item cd-main-nav__item--signin" href="#0" data-signin="login">Sign in</a></li>
						<li><a href="#">Account</a></li>
					</ul>
				</li>
			</ul>
      	</nav>
  	</header>
  
	<div id="sideMenu" class="sidebar">
		<a href="index.php">Home</a>
		<a href="about.php">About</a>
		<a href="products.php">Products</a>
		<a href="contact.php">Contact</a>
	</div>


  	<main id="content">

  		<div class="cd-signin-modal js-signin-modal"> <!-- this is the entire modal form, including the background -->
			<div class="cd-signin-modal__container"> <!-- this is the container wrapper -->
				<ul class="cd-signin-modal__switcher js-signin-modal-switcher js-signin-modal-trigger">
					<li><a href="#0" data-signin="login" data-type="login">Sign in</a></li>
					<li><a href="#0" data-signin="signup" data-type="signup">New account</a></li>
				</ul>
					<div class="cd-signin-modal__block js-signin-modal-block" data-type="login"> <!-- log in form -->
						<form class="cd-signin-modal__form">
							<p class="cd-signin-modal__fieldset">
								<label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signin-email">E-mail</label>
								<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signin-email" type="email" placeholder="E-mail">
								<span class="cd-signin-modal__error">Error message here!</span>
							</p>
		
							<p class="cd-signin-modal__fieldset">
								<label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signin-password">Password</label>
								<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signin-password" type="text"  placeholder="Password">
								<a href="#0" class="cd-signin-modal__hide-password js-hide-password">Hide</a>
								<span class="cd-signin-modal__error">Error message here!</span>
							</p>
		
							<!-- <p class="cd-signin-modal__fieldset">
								<input type="checkbox" id="remember-me" checked class="cd-signin-modal__input ">
								<label for="remember-me">Remember me</label>
							</p> -->
		
							<p class="cd-signin-modal__fieldset">
								<input class="cd-signin-modal__input cd-signin-modal__input--full-width" type="submit" value="Login">
							</p>
						</form>
						
						<p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="reset">Forgot your password?</a></p>
					</div> <!-- cd-signin-modal__block -->
		
					<div class="cd-signin-modal__block js-signin-modal-block" data-type="signup"> <!-- sign up form -->
						<form class="cd-signin-modal__form">
							<p class="cd-signin-modal__fieldset">
								<label class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace" for="signup-username">Username</label>
								<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-username" type="text" placeholder="Username">
								<span class="cd-signin-modal__error">Error message here!</span>
							</p>
		
							<p class="cd-signin-modal__fieldset">
								<label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signup-email">E-mail</label>
								<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-email" type="email" placeholder="E-mail">
								<span class="cd-signin-modal__error">Error message here!</span>
							</p>
		
							<p class="cd-signin-modal__fieldset">
								<label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signup-password">Password</label>
								<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-password" type="text"  placeholder="Password">
								<a href="#0" class="cd-signin-modal__hide-password js-hide-password">Hide</a>
								<span class="cd-signin-modal__error">Error message here!</span>
							</p>
		
							<p class="cd-signin-modal__fieldset">
								<input type="checkbox" id="accept-terms" class="cd-signin-modal__input ">
								<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
							</p>
		
							<p class="cd-signin-modal__fieldset">
								<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Create account">
							</p>
						</form>
					</div> <!-- cd-signin-modal__block -->
		
					<div class="cd-signin-modal__block js-signin-modal-block" data-type="reset"> <!-- reset password form -->
						<p class="cd-signin-modal__message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>
		
						<form class="cd-signin-modal__form">
							<p class="cd-signin-modal__fieldset">
								<label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="reset-email">E-mail</label>
								<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="reset-email" type="email" placeholder="E-mail">
								<span class="cd-signin-modal__error">Error message here!</span>
							</p>
		
							<p class="cd-signin-modal__fieldset">
								<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Reset password">
							</p>
						</form>
		
						<p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="login">Back to log-in</a></p>
					</div> <!-- cd-signin-modal__block -->
					<a href="#0" class="cd-signin-modal__close js-close">Close</a>
                    </div> <!-- cd-signin-modal__container -->
				</div> <!-- cd-signin-modal -->
				


                <!-- About section -->
                <div id="about" class="about-area area-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="section-headline text-center">
									<h2>About Alacrity</h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="well-left">
									<div class="single-well">
										<a href="#">
											<img src="assets/img/about/1.jpg" alt="" />
										</a>
									</div>
								</div>
							</div>
					
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="well-middle">
									<div class="single-well">
										<p>
											Alacrity established in the year 2001  is pioneer in manufacturing and reconditioning of hydraulic cylinders, hydraulic valves,rock breakers.
											We cater our services to OEM like M/s BEML supplying hydraulic cylinder and hydraulic tank with integrated valve assembly and also manufacturing of hydraulic  
											power packs tailor make.
                                        </p>
                                        <p>
											We design products as per requirement of end customerto , like end mounting,
											size and shape, load bearing capacity, speed, controls, sequence of operation, fluids, 
											temperature, environment, duty Cycle, safety, precision, sensing devices etc.
                                        </p>
										<ul>
											<li>
												<i class="fa fa-check"></i>  Customer satisfaction is our primary focus
											</li>
											<li><i class="fa fa-check"></i> Manufacturing and refurbishment of products</li>
											<li>
												<i class="fa fa-check"></i> Constantly improvising our product to customer needs
											</li>
											<li>
												<i class="fa fa-check"></i> Automation to look ,feel and work to customer requirement.
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	</main>
	
	<!-- Footer -->
	<?php
		include "footer.php";
	?>

   <!-- Required Scripts -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/wow/wow.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
	<script src="assets/vendor/slick/slick.min.js"></script>
	<script src="assets/js/main.js"></script>
	
</body>
</html>