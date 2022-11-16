<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$servername = "localhost";
$username = "u430139865_sdc";
$password = "Pavan5639";
$dbname = "u430139865_sdc";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$connect = new PDO("mysql:host=localhost; dbname=u430139865_sdc", "u430139865_sdc", "Pavan5639");
// header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
// header("Content-Disposition: attachment; filename=abc.xls");  

$query ="SELECT staff.name, staff.phone_no, class.name, class.section
FROM staff
FULL OUTER JOIN staff ON staff.CustomerID=Orders.CustomerID
ORDER BY Customers.CustomerName;";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
    </style>
</head>
<body>
<table style="width:100%">
  <tr>
    <th>SLN</th>
    <th>Name</th> 
    <th>Combination</th>
    <th>l1</th>
    <th>eng</th>
    <th>s1</th>
    <th>s2</th>
    <th>s3</th>
    <th>s4</th>
    <th>status</th>
  </tr>
  <?php
  if(mysqli_num_rows($result) > 0)
  {
  while($row = mysqli_fetch_array($result))
  {
    $output = '';
  $output .= '
  <tr>  
                       <td>'.$row["RollNo"].'</td>  
                       <td>'.$row["StudentName"].'</td>  
                       <td>'.$row["combination"].'</td>  

                                    <td>'.$row["l1"].'</td>  
                       <td>'.$row["l2"].'</td>  
                       <td>'.$row["s1"].'</td>  
                       <td>'.$row["s2"].'</td>  
                       <td>'.$row["s3"].'</td>  
                       <td>'.$row["s4"].'</td>  
                       <td>'.$row["total"].'</td>  
                 
                  </tr>
 ';
 echo $output;
  }   
  }
 ?>
</table>
</body>
</html>