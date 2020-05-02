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


<?php 
     if (!isset($_GET['page'])) {
            $page = 1;
            // $_GET['page'] = 1;
          } else {
            $page = $_GET['page'];
          } 
          $results_per_page = 5;
          $query = mysqli_query($dbconnect, "SELECT * from order_details")
          or die (mysqli_error($dbconnect));

          $number_of_results = mysqli_num_rows($query);
          $number_of_pages = ceil($number_of_results/$results_per_page);

?>

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

<style>


</style>




<script type="text/javascript">

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


$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});

function showCustomer(str) {
  document.getElementById("test").innerHTML = "<b>Page " +str+ "<b> fof "+ <?php echo $number_of_pages; ?>;
  var xhttp;    
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getcustomer.php?q="+str, true);
  xhttp.send();
}

function showCustomername(name) {
  //var name = document.getElementById("cus_name").value;
  var xhttp;    
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getcustomer.php?name="+name, true);
  xhttp.send();
}	
</script>


<body data-spy="scroll" data-target="#navbar-example" onload="showCustomer(<?php echo $page; ?>);"> 
  
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
          <li class="active"><a href="#">Admin</a></li>
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <ul style="float: right;">
          <li class="drop-down"><a href="">Hello. Sign In</a>
              <ul class="js-signin-modal-trigger">
                <li><a class="cd-main-nav__item cd-main-nav__item--signin" href="#0" data-signin="login">Logout</a></li>
                <li><a href="#">Account</a></li>
              </ul>
            </li>
        </ul>
      </nav><!-- .nav-menu -->

    <!-- </div> -->
  </header><!-- End Header -->

  
  <div id="sideMenu" class="sidebar">
    <div class="menuContainer">
        <a class="current" href="#">Orders</a>
        <a href="contacts.php">Contacts</a>
        <a href="add-product.php">Add Products</a>
        <a href="delete-product.php">Delete Products</a>
    </div>
  </div>


  <main id="content">

            
  <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
						          <h2>Order <b>Details</b></h2>
					          </div>
                </div>
            </div>
			<div class="table-filter">
				<div class="row">
                    
            <div class="col-sm-12">
              <div class="filter-group">
                <label>Search</label>
                <input type="text" class="form-control" id="cus_name" placeholder="Order Reference">
                <button type="button" class="btn btn-primary" onclick="showCustomername(document.getElementById('cus_name').value)"><i class="fas fa-search" ></i></button>
						</div>
            </div>
      </div>
			</div>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Order Reference</th>
                        <th>Name</th>
						<th>Phone Number</th>
						<th>Email Id</th>						
                        <th>Service</th>						
						<th>Product</th>
            <th>Description</th>
                    </tr>
				</thead>
        <tbody id="txtHint"></tbody>
        
				
				
        </table>


			<div class="clearfix">
      <div class="hint-text" id="test"></div>                
      <ul class="pagination">

                <?php
                  for ($page=1;$page<=$number_of_pages;$page++) {
                    // echo $_GET['page'];
                ?>
                <li class="page-item <?php if ($page == $_GET['page']) {echo "active";} ?>">
                  <button class="page-link" onclick="showCustomer(<?php echo $page ?>)"> <?php echo $page ?></button></li>
              <?php } ?>
                </ul>
            </div>
        </div>



    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>e</span>Business</h2>
                </div>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> contact@example.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Location</h4>
                <!-- <div class="col-md-6 col-sm-6 col-xs-12"> -->
                  <!-- Start Map -->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                  <!-- End Map -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </footer><!-- End  Footer -->
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