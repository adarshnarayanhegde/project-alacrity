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
}
</script>

<!-- Page specific style -->
<style>
#contact .php-product-form {
  box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
  padding: 30px;
  width: 900px;
  height: 500px;
	align-self: center;
}
</style>



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
			<a class="current" href="#">Add Products</a>
			<a href="delete-product.php">Delete Products</a>
		</div>
	</div>


  	<main id="content">
    	<div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
						<h2>Add <b>Products</b></h2>
					</div>
                </div>
            </div>  
			
			<section id="contact" class="section-bg wow fadeInUp">
          		<div class="container">
					<div class="form">
						<form name="form1" action="" method="post" enctype="multipart/form-data" class="php-product-form">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Product Name:</label>
									<input type="text" name="pnm" class="form-control" style="border-radius:5px;" id="name" placeholder="Product Name" />
								</div>
							
								<div class="form-group col-md-6">
              						<label>Product Category:</label>
									<select class="form-control" name="pcat" style="font-size:13px" required>
									<?php
									$query = mysqli_query($dbconnect, "SELECT category_name FROM category") 
									or die (mysqli_error($dbconnect));
									while ($row = mysqli_fetch_array($query)) {
									?>
										<option value="<?php echo $row["category_name"]; ?>" ><?php echo $row["category_name"]; ?></option>
                  					<?php } ?>
									</select>
								</div>
								
								<div class="form-group col-md-12">
									<label>Product Type:</label><br>
									<input type="radio" id="pro" name="ptype" value="2" checked>
									<label for="New product">New product</label> &nbsp &nbsp &nbsp &nbsp
									<input type="radio" id="pro" name="ptype" value="1">
									<label for="New category">New category</label>
              					</div>
								
								<div class="form-group col-md-12">
									<label>Product Image:</label>
									<input type="file" class="form-control" name="pimg" placeholder="Product Image" style="border-radius:5px; height:50px;"></div>
             					</div>

								<div class="form-group col-md-12">
									<label>Description:</label>
									<textarea class="form-control" name="pdesc" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Description" style="border-radius:5px;"></textarea>
									<div class="validate"></div>
								</div>
                       
                          		<div class="text-center"><button type="submit" name="submit1" value="upload" style="border-radius:5px;">Submit</button></div>
							</form>
						
							<?php
								if(isset($_POST["submit1"])){
									$v1=rand(1111,9999);
									$v2=rand(1111,9999);
									$v3=$v1.$v2;
									$v3=md5($v3);

									$fnm=$_FILES["pimg"]["name"];
									$dst="./product_images/".$v3.$fnm;
									$dst1="product_images/".$v3.$fnm;
									move_uploaded_file($_FILES["pimg"]["tmp_name"], $dst);

									$query = mysqli_query($dbconnect, "INSERT INTO products(product_name,product_image,product_category,product_category_id) VALUES ('$_POST[pnm]','$dst1','$_POST[pcat]','$_POST[ptype]');")
										or die (mysqli_error($dbconnect));
								}
							?>

                      	</div>
                    </div>
                </section>
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