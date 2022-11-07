<?php
include '../db_bpet_sdc/db.php';
require_once  ('../../../vendor/autoload.php');

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// get test and their max and mini 






//Get class name
$getclassname="SELECT * FROM class WHERE id='".$_SESSION['class_id']."'";
$classresult=$conn->query($getclassname);
foreach($classresult as $rowclass){
  $classname=$rowclass['section']."-".$rowclass['name'];
  $filename=$rowclass['section']."_".$rowclass['name'];
}
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
  
// get test and their max and mini 
$testid= $_GET['testid'];
$gettest="SELECT * FROM ".$current_test." WHERE id=".$testid."";
$gettestresult=$conn->query($gettest);
foreach($gettestresult as $gettestresultrow){
  $maximarks=$gettestresultrow['maxmarks'];
  $class=$gettestresultrow['class'];
  $name=$gettestresultrow['name'];
  $minimarks=$gettestresultrow['minmarks'];
  $examid=$gettestresultrow['id'];
}
     $query = "SELECT ".$tbl_admission.".StudentName,  ".$tbl_admission.".father_name, ".$tbl_admission.".combination, ".$tbl_admission.".lang_code, ".$tbl_admission.".mobile_no, ".$tbl_admission.".RollNo, ".$class_test_marks.".l1, ".$class_test_marks.".l2,  ".$class_test_marks.".s1, ".$class_test_marks.".s2,  ".$class_test_marks.".s3,  ".$class_test_marks.".s4,  ".$class_test_marks.".total
     FROM ".$tbl_admission."
     LEFT JOIN ".$class_test_marks." ON ".$tbl_admission.".RollNo = ".$class_test_marks.".roll AND ".$class_test_marks.".test_id=". $testid."    WHERE ".$tbl_admission.".Class=".$_SESSION['class_id']."  
     ";
 $result = mysqli_query($conn, $query);


 if(mysqli_num_rows($result) > 0)
 {
$tstud="SELECT * FROM ".$tbl_admission." WHERE Class=".$_SESSION['class_id']."";
$result3=$conn->query($tstud);
$totalstudents=mysqli_num_rows($result3);
  $output .= '
   <table class="table" bordered="1"> 
   <tr>
   <th colspan=13 style="text-align:center;"><h2>
   '.$name.'</h2><h4>
   Maximum Marks: '.$maximarks.'</h4>
   </th> 
   </tr> 
   <tr>
   <td colspan=4 style="text-align:left;">
 <h4> Section: '.$classname.' </h4>
   </td>
   <td colspan=4 style="text-align:center;">
   <h4>Class Teacher: '.$_SESSION['name_staff'].'</h4>
   </td>
   <td colspan=5 style="text-align:right;">
 <h4>  No of Students: '.$totalstudents.'</h4>
   </td>
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
                    <th>Status</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
    if($examid==9 || $examid==10){
      if($row["combination"]=="PCMB" || $row["combination"]=="PCMCS"){
        $totalmaxmarks=510;
      }
      if($row["combination"]=="EBACS"){
        $totalmaxmarks=570;
      }else{
        $totalmaxmarks= $maximarks*6;
      }
      
      }
      else{
        $totalmaxmarks= $maximarks*6;
      }
    $percentage=($row["total"]/$totalmaxmarks)*100;
    if($row["lang_code"]==1){
$langname="KAN";
    }
    if($row["lang_code"]==3){
$langname="HIN";
    }
    if($row["lang_code"]==8){
      $langname="URD";
          }
          if($row["lang_code"]==9){
            $langname="SAN";
                }
    if($row["combination"]=="BASM"){
      $combination='MBAS';
    }else{
      $combination=$row["combination"];
    }
    // logic for mid term exam 
 if($examid==9 || $examid==10){
  // if pcmb or pcmcs
  if($row["combination"]=="PCMB" || $row["combination"]=="PCMCS"){
    if($row["l1"]>=35 && $row["l2"]>=35 && $row["s1"]>=21 && $row["s2"]>=21 && $row["s3"]>=35 && $row["s4"]>=21){
      $status="PASS";
    }else{
      $status="<b style='color:red'>FAIL</b>";
    }  
  }
  // if ebacs
  if($row["combination"]=="EBACS"){
    if($row["l1"]>=$minimarks && $row["l2"]>=$minimarks && $row["s1"]>=$minimarks && $row["s2"]>=$minimarks && $row["s3"]>=$minimarks && $row["s4"]>=21){
      $status="PASS";
    }else{
      $status="<b style='color:red'>FAIL</b>";
    }  
  }
 else{
  if($row["l1"]>=$minimarks && $row["l2"]>=$minimarks && $row["s1"]>=$minimarks && $row["s2"]>=$minimarks && $row["s3"]>=$minimarks && $row["s4"]>=$minimarks){
    $status="PASS";
  }else{
    $status="<b style='color:red'>FAIL</b>";
  }

 }

 }
else{
  if($row["l1"]>=$minimarks && $row["l2"]>=$minimarks && $row["s1"]>=$minimarks && $row["s2"]>=$minimarks && $row["s3"]>=$minimarks && $row["s4"]>=$minimarks){
    $status="PASS";
  }else{
    $status="<b style='color:blue'>FAIL</b>";
  }
}



   $output .= '
    <tr>  
                         <td>'.$row["RollNo"].'</td>  
                         <td>'.$row["StudentName"].'</td>  
                         <td>'.$row["father_name"].'</td>  
                         <td>'.$combination.'</td>  
                         <td>'.$langname.'</td>  
                         <td>'.$row["l1"].'</td>  
                         <td>'.$row["l2"].'</td>  
                         <td>'.$row["s1"].'</td>  
                         <td>'.$row["s2"].'</td>  
                         <td>'.$row["s3"].'</td>  
                         <td>'.$row["s4"].'</td>  
                         <td>'.$row["total"].'</td>  
                         <td>'.round($percentage, 2).'%</td>  
                         <td>'.$status.'</td> 
                    </tr>
   ';
  }
  $output .= '</table>';
  // progress rport

  $query1 = "SELECT   ".$tbl_admission.".RollNo, SUM(".$class_test_marks.".l1) as l1, SUM(".$class_test_marks.".l2) as l2,  SUM(".$class_test_marks.".s1) as s1, SUM(".$class_test_marks.".s2) as s2,  SUM(".$class_test_marks.".s3) as s3,  SUM(".$class_test_marks.".s4) as s4,  ".$class_test_marks.".total
  FROM ".$tbl_admission."
  LEFT JOIN ".$class_test_marks." ON ".$tbl_admission.".RollNo = ".$class_test_marks.".roll AND ".$class_test_marks.".test_id=". $testid."    WHERE ".$tbl_admission.".Class=".$_SESSION['class_id']."  
  ";
