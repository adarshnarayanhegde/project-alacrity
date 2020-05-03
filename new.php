<?php

$db_host     =       "localhost";
$db_user       =       "admin";
$db_pass       =       "admin";
$db_name         =       "alacrity";
// Always start this first
session_start();
echo "<script>console.log( \"PHP LOG: \" );</script>";
if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['email1'] ) && isset( $_POST['password1'] ) ) {
        // Getting submitted user data from database
        $con = new mysqli($db_host, $db_user, $db_pass, $db_name);
        $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
    		
    	// Verify user password and set $_SESSION
    	if ( password_verify( $_POST['password1'], $user->password ) ) {
            $_SESSION['user_id'] = $user->ID;
            echo json_encode(['code'=>"200"]);
            exit;
    	}
    }
}
echo json_encode(['code'=>"404",'msg'=>"error"]);
?>