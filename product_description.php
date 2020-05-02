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
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/slick/slick.css" rel="stylesheet">
  <link href="assets/vendor/slick/slick-theme.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>

$(document).ready(function() {


$('#submit').click(function(e){
  e.preventDefault();


  var name = $("#name").val();
  var phonenumber =$("#phonenumber").val();
  var email = $("#email").val();
  var service = $("#service").val();
  var productname=$("#productname").val();
  var description = $("#description").val();
  

  $.ajax({
      type: "POST",
      url: "send_email.php",
      dataType: "json",
      data : {name: name, phonenumber: phonenumber, email: email, service: service, productname: productname, description: description},
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

<style>

#contact {
    padding: 30px;
}

#contact .contact-info {
  margin-bottom: 20px;
  text-align: center;
}

#contact .contact-info i {
  font-size: 48px;
  display: inline-block;
  margin-bottom: 10px;
  color: #18d26e;
}

#contact .contact-info address, #contact .contact-info p {
  margin-bottom: 0;
  color: #000;
}

#contact .contact-info h3 {
  font-size: 18px;
  margin-bottom: 15px;
  font-weight: bold;
  text-transform: uppercase;
  color: #999;
}

#contact .contact-info a {
  color: #000;
}

#contact .contact-info a:hover {
  color: #18d26e;
}

#contact .contact-address, #contact .contact-phone, #contact .contact-email {
  margin-bottom: 20px;
}

@media (min-width: 768px) {
  #contact .contact-address, #contact .contact-phone, #contact .contact-email {
    padding: 20px 0;
  }
}

@media (min-width: 768px) {
  #contact .contact-phone {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
  }
}

#contact .php-product-form {
  box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
  padding: 30px;
  width: 1050px;
  height: 400px;
	align-self: center;
	margin-left: 8%;
}

#contact .php-product-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

#contact .php-product-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

#contact .php-product-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

#contact .php-product-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

#contact .php-product-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

#contact .php-product-form input, #contact .php-product-form textarea {
  padding: 10px 14px;
  border-radius: 0;
  box-shadow: none;
  font-size: 15px;
}

#contact .php-product-form input::focus, #contact .php-product-form textarea::focus {
  background-color: #18d26e;
}

#contact .php-product-form button[type="submit"] {
  background: #18d26e;
  border: 0;
  padding: 10px 30px;
  color: #fff;
  transition: 0.4s;
  cursor: pointer;
}

#contact .php-product-form button[type="submit"]:hover {
  background: #13a456;
}

.success{
  color: #18d26e;
  text-align: center;
  font-weight: bold;
  font-size:14px;
  margin-top: 10px;
}

</style>




<?php

  $servername     =       "localhost";
  $username       =       "admin";
  $password       =       "admin";
  $dbname         =       "alacrity";

  $product_type=$_GET["id"];
  

  
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

      <div class="logo mr-auto">
        
      </div>
      
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
      </nav><!-- .nav-menu -->

    <!-- </div> -->
  </header><!-- End Header -->

  
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


            








        <!-- ======= Portfolio Section ======= -->
        <div id="about" class="about-area area-padding">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="section-headline text-center">
                    <h2><?php echo $product_type?></h2>
                  </div>
                </div>
              </div>  

              
              <div class="row portfolio-container">


                <?php
                 
                  $query = mysqli_query($dbconnect, "SELECT product_id, product_name, product_image, product_category,product_category_id FROM products where product_category_id=2 and product_category='$product_type'")
                  or die (mysqli_error($dbconnect));

                  while ($row = mysqli_fetch_array($query)) {
                ?>

                    
                <div class="col-lg-4 col-md-6 portfolio-item">
                  <div class="portfolio-wrap">
                  <a href=#blank>
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


                <?php
                  
                  }

                ?>
      
              </div>
            
            </div>

           
            <section id="blank"><br><br><br><br></section>
            <div class="row">
                        <div class="col-md-12">
                        <div class="section-headline text-center">
                            <h2>Order</h2>
                        </div>
                        </div>
             </div>
            <section id="contact" class="section-bg wow fadeInUp">
                    <div class="container">
                      <div class="form">
                        <form  method="post"  action="send_email.php" class="php-product-form" >
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"/>
                              <div class="validate"></div>
                            </div>
                          
                            <div class="form-group col-md-6">
                              <input type="tel" class="form-control" name="phonenumber" id="phonenumber" placeholder="Your Phone number"  />
                              <div class="validate"></div>
                            </div>
                          </div>
                       
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  />
                            <div class="validate"></div>
                          </div>
                      
                          <div class="form-row">
                            <div class="form-group col-md-6">
                            <input type="radio" id="service" name="service" value="New item" checked>
                            <label for="male">New Item</label> &nbsp &nbsp &nbsp &nbsp
                            <input type="radio" id="service" name="service" value="Refurbishment">
                            <label for="male">Refurbishment</label>
                              <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                             <select class="form-control" name="productname" id="productname">

                             <?php
                 
                                  $query = mysqli_query($dbconnect, "SELECT product_id, product_name, product_image, product_category FROM products where product_category= '$product_type' ")
                                  or die (mysqli_error($dbconnect));

                                  while ($row = mysqli_fetch_array($query)) {
                                ?>
                               <option ><?php echo $row["product_name"]; ?></option>

                                  <?php } ?>
                                <option>Other</option>
                             </select>

                              <div class="validate"></div>
                            </div>
                          </div>  
                          <div class="form-group">
                            <textarea class="form-control" id="description" name="description" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Description"></textarea>
                            <div class="validate"></div>
                          </div>
                           <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div> 
                          <br>
                          <div class="text-center"><button id="submit" type="submit" name="submit">Send Message</button></div>
                          <div id="display" class="alert text-center display-error" style="display: block">
                          </div>
                        </form>

                        

                                                    
                        
                    
                      </div>
              
                    </div>
                  </section>
        </div>



    

  </main><!-- End #main -->

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
  <!-- </div>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
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