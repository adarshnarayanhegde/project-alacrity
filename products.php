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


<!-- Page specific scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
	$("document").ready(function() {
		setTimeout(function() {
			$('#portfolio-flters li:nth-child(1)').click();
		},10);
	});
</script>


<!-- Database Connectivity -->
<?php
	require_once "config.php";
?>


<body>
	<div id="main">
		<header id="header" class="fixed-top">
			<nav class="nav-menu d-none d-lg-block">
				<ul>
					<li class="navbar-toggler third-button" type="button" onclick="toggleNav()">
						<div class="animated-icon3" id="toggler"><span></span><span></span><span></span></div>
					</li>
					<li ><a href="index.php">Home</a></li>
					<li class="active"><a href="products.php">Products</a></li>
					<li><a href="about.php">About</a></li>
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

  	<!-- Side Menu -->
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



		<!-- Product Display -->
        <div id="about" class="about-area area-padding">
            <div class="container">
              
			  <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="section-headline text-center">
                    <h2>Our Products</h2>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <ul id="portfolio-flters">
                    <?php
						$query = mysqli_query($dbconnect, "SELECT category_name FROM category where category_id=1 order by category_view_id")
						or die (mysqli_error($dbconnect));
						while ($row = mysqli_fetch_array($query)) {
							$cat=str_replace(' ','',$row["category_name"]);
                      ?>
                        <li data-filter=".filter-<?php echo $cat; ?>" 
                        	class=<?php if ($row["category_name"] === "Hydraulic Cylinders") {echo "filter-active";} ?>
                        >
						<?php echo $row["category_name"]; ?></li>
                        
						<?php }?>
                  </ul>
                </div>
              </div>
              
            <div class="row portfolio-container">

				<?php
					$query = mysqli_query($dbconnect, "SELECT product_id, product_name, product_image, product_category,product_category_id FROM products where product_category_id=1")
					or die (mysqli_error($dbconnect));

					while ($row = mysqli_fetch_array($query)) {
					$cate=str_replace(' ','',$row["product_category"]);
				?>

					<div class="col-md-6 portfolio-item filter-<?php echo "$cate"; ?>  ">
						<div class="portfolio-wrap">
							<a href="product-description.php?id=<?php echo $row["product_name"]; ?>">
								<figure>
									<img src="admin/<?php echo $row["product_image"]; ?>" style="height: 255px; width: 540px; " alt="product image">
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