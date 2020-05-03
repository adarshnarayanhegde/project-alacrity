<?php
    session_start();
?>
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


			<!-- Contact Info -->
            <div id="contact" class="contact-area">
				<div class="contact-inner area-padding">
					<div class="contact-overly"></div>
						<div class="container ">
							<div class="row">
								<div class="col-md-12">
									<div class="section-headline text-center">
										<h2>Alacrity Login</h2>
									</div>
								</div>
							</div>
							
							

		<!-- Contact form -->
        <div class="row">
           	<section class="form">
					<section id="contact" class="section-bg wow fadeInUp">
						<div class="container">
							<div class="form">
                                <a href="signup.php">Go</a>
								<form  method="post"  class="php-product-form" enctype="multipart/form-data">
									<div class="form-row">
										<div class="form-group col-md-12">
                                        <label>Username:</label>
                                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                                        <!-- <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" /> -->
											<div class="validate"></div>
										</div>
									</div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label>Username:</label>
                                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">										<div class="validate"></div>
                                        </div>
                                    </div>

									<br>
                                    <div class="text-center"><button id="submit" type="submit" name="submit">Login</button></div>
                                     <a href="#" id="forgot_pswd">Forgot password?</a>
										<div id="display" class="alert text-center display-error" style="display: block">
                                    </div>
                                    <div class="form-row">
                                        <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button>
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