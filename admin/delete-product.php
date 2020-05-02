




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alacrity</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/font-awesome/css/fontawesome.min.css" rel="stylesheet">
  <link href="../assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/slick/slick.css" rel="stylesheet">
  <link href="../assets/vendor/slick/slick-theme.css" rel="stylesheet">
  <link href="../assets/vendor/font-awesome/css/brands.css" rel="stylesheet">
  <link href="../assets/vendor/font-awesome/css/solid.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
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

<style>


</style>



<?php

  $servername     =       "localhost";
  $username       =       "admin";
  $password       =       "admin";
  $dbname         =       "alacrity";
  

  
  $dbconnect=mysqli_connect($servername,$username,$password,$dbname);
  if ($dbconnect->connect_error) {
      die("Database connection failed: " . $dbconnect->connect_error);
  }
?>



<script type="text/javascript">


$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});

function showCustomer() {
  var xhttp;    
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getcustomer.php", true);
  xhttp.send();
}
</script>


<body data-spy="scroll" data-target="#navbar-example"> 
  
  <!-- <div class="wrapper"> -->
  <!-- ======= Header ======= -->
  <div id="main">
  <header id="header" class="fixed-top">
    <!-- <div class="container d-flex"> -->

      <div class="logo mr-auto">
        
      </div>
      
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
            <li class="active"><a href="admin.php">Admin</a></li>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../products.php">Products</a></li>
          <li><a href="../about.php">About</a></li>
          <li><a href="../contact.php">Contact</a></li>
        </ul>
        <ul style="float: right;">
          <li class="drop-down"><a href="">Hello. Sign In</a>
              <ul class="js-signin-modal-trigger">
                <li><a class="cd-main-nav__item cd-main-nav__item--signin" href="#0" data-signin="login">Sign in</a></li>
                <li><a href="#">Account</a></li>
              </ul>
            </li>
        </ul>
      </nav><!-- .nav-menu -->

    <!-- </div> -->
  </header><!-- End Header -->

  
  <div id="sideMenu" class="sidebar">
  <div class="menuContainer">
    <a href="admin.php">Orders</a>
    <a href="contacts.php">Contacts</a>
    <a href="add-product.php">Add Products</a>
	<a class="current" href="#">Delete Products</a>
 </div>
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


            
				<div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
						<h2>Delete <b>Products</b></h2>
					</div>
                </div>
            </div>

	

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Product Category</th>
                        <th>Delete</th>						
                    </tr>
				</thead>
				
                
                <?php
                  $query = mysqli_query($dbconnect, "SELECT product_id, product_name, product_image, product_category FROM products")
                  or die (mysqli_error($dbconnect));

                  while ($row = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $row["product_id"]; ?></td>
                        <td><?php echo $row["product_name"]; ?></td>
                        <td><img src="<?php echo $row["product_image"]; ?>" class="img-fluid" alt="" height="100" width="150"></td>
                        <td><?php echo $row["product_category"]; ?></td>
                        <td><a class="btn btn-primary" href="delete.php?id=<?php echo $row["product_id"]; ?>"><i class="fa fa-trash"></i></a></td>
                    </tr>
                <?php
                  }
                ?>
                				
            </table>


    

  </main><!-- End #main -->

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
  </div>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/appear/jquery.appear.js"></script>
  <script src="../assets/vendor/knob/jquery.knob.js"></script>
  <script src="../assets/vendor/parallax/parallax.js"></script>
  <script src="../assets/vendor/wow/wow.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/slick/slick.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
<!-- </div> -->
</body>

</html>