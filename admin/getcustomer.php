
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

function debug_to_console($data, $context = 'Debug in Console') {

  // Buffering to solve problems frameworks, like header() in this and not a solid return.
  ob_start();

  $output  = 'console.info(\'' . $context . ':\');';
  $output .= 'console.log(' . json_encode($data) . ');';
  $output  = sprintf('<script>%s</script>', $output);

  echo $output;
}

debug_to_console("HI");

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
  
  $sql='SELECT order_reference,name,phone_number,product,email, description FROM order_details LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
  $query = mysqli_query($dbconnect,$sql );

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
}



if(isset($_GET['name']))
{
  $name = $_GET['name'];
  $results_per_page = 5;
  $query = mysqli_query($dbconnect, "SELECT order_reference,name,phone_number,product,email, description FROM order_details where order_reference like '%$name%' ;")
  or die (mysqli_error($dbconnect));


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
}
