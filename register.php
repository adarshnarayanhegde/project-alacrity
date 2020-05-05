<?php
// Include config file
require_once "config.php";
$success="";
require "Mail.php";

// Define variables and initialize with empty values
$username = $email = $password =$phonenumber= "";
$err="";
$username_err = $email_err = $password_err = $phonenumber_err= "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
        $err.="Please enter a username.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                    $err.="This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
                $err.="Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    //Validate Email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an Email.";
        $err.="Please enter an Email.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";

        if($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
            $param_email = trim($_POST["email"]);   
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                    $err.="This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
                $err.="Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    //Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password."; 
        $err.=  "Please enter a password.";   
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
        $err.="Password must have atleast 6 characters.";
    }
     else{
        $password = trim($_POST["password"]);
    }

    //validate phonenumber
    if (empty($_POST["phonenumber"])) {
        $phonenumber_err = "Phonenumber is required";
        $err.="Phonenumber is required";
    }
    elseif (preg_match("/^([0-9]{10})$/",($_POST["phonenumber"])))
    {
        $phonenumber = trim($_POST["phonenumber"]);
    } 
    else {
        $phonenumber_err .="Phonenumber should contain 10 digits";
        $err.="Phonenumber should contain 10 digits";
    }

    // Check input errors before inserting in database
    if(empty($err) && empty($phonenumber_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, email, phonenumber, password) VALUES (?, ?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_email, $param_phonenumber, $param_password);

            // Set parameters
            $param_username = $username;
            $param_email = $email;
            $param_phonenumber = $phonenumber;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
            //     echo "inside";
            //     ///Redirect to login page
            //     //header("location: index.php");

                $from    = "chaturvedakash1@gmail.com"; 
                $to      = $_POST["email"];
                $subject = "Signup Confirmation";
                $body    = "\n\nEmail contents here";


              

                $mailBody=" Thanks for signing up! ";

                $host    = "ssl://smtp.gmail.com";
                $port =  "465";
                $user    = "chaturvedakash1@gmail.com";
                $pass    = "chaturved123";
                $headers = array("From"=> $from, "To"=>$to, "Subject"=>$subject);
                $smtp    = @Mail::factory("smtp", array("host"=>$host, "port"=>$port, "auth"=> true, "username"=>$user, "password"=>$pass));
                $mail    = @$smtp->send($to, $headers, $mailBody);

                if (PEAR::isError($mail)){
                    echo "error: {$mail->getMessage()}";
                } else {
      
                    $success="Thanks for signing up!";
                    $to = $from = $subject = $body = $sender  = $description = $mailBody  = "";
                     $query = $mail = $smtp = $port = $host = $user = $pass = $headers ="";
                    echo json_encode(['code'=>"200"]);
                    exit;
                    
                }
                echo json_encode(['code'=>"200"]);
                exit;
            } else{
                echo "Something went wrong. Please try again later.";
                echo json_encode(['code'=>"404",'msg'=>$err]);
                exit;
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    else{
        echo json_encode(['code'=>"404",'msg'=>$err]);
        exit;
    }
    // Close connection
    mysqli_close($link);
}
?>