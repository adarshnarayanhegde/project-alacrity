<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />

		<title>Alacrity</title>
		<meta content="" name="descriptison" />
		<meta content="" name="keywords" />

		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon" />
		<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

		<!-- Google Fonts -->
		<link
			href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
			rel="stylesheet"
		/>

		<!-- Vendor CSS Files -->
		<link
			href="assets/vendor/bootstrap/css/bootstrap.min.css"
			rel="stylesheet"
		/>
		<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
		<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
		<link
			href="assets/vendor/font-awesome/css/fontawesome.css"
			rel="stylesheet"
		/>
		<link
			href="assets/vendor/nivo-slider/css/nivo-slider.css"
			rel="stylesheet"
		/>
		<link
			href="assets/vendor/owl.carousel/assets/owl.carousel.min.css"
			rel="stylesheet"
		/>
		<link href="assets/vendor/venobox/venobox.css" rel="stylesheet" />
		<link href="assets/vendor/slick/slick.css" rel="stylesheet" />
		<link href="assets/vendor/slick/slick-theme.css" rel="stylesheet" />
		<link href="assets/vendor/font-awesome/css/brands.css" rel="stylesheet" />
		<link href="assets/vendor/font-awesome/css/solid.css" rel="stylesheet" />
		<!-- Template Main CSS File -->
		<link href="assets/css/style.css" rel="stylesheet" />
    </head>
    

    

	<?php
        $servername     =       "localhost";
        $username       =       "admin";
        $password       =       "admin";
        $dbname         =       "alacrity";

    $product_type="Earthmoving Hydraulic Cylinders";
    $dbconnect=mysqli_connect($servername,$username,$password,$dbname);
    if ($dbconnect->connect_error) {
        die("Database connection failed: " . $dbconnect->connect_error);
    }
    ?>

	<body data-spy="scroll" data-target="#navbar-example">
		<!-- <div class="wrapper"> -->
		<!-- ======= Header ======= -->
		<div id="main">
			<header id="header" class="fixed-top">
				<!-- <div class="container d-flex"> -->

				<div class="logo mr-auto"></div>

				<nav class="nav-menu d-none d-lg-block">
				
					<ul>
					 
						<li
							class="navbar-toggler third-button"
							type="button"
							onclick="toggleNav()"
						>
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
				<!-- .nav-menu -->

				<!-- </div> -->
			</header>
			<!-- End Header -->

			<div id="sideMenu" class="sidebar">
				<a href="index.php">Home</a>
				<a href="about.php">About</a>
				<a href="products.php">Products</a>
				<a href="contact.php">Contact</a>
			</div>

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

					<div
						class="cd-signin-modal__block js-signin-modal-block"
						data-type="login"
					>
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
			<!-- cd-signin-modal -->

			<!-- ======= Slider Section ======= -->
			<div id="home" class="slider-area">
				<div class="bend niceties preview-2">
					<div id="ensign-nivoslider" class="slides">
						<img
							src="assets/img/hydraulics.jpg"
							alt=""
							title="#slider-direction-1"
						/>
						<img
							src="assets/img/automation.jpg"
							alt=""
							title="#slider-direction-2"
						/>
						<img
							src="assets/img/improvise.jpg"
							alt=""
							title="#slider-direction-3"
						/>
						<img
							src="assets/img/makeinindia.jpg"
							alt=""
							title="#slider-direction-4"
						/>
					</div>

					<!-- direction 1 -->
					<div id="slider-direction-1" class="slider-direction slider-one">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="slider-content">
										<!-- layer 1 -->
										<!-- <div
											class="layer-1-1 hidden-xs wow slideInDown"
											data-wow-duration="2s"
											data-wow-delay=".2s"
										>
											<h2 class="title1">Manufacturing and refurbishing of hydraulic </h2>
										</div> -->
										<!-- layer 2 -->
										<div
											class="layer-1-2 wow slideInUp"
											data-wow-duration="2s"
											data-wow-delay=".1s"
										>
											<h1 class="title2">
											Manufacturing and refurbishing of hydraulic products
											</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- direction 2 -->
					<div id="slider-direction-2" class="slider-direction slider-two">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="slider-content text-center">
										<!-- layer 1 -->
										<!-- <div
											class="layer-1-1 hidden-xs wow slideInUp"
											data-wow-duration="2s"
											data-wow-delay=".2s"
										>
											<h2 class="title1">The Best Business Information</h2>
										</div> -->
										<!-- layer 2 -->
										<div
											class="layer-1-2 wow slideInUp"
											data-wow-duration="2s"
											data-wow-delay=".1s"
										>
											<h1 class="title2">
											Automation to look ,feel and work to customer requirement.
											
											</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- direction 3 -->
					<div id="slider-direction-3" class="slider-direction slider-two">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="slider-content">
										<!-- layer 1 -->
										<!-- <div
											class="layer-1-1 hidden-xs wow slideInUp"
											data-wow-duration="2s"
											data-wow-delay=".2s"
										>
											<h2 class="title1">The Best business Information</h2>
										</div> -->
										<!-- layer 2 -->
										<div
											class="layer-1-2 wow slideInUp"
											data-wow-duration="2s"
											data-wow-delay=".1s"
										>
											<h1 class="title2">
											Constantly improvising our product to customer needs
											</h1>
										</div>
									</div>
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
										<!-- layer 1 -->
										<!-- <div
											class="layer-1-1 hidden-xs wow slideInUp"
											data-wow-duration="2s"
											data-wow-delay=".2s"
										>
											<h2 class="title1">The Best business Information</h2>
										</div> -->
										<!-- layer 2 -->
										<div
											class="layer-1-2 wow slideInUp"
											data-wow-duration="2s"
											data-wow-delay=".1s"
										>
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
			<!-- End Slider -->

			<main id="content-section">
				<!-- ======= About Section ======= -->
			

				<!-- ======= Services Section ======= -->
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
							<!-- Start Left services -->
							<div class="col-md-6">
								<div class="about-move">
									<div class="services-details">
										<div class="single-services">
											<a class="services-icon" href="products.php">
												<img src="assets/img/product.png" width="60px" height="60px">
											</a>
											<h4>Products</h4>
											<p>
												We manufacture range of hydraulic cylinders.
											</p>
										</div>
									</div>
									<!-- end about-details -->
								</div>
							</div>
							<div class="col-md-6">
								<div class="about-move">
									<div class="services-details">
										<div class="single-services">
											<a class="services-icon" href="products.php">
                                                <img src="assets/img/refurbish.png" width="60px" height="60px">
											</a>
											<h4>Refurbishment</h4>
											<p>
												We recondishion your hydraulic cylinders. 
											</p>
										</div>
									</div>
									<!-- end about-details -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Services Section -->

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
				<!-- End About Section -->
			</main>
			<!-- End #main -->

				<!-- ======= Footer ======= -->
				<footer>
				<div class="footer-area">
					<div class="container">
						<div class="row">
							<div class="col-md-1 col-sm-4 col-xs-12"></div>
							<!-- end single footer -->
							<div class="col-md-5 col-sm-4 col-xs-12">
								<div class="footer-content">
									<div class="footer-head">
										<h4>information</h4>

										<div class="footer-contacts">
											<p><span>Tel:</span> +91 9845316364</p>
											<p><span>Email:</span> ravikiran_kgf@gmail.com</p>
											<p>
												<span>Location</span>: # 657, Doddanna Indl Area,<br>
												Viswaneedam Post,Banagalore - 560091
											</p>
										</div>
									</div>
								</div>
							</div>
							<!-- end single footer -->
							<div class="col-md-5 col-sm-4 col-xs-12">
								<div class="footer-content">
									<div class="footer-head">
										<h4>Location</h4>
										<iframe
											src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62200.38086466774!2d77.49708886356055!3d13.002280825362835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3c535d7e79ed%3A0xb8e6f7e135cd3f4c!2sALACRITY!5e0!3m2!1sen!2sus!4v1588365304951!5m2!1sen!2sus"
											width="100%"
											height="200"
											frameborder="0"
											style="border: 0;"
											allowfullscreen
										></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		<!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
		<div id="preloader"></div> -->

		<!-- Vendor JS Files -->
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="assets/vendor/php-email-form/validate.js"></script>
		<script src="assets/vendor/appear/jquery.appear.js"></script>
		<script src="assets/vendor/knob/jquery.knob.js"></script>
		<script src="assets/vendor/parallax/parallax.js"></script>
		<script src="assets/vendor/wow/wow.min.js"></script>
		<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
		<script src="assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="assets/vendor/venobox/venobox.min.js"></script>
		<script src="assets/vendor/slick/slick.min.js"></script>

		<!-- Template Main JS File -->
		<script src="assets/js/main.js"></script>
		<!-- </div> -->
	</body>
</html>
