<?php   
                      $success="";
                      require "Mail.php";
                      if(isset($_POST['submit'])){
                      $to      = "chaturvedakash1@gmail.com";
                      $from    = $_POST["email"]; 
                      $subject = "Order Confirmation";
                      $body    = "\n\nEmail contents here";
                      $sender=$_POST["name"];
                      $senderphonenumber=$_POST["phonenumber"];
                      $description=$_POST["description"];
                      $mailBody=" Name: $sender\n Email: $to\n Phone number: $senderphonenumber\n Description: $description";

                      $host    = "ssl://smtp.gmail.com";
                      //$port    =  "587";
                      $port =  "465";
                      $user    = "chaturvedakash1@gmail.com";
                      $pass    = "chaturved123";
                      $headers = array("From"=> $from, "To"=>$to, "Subject"=>$subject);
                      $smtp    = @Mail::factory("smtp", array("host"=>$host, "port"=>$port, "auth"=> true, "username"=>$user, "password"=>$pass));
                      $mail    = @$smtp->send($to, $headers, $mailBody);

                      if (PEAR::isError($mail)){
                          echo "error: {$mail->getMessage()}";
                      } else {
                          $success="Thanks for placing the order..We will contact you soon";
                          $to = $from = $subject = $body = $sender = $senderphonenumber = $description = $mailBody  = "";
                      }
                    }
                 ?> 