$result1 = mysqli_query($conn, $query1);

if(mysqli_num_rows($result) > 0)
{
$output .= '
<table class="table" bordered="1"> 
<tr>
<th colspan=5 rowspan=2>Class Average Marks </th> 
<th>Language - 1</th>
<th>English</th>
<th>Subject -1</th>
<th>Subject - 2</th>
<th>Subject - 3</th>
<th>Subject - 4</th>
</tr>
';

while($row2 = mysqli_fetch_array($result1))
{
 $percentage=($row["total"]/$totalmaxmarks)*100;
 if($row["lang_code"]==1){
$langname="KAN";
 }
 if($row["lang_code"]==3){
$langname="HIN";
 }
 $avgl1=($row2['l1']/$totalstudents);
 $avgl2=($row2['l2']/$totalstudents);
 $avgs1=($row2['s1']/$totalstudents);
 $avgs2=($row2['s2']/$totalstudents);
 $avgs3=($row2['s3']/$totalstudents);
 $avgs4=($row2['s4']/$totalstudents);
$output .= '
 <tr>  
           
                <td>'.round($avgl1, 2).'</td>
           
                <td>'.round($avgl2, 2).'</td>
           
                <td>'.round($avgs1, 2).'</td>
           
                <td>'.round($avgs2, 2).'</td>
           
                <td>'.round($avgs3, 2).'</td>
           
                <td>'.round($avgs4, 2).'</td>
                
               
                 </tr>
';
}
$output .= '</table>';

if($examid==9 || $examid==10){
  if($combination=="PCMB" || $row["combination"]=="PCMCS"){
    $s1min=35;
    $s2min=35;
    $s3min=21;
    $s4min=21;
    $s5min=35;
    $s6min=21;
  }
  if($combination=="EBACS"){
    $s1min=$minimarks;
    $s2min=$minimarks;
    $s3min=$minimarks;
    $s4min=$minimarks;
    $s5min=$minimarks;
    $s6min=21;
  }else{
    $s1min=$minimarks;
    $s2min=$minimarks;
    $s3min=$minimarks;
    $s4min=$minimarks;
    $s5min=$minimarks;
    $s6min=$minimarks;
  }
  
  }
  else{
    $totalmaxmarks= $maximarks*6;
  }
$query2 = "SELECT   ".$tbl_admission.".StudentName, ".$class_test_marks.".total
  FROM ".$tbl_admission."
  LEFT JOIN ".$class_test_marks." ON ".$tbl_admission.".RollNo = ".$class_test_marks.".roll AND ".$class_test_marks.".test_id=". $testid."    WHERE ".$tbl_admission.".Class=".$_SESSION['class_id']."  
  AND ".$class_test_marks.".l1>=".$s1min." 
  AND ".$class_test_marks.".l2>=".$s2min."  
   AND ".$class_test_marks.".s1>=".$s3min."   
   AND ".$class_test_marks.".s2>=".$s4min."   
   AND ".$class_test_marks.".s3>=".$s5min."   
   AND ".$class_test_marks.".s4>=".$s6min." 
  ORDER BY `".$class_test_marks."`.`total` DESC LIMIT 20";
$result2 = mysqli_query($conn, $query2);

if(mysqli_num_rows($result2) > 0)
{
$output .= '
<table class="table" bordered="1"> 
<tr>
<th  colspan=3 style="text-align:center;"> <h1>
Class Toppers</h1> </th> 
</tr>
';

while($row3 = mysqli_fetch_array($result2))
{
  $percentage1=($row3["total"]/$totalmaxmarks)*100;
$output .= '
 <tr>  
                <td>'.$row3['StudentName'].'</td>
                <td>'.$row3['total'].'</td>
                <td>'.round($percentage1, 2).'%</td>
                 </tr>
';
}
}else{
  $output .='
  <tr>  
  No Record Found
                 </tr>
                ';
}

$querycount = "SELECT   ".$tbl_admission.".StudentName, ".$class_test_marks.".total
  FROM ".$tbl_admission."
  LEFT JOIN ".$class_test_marks." ON ".$tbl_admission.".RollNo = ".$class_test_marks.".roll AND ".$class_test_marks.".test_id=". $testid."    WHERE ".$tbl_admission.".Class=".$_SESSION['class_id']."  
  AND ".$class_test_marks.".l1>=".$s1min." 
  AND ".$class_test_marks.".l2>=".$s2min."  
   AND ".$class_test_marks.".s1>=".$s3min."   
   AND ".$class_test_marks.".s2>=".$s4min."   
   AND ".$class_test_marks.".s3>=".$s5min."   
   AND ".$class_test_marks.".s4>=".$s6min." 
  ORDER BY `".$class_test_marks."`.`total` ";
$resultcount = mysqli_query($conn, $querycount);

  $output .= '</table>
  <h1>No. Passed '.mysqli_num_rows($resultcount).' / '.$totalstudents.'</h1>
  </body>
</html>';
  $mpdf=new \Mpdf\Mpdf();
  $mpdf->WriteHTML($output);
  
  $file=time().'.pdf';
  // $file=$filename.'.pdf';
  $mpdf->output($file, 'I');
 }else{
     echo "no data found";
 }
}
}
?>