<?php

include('../db_bpet_sdc/db.php');
// echo $_GET['class_id']
$query = "SELECT ".$tbl_admission.".StudentName,  ".$tbl_admission.".father_name, ".$tbl_admission.".combination, ".$tbl_admission.".lang_code, ".$tbl_admission.".mobile_no, ".$tbl_admission.".RollNo, ".$class_test_marks.".l1, ".$class_test_marks.".l2,  ".$class_test_marks.".s1, ".$class_test_marks.".s2,  ".$class_test_marks.".s3,  ".$class_test_marks.".s4,  ".$class_test_marks.".total
FROM ".$tbl_admission."
LEFT JOIN ".$class_test_marks." ON ".$tbl_admission.".RollNo = ".$class_test_marks.".roll AND ".$class_test_marks.".test_id=". $_SESSION['test_name']."    WHERE ".$tbl_admission.".Class=".$_POST['class_id']."  
";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
		echo json_encode(array(
            "statusCode"=>200,
            "data"=>"hello pk"
        ));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}

?>