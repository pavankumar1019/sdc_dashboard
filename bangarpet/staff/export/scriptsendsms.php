<?php

include('../db_bpet_sdc/db.php');
// echo $_GET['class_id']
$query = "SELECT ".$tbl_admission.".StudentName,  ".$tbl_admission.".father_name, ".$tbl_admission.".combination, ".$tbl_admission.".lang_code, ".$tbl_admission.".mobile_no, ".$tbl_admission.".RollNo, ".$class_test_marks.".l1, ".$class_test_marks.".l2,  ".$class_test_marks.".s1, ".$class_test_marks.".s2,  ".$class_test_marks.".s3,  ".$class_test_marks.".s4,  ".$class_test_marks.".total
FROM ".$tbl_admission."
LEFT JOIN ".$class_test_marks." ON ".$tbl_admission.".RollNo = ".$class_test_marks.".roll AND ".$class_test_marks.".test_id=". $_SESSION['test_name']."    WHERE ".$tbl_admission.".Class=".$_POST['class_id']."  
";
$result = mysqli_query($conn, $query);
$html='';
$html.='
<tr>
<th style="text-align:center;">Detailes</th>
</tr>
';
if ($result->num_rows > 0) {
	foreach($result as $row){
          if($row['lang_code']==1){
$l1="KAN";
          }
          if($row['lang_code']==3){
$l1="HIN";
          }
if($row['combination']=="EBAS"){
$s1="ECO";
$s2="BUS";
$s3="ACC";
$s4="ST";
}
if($row['combination']=="BASM"){
$s1="BM";
$s2="BUS";
$s3="ACC";
$s4="ST";
}

        $html.='
        <tr>
        <td> Name : '.$row['StudentName'].' <br>
        Message : Dear '.$row['StudentName'].' as scored marks in Term Test - 1 <br>
        '.$l1.'=20,EN=30,'.$s1.'=10,'.$s2.'=20,'.$s3.'=50,'.$s4.'=60 TOTAL=400.
        </td>
        </tr>
        ';
    }
    echo $html;
	} 
	else {
        echo "error";
	}

?>