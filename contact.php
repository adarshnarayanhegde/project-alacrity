<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Alacrity</title>
	<meta content="" name="descriptison">
	<meta content="" name="keywords">

	<!-- Linking necessary files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="assets/vendor/slick/slick.css" rel="stylesheet">
	<link href="assets/vendor/slick/slick-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="assets/css/style.css" rel="stylesheet" />

</head>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>


<!-- Page specific scripts -->
<script>

	$(document).ready(function() {
		$('#submit').click(function(e){
		e.preventDefault();

		var name = $("#name").val();
		var phonenumber =$("#phonenumber").val();
		var email = $("#email").val();
		var description = $("#description").val();
	

		$.ajax({
			type: "POST",
			url: "send_email_contact.php",
			dataType: "json",
			data : {name: name, phonenumber: phonenumber, email: email,  description: description},
			success : function(data){

				if (data.code == "200"){

					var element = document.getElementById("display");
					element.classList.remove("alert-danger");
					element.classList.add("alert-success");
					$("#display").html("<ul>"+"Thanks for placing the order..We will contact you soon"+"</ul>");
					$("#display").css("display","block");
					
					
				} else {
								
					var element = document.getElementById("display");
					element.classList.remove("alert-success");
					element.classList.add("alert-danger");
					$("#display").html("<ul>"+data.msg+"</ul>");
					$("#display").css("display","block");

				}
			}
		});
		});
	});

	$(function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
				scrollTop: target.offset().top
				}, 750);
				return false;
			}
			}
		});
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
				&nbsp;&nbsp;
				<li ><a href="index.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<li ><a href="about.php">About</a></li>
				<li class="active"><a href="contact.php">Contact</a></li>
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

  
	<!-- Side menu -->
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


			<!-- Contact Info -->
            <div id="contact" class="contact-area">
				<div class="contact-inner area-padding">
					<div class="contact-overly"></div>
						<div class="container ">
							<div class="row">
								<div class="col-md-12">
									<div class="section-headline text-center">
										<h2>Contact us</h2>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-4 ">
								<div class="contact-icon text-center">
									<div class="single-icon">
										<i class="fa fa-mobile"></i>
										<p>
											Call: +91 9845316364<br>
										</p>
									</div>
								</div>
                       	 	</div>
					   
								
                        <div class="col-md-4 ">
                        	<div class="contact-icon text-center">
                            	<div class="single-icon">
									<i class="fa fa-envelope-o"></i>
									<p>
										Email: ravikiran_kgf@gmail.com<br>
									</p>
                           		 </div>
                        	</div>
                        </div>
					   
                        <div class="col-md-4 ">
							<div class="contact-icon text-center">
								<div class="single-icon">
									<i class="fa fa-map-marker"></i>
									<p>
										Location: # 657, Doddanna Indl Area,<br>
										<span>Viswaneedam Post,Banagalore - 560091</span>
									</p>
								</div>
								</div>
							</div>
                   		</div>




		<!-- Contact form -->
        <div class="row">
           	<section class="form">
					<section id="contact" class="section-bg wow fadeInUp">
						<div class="container">
							<div class="form">
								<form  method="post"  class="php-product-form" enctype="multipart/form-data">
									<div class="form-row">
										<div class="form-group col-md-6">
											<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
											<div class="validate"></div>
										</div>

										<div class="form-group col-md-6">
											<input type="tel" class="form-control" name="phonenumber" id="phonenumber" placeholder="Your Phone number" data-rule="minlen:10" data-msg="Please enter a valid phonenumber" />
											<div class="validate"></div>
										</div>
									</div>

									<div class="form-group">
										<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
										<div class="validate"></div>
									</div>

									<div class="form-group">
										<textarea class="form-control" id="description" name="description" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
										<div class="validate"></div>
									</div>

									<div class="mb-3">
										<div class="loading">Loading</div>
										<div class="error-message"></div>
										<div class="sent-message">Your message has been sent. Thank you!</div>
									</div> 
									<br>
									<div class="text-center"><button id="submit" type="submit" name="submit">Contact</button></div>
										<div id="display" class="alert text-center display-error" style="display: block">
									</div>
								</form>
							</div>
						</div>
					</section>
				</section>
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