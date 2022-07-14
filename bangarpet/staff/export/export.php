<?php
include '../db_bpet_sdc/db.php';
require ('../../../vendor/autoload.php');
// export to pdf
$output = '';
$output .= '
<html>
<head>


<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
@page {
	size: auto; /* <length>{1,2} | auto | portrait | landscape */
	    
	margin:10px; /* <any of the usual CSS values for margins> */
	             /*(% of page-box width for LR, of height for TB) */
	margin-header: 5mm; /* <any of the usual CSS values for margins> */
	margin-footer: 5mm; /* <any of the usual CSS values for margins> */


}

</style></head>
<body>
';
// export pdf
if($_GET["data"]=="consolidate_pdf")
{
     $query = "SELECT ".$tbl_admission.".StudentName,  ".$tbl_admission.".father_name, ".$tbl_admission.".combination, ".$tbl_admission.".lang_code, ".$tbl_admission.".mobile_no, ".$tbl_admission.".RollNo, ".$class_test_marks.".l1, ".$class_test_marks.".l2,  ".$class_test_marks.".s1, ".$class_test_marks.".s2,  ".$class_test_marks.".s3,  ".$class_test_marks.".s4,  ".$class_test_marks.".total
     FROM ".$tbl_admission."
     LEFT JOIN ".$class_test_marks." ON ".$tbl_admission.".RollNo = ".$class_test_marks.".roll AND ".$class_test_marks.".test_id=". $_SESSION['test_name']."    WHERE ".$tbl_admission.".Class=".$_SESSION['class_id']."  
     ";
 $result = mysqli_query($conn, $query);

$totalmaxmarks= $_SESSION['maxmarks']*6;
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1"> 
   <tr>
   <th colspan=12>Internal Test - 1; Maximum Marks'.$totalmaxmarks.'</th> 
   </tr> 
                    <tr> 
                   
                    <th>Reg_no</th>
                   
                    <th>StudentName</th>
                    <th>father_name</th>
                    <th>COMB</th>
                    <th>Language</th>
                    <th>Language-1</th>
                    <th>English</th>
                    <th>Subject-1</th>
                    <th>Subject-2</th>
                    <th>Subject-3</th>
                    <th>subject-4</th>
                    <th>Total</th>
                    <th>%</th>
                 
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
    $percentage=($row["total"]/$totalmaxmarks)*100;
    if($row["lang_code"]==1){
$langname="KAN";
    }
    if($row["lang_code"]==3){
$langname="HIN";
    }
   $output .= '
    <tr>  
                         <td>'.$row["RollNo"].'</td>  
                         <td>'.$row["StudentName"].'</td>  
                         <td>'.$row["father_name"].'</td>  
                         <td>'.$row["combination"].'</td>  
                         <td>'.$langname.'</td>  
                         <td>'.$row["l1"].'</td>  
                         <td>'.$row["l2"].'</td>  
                         <td>'.$row["s1"].'</td>  
                         <td>'.$row["s2"].'</td>  
                         <td>'.$row["s3"].'</td>  
                         <td>'.$row["s4"].'</td>  
                         <td>'.$row["total"].'</td>  
                         <td>'.$percentage.'%</td>  
                    </tr>
   ';
  }
  $output .= '
  <tr>
   <th colspan=2>Average</th> 
   </tr> 
  </table>
  </body>
</html>';
  $mpdf=new \Mpdf\Mpdf();
  $mpdf->WriteHTML($output);
  
  $file=time().'.pdf';
  $mpdf->output($file, 'D');
 }else{
     echo "no data found";
 }
}

?>