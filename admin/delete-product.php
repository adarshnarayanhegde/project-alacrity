<!-- Database Connectivity -->
<?php
	require_once "../config.php";
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

	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});

</script>


<body> 
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
							<li><a class="cd-main-nav__item cd-main-nav__item--signin" href="#0" data-signin="login">Sign in</a></li>
							<li><a href="#">Account</a></li>
						</ul>
					</li>
				</ul>
			</nav>
  		</header>

  
	<div id="sideMenu" class="sidebar">
		<div class="menuContainer">
			<a href="admin.php">Orders</a>
			<a href="contacts.php">Contacts</a>
			<a href="add-product.php">Add Products</a>
			<a class="current" href="#">Delete Products</a>
		</div>
	</div>


	<main id="content">
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
                        <th>Id</th>
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
				<tbody>
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
				</tbody>  				
            </table>
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