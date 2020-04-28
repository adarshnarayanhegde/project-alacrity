
<?php

$id=$_GET["id"];

$servername     =       "localhost";
$username       =       "admin";
$password       =       "admin";
$dbname         =       "alacrity";


$dbconnect=mysqli_connect($servername,$username,$password,$dbname);
if ($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
}


$res = mysqli_query($dbconnect, "SELECT product_image FROM products WHERE product_id=$id")
                  or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($res)) {
    $img=$row["product_image"];
}

unlink($img);

$query = mysqli_query($dbconnect, "DELETE FROM products WHERE product_id=$id")
or die (mysqli_error($dbconnect));

?>

<script type="text/javascript">
    window.location="delete-product.php";
</script>