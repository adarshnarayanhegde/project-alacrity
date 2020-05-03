<?php
session_start();
 //echo json_encode(['code'=>"404",'msg'=>$err]);
//Initialize the session
// $err="";
// echo json_encode(['code'=>"404",'msg'=>$err]);
$err="";
// Check if the user is already logged in, if yes then redirect him to welcome page

// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     echo json_encode(['code'=>"404",'msg'=>"already logged in"]);
//     //header("location: index.php");
//     exit;
// }

// Include config file
require_once "config.php";
//echo json_encode(['code'=>"100",'msg'=>$err]);
// Define variables and initialize with empty values
$username = $password = $name = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if(empty(trim($_POST["email1"]))){
        $username_err = "Please enter email.";
        $err.="Please enter email.";
    } else{
        $username = trim($_POST["email1"]);
    }

    //Check if password is empty
    if(empty(trim($_POST["password1"]))){
        $password_err = "Please enter your password.";
        $err .="Please enter your password.";
    } else{
        $password = trim($_POST["password1"]);
    }
    //echo json_encode(['code'=>"100",'msg'=>$err]);
    if(strlen($err)>0)
    {
        echo json_encode(['code'=>"404",'msg'=>$err]);
        exit;
    }
    // $username=$_POST['email1'];
    // $password=$_POST['password1'];
    // $username="chaturvedakash1@gmail.com";
    // $password="1234567";

    //echo json_encode(['code'=>"404",'msg'=>$err]);

    //Validate credentials
    if(empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $query = mysqli_query($dbconnect, "SELECT username, email, password FROM users WHERE email = '$username'")
                  or die (mysqli_error($dbconnect));

         if(mysqli_num_rows($query)>0)
         {      
            while ($row = mysqli_fetch_array($query)) {
                $hashed_password=$row["password"];
                $name=$row["username"];
            }
            if(password_verify($password, $hashed_password))   
            {
                            // Password is correct, so start a new session
                            
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["username"] = $username;     
                            $_SESSION["name"] = $name;
                            // echo $_SESSION["loggedin"];  
                            // echo $_SESSION["username"];                   
                            
                            // Redirect user to welcome page
                            //header("location: index.php");
 
                            echo json_encode(['code'=>"200"]);
                           
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                            $err.="The password you entered was not valid.";
                           
                        }
                    
                 }
                 else {
                     // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                    $err.="No account found with that username.";
                 }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
                $err.="Oops! Something went wrong. Please try again later.";
            }
            // Close statement

    // Close connection
    if(strlen($err)>0)
    {
        echo json_encode(['code'=>"404",'msg'=>$err]);
        exit;
    }
}

?>