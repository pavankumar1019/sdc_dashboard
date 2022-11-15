<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$servername = "localhost";
$username = "u430139865_sdc";
$password = "Pavan5639";
$dbname = "u430139865_sdc";
$tbl_admission="tbl_admission";
$class_test_marks="class_test_marks_bpet";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$connect = new PDO("mysql:host=localhost; dbname=u430139865_sdc", "u430139865_sdc", "Pavan5639");
// header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
// header("Content-Disposition: attachment; filename=abc.xls");  //File name extension was wrong
// header("Expires: 0");
// header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
// header("Cache-Control: private",false);

$query = "SELECT ".$tbl_admission.".StudentName,  ".$tbl_admission.".father_name, ".$tbl_admission.".combination, ".$tbl_admission.".lang_code, ".$tbl_admission.".mobile_no, ".$tbl_admission.".RollNo, ".$class_test_marks.".l1, ".$class_test_marks.".l2,  ".$class_test_marks.".s1, ".$class_test_marks.".s2,  ".$class_test_marks.".s3,  ".$class_test_marks.".s4,  ".$class_test_marks.".total
FROM ".$tbl_admission."
LEFT JOIN ".$class_test_marks." ON ".$tbl_admission.".RollNo = ".$class_test_marks.".roll AND ".$class_test_marks.".test_id='10'   WHERE ".$tbl_admission.".class_name=2
";
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
?>
  <tr>
    <td><?php echo $row['name']; ?></td>
    <td>Smith</td>
    <td>50</td>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
    <td>Jill</td>
    <td>Smith</td>
    <td></td>
    <td></td>
  
  </tr>
<?php
  }   
  }
 ?>
</table>
</body>
</html>