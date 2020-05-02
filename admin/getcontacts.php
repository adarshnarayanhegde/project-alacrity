
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
  $page = intval($_GET['q']);
  $results_per_page = 5;
  $query = mysqli_query($dbconnect, "SELECT * from order_details")
  or die (mysqli_error($dbconnect));

  $number_of_results = mysqli_num_rows($query);
  $number_of_pages = ceil($number_of_results/$results_per_page);


  // if (!isset($_GET['page'])) {
  //   $page = 1;
  // } else {
  //   $page = $_GET['page'];
  // } 
  $this_page_first_result = ($page-1)*$results_per_page;
  
  $sql='SELECT id,name,phone_number,email,description FROM contacts LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
  $query = mysqli_query($dbconnect,$sql );

  while ($row = mysqli_fetch_array($query)) {
    echo
    "<tr>
    <td>{$row['id']}</td>
    <td>{$row['name']}</td>
    <td>{$row['phone_number']}</td>
    <td>{$row['email']}</td>
    <td style='word-break: break-all; width: 350px;'>{$row['description']}</td>
    </tr>\n";
  
    }
}



if(isset($_GET['name']))
{
  $name = $_GET['name'];
  $results_per_page = 5;
  $query = mysqli_query($dbconnect, "SELECT id,name,phone_number,email,description FROM contacts where name like '%$name%' ;")
  or die (mysqli_error($dbconnect));


  while ($row = mysqli_fetch_array($query)) {
    echo
    "<tr>
    <td>{$row['id']}</td>
    <td>{$row['name']}</td>
    <td>{$row['phone_number']}</td>
    <td>{$row['email']}</td>
    <td style='word-break: break-all; width: 350px;'>{$row['description']}</td>
    </tr>\n";
  
    }
}
