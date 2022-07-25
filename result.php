<?php
$servername = "localhost";
$username = "u430139865_sdc";
$password = "Pavan5639";
$dbname = "u430139865_sdc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

$query = "SELECT tbl_admission.StudentName,  tbl_admission.father_name, tbl_admission.combination, tbl_admission.lang_code, tbl_admission.mobile_no, tbl_admission.RollNo, class_test_marks_bpet.l1, class_test_marks_bpet.l2,  class_test_marks_bpet.s1, class_test_marks_bpet.s2,  class_test_marks_bpet.s3,  class_test_marks_bpet.s4,  class_test_marks_bpet.total
FROM tbl_admission
LEFT JOIN class_test_marks_bpet ON tbl_admission.RollNo = class_test_marks_bpet.roll AND class_test_marks_bpet.test_id=1 WHERE tbl_admission.RollNo='".$_POST['reg']."' 
";
$result = mysqli_query($conn, $query);

if ($result->num_rows > 0) {
echo "a";
  }



?>