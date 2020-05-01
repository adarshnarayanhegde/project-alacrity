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
  $q = intval($_GET['q']);
  $query = mysqli_query($dbconnect, "select order_reference,name,phone_number,email,service,product,description from order_details LIMIT $q ;")
   or die (mysqli_error($dbconnect));




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
}



if(isset($_GET['name']))
{
  $name = $_GET['name'];


  $query = mysqli_query($dbconnect, "select order_reference,name,phone_number,email,service,product,description from order_details where order_reference like '%$name%' ;")
  or die (mysqli_error($dbconnect));


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
}
// $mysqli = new mysqli($servername, $username, $password, $dbname);
// if($mysqli->connect_error) {
//   exit('Could not connect');
// }

// $sql = "SELECT id, first_name, last_name, email_id, phone_number, address
// FROM customers";

// $stmt = $mysqli->prepare($sql);
// $stmt->execute();
// $stmt->store_result();
// $stmt->bind_result($id, $first_name, $last_name, $email_id, $phone_number, $address);
// $stmt->fetch();
// $stmt->close();

// echo "<thead>";
// echo "<tr>";
// echo "<td>" . $id . "</td>";
// echo "<td>" . $first_name . "</td>";
// echo "<td>" . $last_name . "</td>";
// echo "<td>" . $email_id . "</td>";
// echo "<td>" . $phone_number . "</td>";
// echo "<td>" . $address . "</td>";
// echo "</tr>";
// echo "</thead>";
?>