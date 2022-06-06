<?php

header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

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

$sql = "SELECT `student_name`,`combination_opted`,`mobile_no` FROM `new_admission_bpet`"; 
$result=$conn->query($sql);
echo '<table border="1">';
//make the column headers what you want in whatever order you want
echo '<tr><th>Field Name 1</th><th>Field Name 2</th><th>Field Name 3</th></tr>';
//loop the query data to the table in same order as the headers
foreach($result as $row){
    echo "<tr><td>".$row['student_name']."</td><td>".$row['combination_opted']."</td><td>".$row['mobile_no']."</td></tr>";
}
echo '</table>';

?>
