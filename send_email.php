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

<?php   
                      
                    $success="";


                    	
                    require "Mail.php";
                      
                    $errorMSG = "";

                    
                   
                    if (empty($_POST["name"])) {
                        $errorMSG = "<li>Name is required</<li>";
                    }
                    
                    elseif (preg_match("/^[A-Za-z]{4,}/",($_POST["name"])))
                    {
                        $name = $_POST["name"];
                    }
                    else {
                        $errorMSG .="<li>Name should contain atlease 2 characters</li>";
                        
                    }

                   
                    if (empty($_POST["phonenumber"])) {
                        $errorMSG .= "<li>Phonenumber is required</<li>";
                    }
                    elseif (preg_match("/^([0-9]{10})$/",($_POST["phonenumber"])))
                    {
                        $phonenumber = $_POST["phonenumber"];
                    } 
                    else {
                        
                        $errorMSG .="<li>Phonenumber should contain 10 digits</li>";
                    }


                    
                    if (empty($_POST["email"])) {
                        $errorMSG .= "<li>Email is required</li>";
                    } else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                        $errorMSG .= "<li>Invalid email format</li>";
                    }else {
                        $email = $_POST["email"];
                    }

                   
                    if (empty($_POST["service"])) {
                        $errorMSG = "<li>Service is required</<li>";
                    } else {
                        $service = $_POST["service"];
                    }

                    
                    
                    if (empty($_POST["productname"])) {
                        $errorMSG = "<li>ProductName is required</<li>";
                    } else {
                        $productname = $_POST["productname"];
                    }

                    
                    if (empty($_POST["description"])) {
                        $errorMSG .= "<li>Description is required</li>";
                    } else {
                        $description = $_POST["description"];
                    }
                    
                    if(strlen($errorMSG)>0)
                    {
                    echo json_encode(['code'=>"404",'msg'=>$errorMSG]);
                    exit;
                    }


                      $from    = $_POST["email"]; 
                      $to      = "chaturvedakash1@gmail.com".",".$from;
                      $subject = "Order Request";
                      $body    = "\n\nEmail contents here";
                      $service=$_POST['service'];
                      $productname= $_POST['productname'];
                      $sender=$_POST["name"];
                      $senderphonenumber=$_POST["phonenumber"];
                      $description=$_POST["description"];

                      $query = mysqli_query($dbconnect, "SELECT id from order_index; ")
                  or die (mysqli_error($dbconnect));

                  while ($row = mysqli_fetch_array($query)) {
                    $order_index=$row["id"];
                  }


                      $order_reference=$order_index.date("dmy");
                      $order_index=$order_index+1;
                      $query = mysqli_query($dbconnect, "
                    INSERT INTO order_details(order_reference,name,phone_number,email,service,product,description) 
                    VALUES ('$order_reference','$sender','$senderphonenumber','$from','$service','$productname','$description');")
                    or die (mysqli_error($dbconnect));
                    
                    $query = mysqli_query($dbconnect, "
                    INSERT INTO order_index VALUES ('$order_index');")
                  or die (mysqli_error($dbconnect));

                      $mailBody=" Order reference: $order_reference\n Name: $sender\n Email: $to\n Phone number: $senderphonenumber\n Service: $service\n Product Name: $productname\n Description: $description ";

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
                          if(empty($errorMSG)){
                          $success="Thanks for placing the order..We will contact you soon";
                          $to = $from = $subject = $body = $sender = $senderphonenumber = $description = $mailBody  = "";
                          $productname = $service = $query = $mail = $smtp = $port = $host = $user = $pass = $headers ="";
                          echo json_encode(['code'=>"200"]);
	                      exit;
                          }
                      }

                    echo json_encode(['code'=>"404"]);
  

                 ?>  