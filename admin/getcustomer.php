<?php
$servername     =       "localhost";
$username       =       "admin";
$password       =       "admin";
$dbname         =       "alacrity";


$dbconnect=mysqli_connect($servername,$username,$password,$dbname);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);

}



$query = mysqli_query($dbconnect, "SELECT id, first_name, last_name, email_id, phone_number, address FROM customers")
   or die (mysqli_error($dbconnect));




while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['id']}</td>
    <td>{$row['first_name']}</td>
    <td>{$row['last_name']}</td>
    <td>{$row['email_id']}</td>
    <td>{$row['phone_number']}</td>
    <td style='word-break: break-all; width: 350px;'>{$row['address']}</td>
   </tr>\n";

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