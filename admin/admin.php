<!-- Database Connectivity -->
<?php
	require_once "../config.php";
?>

<!-- Pagination -->
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

  	<!-- Linking necessary files -->
  	<link href="../assets/img/favicon.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet"/>
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
	<link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/font-awesome/css/fontawesome.css" rel="stylesheet"/>
    <link href="../assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet"/>
    <link href="../assets/vendor/slick/slick.css" rel="stylesheet" />
    <link href="../assets/vendor/slick/slick-theme.css" rel="stylesheet" />
    <link href="../assets/vendor/font-awesome/css/brands.css" rel="stylesheet" />
    <link href="../assets/vendor/font-awesome/css/solid.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />

</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



<!-- Page specific scripts -->
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


<body onload="showCustomer(<?php echo $page; ?>);"> 
  
	<div id="main">
		<header id="header" class="fixed-top">
			<nav class="nav-menu d-none d-lg-block">
				<ul>
					<li class="navbar-toggler third-button" type="button" onclick="toggleNav()">
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
							<li><a class="cd-main-nav__item cd-main-nav__item--signin" href="#0" data-signin="login">Logout</a></li>
							<li><a href="#">Account</a></li>
						</ul>
					</li>
				</ul>
			</nav>
	</header>

  
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
						<th>Ref #</th>
						<th>Name</th>
						<th>Phone Number</th>
						<th>Email Id</th>						
						<th>Service</th>						
						<th>Product</th>
						<th>Description</th>
					</tr>
				</thead>
				<!-- Contents will be inserted here -->
				<tbody id="txtHint"></tbody>		
			</table>


			<div class="page-anchors">
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
  	</main>


  	<!-- Footer -->
	<?php
		include "../footer.php";
	?>

	<!-- Required Scripts -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/vendor/wow/wow.min.js"></script>
	<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="../assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
	<script src="../assets/vendor/slick/slick.min.js"></script>
	<script src="../assets/js/main.js"></script>

</body>
</html>