<?php
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
echo "hello";
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
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
    <td>Jill</td>
  
  </tr>
  <tr>
  <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
    <td>Jill</td>
  
  </tr>
  <tr>
  <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
    <td>Jill</td>
  
  </tr>
</table>
</body>
</html>