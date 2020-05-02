<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />

		<title>Alacrity</title>
	
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
    

	<!-- Database Connectivity -->
	<?php
		require_once "config.php";
	?>


	
		<!-- Header -->
		<div id="main">
			<header id="header" class="fixed-top">
				<nav class="nav-menu">
					<ul>
						<li class="navbar-toggler third-button" type="button" onclick="toggleNav()">
							<div class="animated-icon3" id="toggler">
								<span></span><span></span><span></span>
							</div>
						</li>
						<!-- <li><img src="assets/img/alacrity.png" style="height:80px;"></li> -->
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="products.php">Products</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					
					<ul class="account">
						<li class="drop-down">
							<a href="">Hello. Sign In</a>
							<ul class="js-signin-modal-trigger">
								<li>
									<a
										class="cd-main-nav__item cd-main-nav__item--signin"
										href="#0"
										data-signin="login"
										>Sign in</a
									>
								</li>
								<li><a href="#">Account</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</header>
	

			<!-- Side Menu -->
			<div id="sideMenu" class="sidebar">
				<a href="index.php">Home</a>
				<a href="products.php">Products</a>
				<a href="about.php">About</a>
				<a href="contact.php">Contact</a>
			</div>



			<!-- Signin modal -->
			<div class="cd-signin-modal js-signin-modal">
				<!-- this is the entire modal form, including the background -->
				<div class="cd-signin-modal__container">
					<!-- this is the container wrapper -->
					<ul
						class="cd-signin-modal__switcher js-signin-modal-switcher js-signin-modal-trigger"
					>
						<li>
							<a href="#0" data-signin="login" data-type="login">Sign in</a>
						</li>
						<li>
							<a href="#0" data-signin="signup" data-type="signup"
								>New account</a
							>
						</li>
					</ul>

					<div class="cd-signin-modal__block js-signin-modal-block" data-type="login">
						<!-- log in form -->
						<form class="cd-signin-modal__form">
							<p class="cd-signin-modal__fieldset">
								<label
									class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace"
									for="signin-email"
									>E-mail</label
								>
								<input
									class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
									id="signin-email"
									type="email"
									placeholder="E-mail"
								/>
								<span class="cd-signin-modal__error">Error message here!</span>
							</p>

							<p class="cd-signin-modal__fieldset">
								<label
									class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace"
									for="signin-password"
									>Password</label
								>
								<input
									class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
									id="signin-password"
									type="text"
									placeholder="Password"
								/>
								<a
									href="#0"
									class="cd-signin-modal__hide-password js-hide-password"
									>Hide</a
								>
								<span class="cd-signin-modal__error">Error message here!</span>
							</p>

							<!-- <p class="cd-signin-modal__fieldset">
                    <input type="checkbox" id="remember-me" checked class="cd-signin-modal__input ">
                    <label for="remember-me">Remember me</label>
                </p> -->

							<p class="cd-signin-modal__fieldset">
								<input
									class="cd-signin-modal__input cd-signin-modal__input--full-width"
									type="submit"
									value="Login"
								/>
							</p>
						</form>

						<p class="cd-signin-modal__bottom-message js-signin-modal-trigger">
							<a href="#0" data-signin="reset">Forgot your password?</a>
						</p>
					</div>
					<!-- cd-signin-modal__block -->

					<div
						class="cd-signin-modal__block js-signin-modal-block"
						data-type="signup"
					>
						<!-- sign up form -->
						<form class="cd-signin-modal__form">
							<p class="cd-signin-modal__fieldset">
								<label
									class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace"
									for="signup-username"
									>Username</label
								>
								<input
									class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
									id="signup-username"
									type="text"
									placeholder="Username"
								/>
								<span class="cd-signin-modal__error">Error message here!</span>
							</p>

							<p class="cd-signin-modal__fieldset">
								<label
									class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace"
									for="signup-email"
									>E-mail</label
								>
								<input
									class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
									id="signup-email"
									type="email"
									placeholder="E-mail"
								/>
								<span class="cd-signin-modal__error">Error message here!</span>
							</p>

							<p class="cd-signin-modal__fieldset">
								<label
									class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace"
									for="signup-password"
									>Password</label
								>
								<input
									class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
									id="signup-password"
									type="text"
									placeholder="Password"
								/>
								<a
									href="#0"
									class="cd-signin-modal__hide-password js-hide-password"
									>Hide</a
								>
								<span class="cd-signin-modal__error">Error message here!</span>
							</p>

							<p class="cd-signin-modal__fieldset">
								<input
									type="checkbox"
									id="accept-terms"
									class="cd-signin-modal__input"
								/>
								<label for="accept-terms"
									>I agree to the <a href="#0">Terms</a></label
								>
							</p>

							<p class="cd-signin-modal__fieldset">
								<input
									class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding"
									type="submit"
									value="Create account"
								/>
							</p>
						</form>
					</div>
					<!-- cd-signin-modal__block -->

					<div
						class="cd-signin-modal__block js-signin-modal-block"
						data-type="reset"
					>
						<!-- reset password form -->
						<p class="cd-signin-modal__message">
							Lost your password? Please enter your email address. You will
							receive a link to create a new password.
						</p>

						<form class="cd-signin-modal__form">
							<p class="cd-signin-modal__fieldset">
								<label
									class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace"
									for="reset-email"
									>E-mail</label
								>
								<input
									class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border"
									id="reset-email"
									type="email"
									placeholder="E-mail"
								/>
								<span class="cd-signin-modal__error">Error message here!</span>
							</p>

							<p class="cd-signin-modal__fieldset">
								<input
									class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding"
									type="submit"
									value="Reset password"
								/>
							</p>
						</form>

						<p class="cd-signin-modal__bottom-message js-signin-modal-trigger">
							<a href="#0" data-signin="login">Back to log-in</a>
						</p>
					</div>
					<!-- cd-signin-modal__block -->
					<a href="#0" class="cd-signin-modal__close js-close">Close</a>
				</div>
				<!-- cd-signin-modal__container -->
			</div>




			<!-- Carousal -->
			<div id="home" class="slider-area">
				<div class="bend niceties preview-2">
					<div id="ensign-nivoslider" class="slides">
						<img
							src="assets/img/hydraulics.jpg"
							alt="Earthmoving Hydraulics"
							title="#slider-direction-1"
						/>
						<img
							src="assets/img/automation.jpg"
							alt="Automation"
							title="#slider-direction-2"
						/>
						<img
							src="assets/img/improvise.jpg"
							alt="Constant Improvement"
							title="#slider-direction-3"
						/>
						<img
							src="assets/img/makeinindia.jpg"
							alt="Make In India"
							title="#slider-direction-4"
						/>
					</div>

					<div id="slider-direction-1" class="slider-direction slider-one">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="slider-content">
										<div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
											<h1 class="title2">
												Manufacturing and refurbishing of hydraulic products
											</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="slider-direction-2" class="slider-direction slider-two">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="slider-content text-center">
										<div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
											<h1 class="title2">
												Automation to look ,feel and work to customer requirement.
											</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="slider-direction-3" class="slider-direction slider-two">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="slider-content">
										<div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
											<h1 class="title2">
												Constantly improvising our product to customer needs
											</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div id="slider-direction-4" class="slider-direction slider-two">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="slider-content">
										<div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
											<h1 class="title2">
												MAKE IN INDIA
											</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			<main id="content">
			

				<!-- Services Offered -->
				<div id="services" class="services-area area-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="section-headline services-head text-center">
									<h2>Our Services</h2>
								</div>
							</div>
						</div>
						
						<div class="row text-center">
							<div class="col-md-6">
									<div class="services-details">
										<div class="single-services">
											<a class="services-icon" href="products.php">
												<img src="assets/img/product.png" width="60px" height="60px">
											</a>
											<h4>Products</h4>
											<p>
												We manufacture wide range of hydraulic cylinders.
											</p>
										</div>
									</div>
							</div>

							<div class="col-md-6">
									<div class="services-details">
										<div class="single-services">
											<a class="services-icon" href="products.php">
                                                <img src="assets/img/refurbish.png" width="60px" height="60px">
											</a>
											<h4>Refurbishment</h4>
											<p>
												We recondishion hydraulic cylinders. 
											</p>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>


				<!-- Top products Slick Carousal -->
				<div id="about" class="about-area area-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="section-headline text-center">
									<h2>Top Products</h2>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row slider slider-nav">

                            <?php
								$product_type="Earthmoving Hydraulic Cylinders";
                                $query = mysqli_query($dbconnect, "SELECT product_id, product_name, product_image, product_category FROM products where product_category= '$product_type' ")
                                or die (mysqli_error($dbconnect));

                                while ($row = mysqli_fetch_array($query)) {
                            ?>

                            <div class="col-lg-4 col-md-6 portfolio-item">
                                <div class="portfolio-wrap">
									<a href="product_description.php?id=<?php echo $row["product_name"]; ?>">
										<figure>
											<img src="admin/<?php echo $row["product_image"]; ?>" style=" height: 245px; width: 350px;" alt="Hydraulic cylinders">
										</figure>
										<div class="portfolio-info">
											<h4><?php echo $row["product_name"]; ?></h4>
											<p><?php echo $row["product_category"]; ?></p>
										</div>
									</a>
                                </div>
                            </div>
                
                        	<?php } ?>

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
