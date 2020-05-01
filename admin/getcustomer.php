
<?php

$q=25;



$servername     =       "localhost";
$username       =       "admin";
$password       =       "admin";
$dbname         =       "alacrity";


$dbconnect=mysqli_connect($servername,$username,$password,$dbname);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);

}

if(isset($_GET['q']))
{
<<<<<<< HEAD
  $page = intval($_GET['q']);
  $results_per_page = 5;
  $query = mysqli_query($dbconnect, "SELECT * from order_details")
  or die (mysqli_error($dbconnect));
=======
  $q = intval($_GET['q']);
  $query = mysqli_query($dbconnect, "select order_reference,name,phone_number,email,service,product,description from order_details LIMIT $q ;")
   or die (mysqli_error($dbconnect));
>>>>>>> 3e0326650c0f8adafbfea8a9e7f70e335f019ae5

  $number_of_results = mysqli_num_rows($query);
  $number_of_pages = ceil($number_of_results/$results_per_page);


  // if (!isset($_GET['page'])) {
  //   $page = 1;
  // } else {
  //   $page = $_GET['page'];
  // } 
  $this_page_first_result = ($page-1)*$results_per_page;
  
  $sql='SELECT order_reference,name,phone_number,product,email, description FROM order_details LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
  $query = mysqli_query($dbconnect,$sql );

<<<<<<< HEAD
  while ($row = mysqli_fetch_array($query)) {
    echo
    "<tr>
    <td>{$row['order_reference']}</td>
    <td>{$row['name']}</td>
    <td>{$row['phone_number']}</td>
    <td>{$row['product']}</td>
    <td>{$row['email']}</td>
    <td style='word-break: break-all; width: 350px;'>{$row['description']}</td>
    </tr>\n";
  
    }
=======
while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
   <td>{$row['order_reference']}</td>
   <td>{$row['name']}</td>
   <td>{$row['phone_number']}</td>
   <td>{$row['email']}</td>
   <td>{$row['service']}</td>
   <td>{$row['product']}</td>
   <td>{$row['description']}</td>
   </tr>\n";

  }
>>>>>>> 3e0326650c0f8adafbfea8a9e7f70e335f019ae5
}



if(isset($_GET['name']))
{
  $name = $_GET['name'];
<<<<<<< HEAD
  $results_per_page = 5;
  $query = mysqli_query($dbconnect, "SELECT order_reference,name,phone_number,product,email, description FROM order_details where order_reference like '%$name%' ;")
=======


  $query = mysqli_query($dbconnect, "select order_reference,name,phone_number,email,service,product,description from order_details where order_reference like '%$name%' ;")
>>>>>>> 3e0326650c0f8adafbfea8a9e7f70e335f019ae5
  or die (mysqli_error($dbconnect));


  while ($row = mysqli_fetch_array($query)) {
<<<<<<< HEAD
    echo
    "<tr>
    <td>{$row['order_reference']}</td>
    <td>{$row['name']}</td>
    <td>{$row['phone_number']}</td>
    <td>{$row['product']}</td>
    <td>{$row['email']}</td>
    <td style='word-break: break-all; width: 350px;'>{$row['description']}</td>
    </tr>\n";
  
    }
=======
  echo
  "<tr>
  <td>{$row['order_reference']}</td>
  <td>{$row['name']}</td>
  <td>{$row['phone_number']}</td>
  <td>{$row['email']}</td>
  <td>{$row['service']}</td>
  <td>{$row['product']}</td>
  <td>{$row['description']}</td>
  </tr>\n";

  }
>>>>>>> 3e0326650c0f8adafbfea8a9e7f70e335f019ae5
}
