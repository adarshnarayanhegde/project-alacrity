
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

<div class="product_form">
    <form name="form1" action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td> Product Name:</td>
                <td><input type="text" name="pnm"></td>
            </tr>
            <tr>
                <td> Product Image:</td>
                <td><input type="file" name="pimg"></td>
            </tr>
            <tr>
                <td> Product Category:</td>
                <td><input type="text" name="pcat"></td>
            </tr>
            <tr>
                <td> Product Description:</td>
                <td><input type="text" name="pdesc"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit1" value="upload"></td>
            </tr>
        </table>

    </form>
</div>
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

        $query = mysqli_query($dbconnect, "INSERT INTO products(product_name,product_image,product_category,product_desc) VALUES ('$_POST[pnm]','$dst1','$_POST[pcat]','$_POST[pdesc]')")
            or die (mysqli_error($dbconnect));
    }
?>
