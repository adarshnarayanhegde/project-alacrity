
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Products</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../assets/vendor/font-awesome/css/fontawesome.css" rel="stylesheet">
<link href="../assets/vendor/font-awesome/css/brands.css" rel="stylesheet">
<link href="../assets/vendor/font-awesome/css/solid.css" rel="stylesheet">

<style type="text/css">
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {

        background: #fff;
		padding: 20px 25px;
		height: 600px;
        margin: 30px auto;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-wrapper .btn {
		float: right;
		color: #333;
    	background-color: #fff;
		border-radius: 3px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-wrapper .btn:hover {
        color: #333;
		background: #f2f2f2;
	}
	.table-wrapper .btn.btn-primary {
		color: #fff;
		background: #03A9F4;
	}
	.table-wrapper .btn.btn-primary:hover {
		background: #03a3e7;
	}
	.table-title .btn {		
		font-size: 13px;
		border: none;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
	.table-title {
		color: #fff;
		background: #4b5366;		
		padding: 16px 25px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.show-entries select.form-control {        
        width: 60px;
		margin: 0 5px;
	}
	.table-filter .filter-group {
        float: right;
		margin-left: 15px;
    }
	.table-filter input, .table-filter select {
		height: 34px;
		border-radius: 3px;
		border-color: #ddd;
        box-shadow: none;
	}
	.table-filter {
		padding: 5px 0 15px;
		border-bottom: 1px solid #e9e9e9;
		margin-bottom: 5px;
	}
	.table-filter .btn {
		height: 34px;
	}
	.table-filter label {
		font-weight: normal;
		margin-left: 10px;
	}
	.table-filter select, .table-filter input {
		display: inline-block;
		margin-left: 5px;
	}
	.table-filter input {
		width: 200px;
		display: inline-block;
	}
	.filter-group select.form-control {
		width: 110px;
	}
	.filter-icon {
		float: right;
		margin-top: 7px;
	}
	.filter-icon i {
		font-size: 18px;
		opacity: 0.7;
	}
	/*.table {
	    table-layout: auto;
	    over-flow: break-word;
	}*/
	.td{
		
		word-break: break-all;
	}

    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 80px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.view {        
		width: 30px;
		height: 30px;
		color: #2196F3;
		border: 2px solid;
		border-radius: 30px;
		text-align: center;
    }
    table.table td a.view i {
        font-size: 22px;
		margin: 2px 0 0 1px;
    }   
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
	.status {
		font-size: 30px;
		margin: 2px 2px 0 0;
		display: inline-block;
		vertical-align: middle;
		line-height: 10px;
	}
    .text-success {
        color: #10c469;
    }
    .text-info {
        color: #62c9e8;
    }
    .text-warning {
        color: #FFC107;
    }
    .text-danger {
        color: #ff5b5b;
    }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
	}    
	
	.sticky-content {
	position: sticky;
	position: -webkit-sticky;
	top: 0;
	/* required */
	}




/* add product form */

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
  width: 800px;
  height: 450px;
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

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}



/* drop down */

 .drop-down ul {
  display: block;
  position: absolute;
  left: 0;
  top: calc(100% - 30px);
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  padding: 10px 0;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: ease all 0.3s;
}

 .drop-down:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

 .drop-down li {
  min-width: 180px;
  position: relative;
}

 .drop-down ul a {
  padding: 10px 20px;
  font-size: 14px;
  font-weight: 500;
  text-transform: none;
  color: #165a64;
}

 .drop-down ul a:hover,  .drop-down ul .active > a,  .drop-down ul li:hover > a {
  color: #3ec1d5;
}

 .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 5px;
}

 .drop-down .drop-down ul {
  top: 0;
  left: calc(100% - 30px);
}

 .drop-down .drop-down:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
}

 .drop-down .drop-down > a {
  padding-right: 35px;
}

 .drop-down .drop-down > a:after {
  content: "\eaa0";
  font-family: IcoFont;
  position: absolute;
  right: 15px;
}

@media (max-width: 1366px) {
   .drop-down .drop-down ul {
    left: -90%;
  }
   .drop-down .drop-down:hover > ul {
    left: -100%;
  }
   .drop-down .drop-down > a:after {
    content: "\ea9d";
  }
}

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
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
						<h2>Add <b>Products</b></h2>
					</div>
                </div>
            </div>  
			
			<section id="contact1" class="section-bg wow fadeInUp">
                    <div class="container" style="width: 900px; padding: 50px;">
                      <div class="form">
                        <form name="form1" action="" method="post" enctype="multipart/form-data" class="php-product-form">
                          <div class="form-row">
                            <div class="form-group col-md-6">
								Product Name:
                              <input type="text" name="pnm" class="form-control" style="border-radius:5px;" id="name" placeholder="Product Name" />
							</div>
							
							<div class="form-group col-md-6">
								Product Category:
								<select class="form-control" name="pcat" required>
                <?php
                $query = mysqli_query($dbconnect, "SELECT category_name FROM category")
                or die (mysqli_error($dbconnect));
                while ($row = mysqli_fetch_array($query)) {
                ?>
									<option value="<?php echo $row["category_name"]; ?>"><?php echo $row["category_name"]; ?></option>
                  <?php
                }
                ?>
								</select>
                </div>
							
							<div class="form-group col-md-12">
								Product Image:
								<input type="file" class="form-control" name="pimg" placeholder="Product Image" style="border-radius:5px;"></div>
                          	</div>

                          <div class="form-group col-md-12">
							  Description:
                            <textarea class="form-control" name="pdesc" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Description" style="border-radius:5px;"></textarea>
                            <div class="validate"></div>
                          </div>
                          <!-- <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div> -->
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

									$query = mysqli_query($dbconnect, "INSERT INTO products(product_name,product_image,product_category) VALUES ('$_POST[pnm]','$dst1','$_POST[pcat]');")
										or die (mysqli_error($dbconnect));
								}
							?>

                      </div>
                    </div>
                  </section>
        </div>
    </div>     
</body>
</html>                                		                            