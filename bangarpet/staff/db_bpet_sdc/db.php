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


if($_SESSION['branch_staff']==1){
  // bangarpet branch tabels
  $class_test_marks="class_test_marks_bpet"; 

  $tbl_absentees="tbl_absentees";
  $tbl_admission="tbl_admission";

  $new_admission="new_admission_bpet";
  $current_test="current_test";
}
if($_SESSION['branch_staff']==2){
// kgf branch tabels
$class_test_marks="class_test_marks_kgf"; 

$tbl_absentees="tbl_absentees_kgf";
$tbl_admission="tbl_admission_kgf";

$new_admission="new_admission_kgf";
}
?>