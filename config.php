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