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
function language($code) {
  if($code==1){
    echo "KANNADA";
  }
  if($code==3){
    echo "HINDI";
  }
  if($code==8){
    echo "URDU";
  }
  if($code==9){
    echo "SANSKRIT";
  }
  };
  $s1;
  $s2;
  $s3;
  $s;
  function subj($id) {
    global $s1,$s2,$s3,$s;
  if($id=="BASM"){
    $s1="BASIC MATHS";
    $s2=" BUSINESS STUDIES";
    $s3="ACCOUNTANCY";
    $s="STATISTICS";
  }
  if($id=="EBACS"){
    $s1="ECONOMICS";
    $s2="BUSINESS STUDIES";
    $s3="ACCOUNTANCY";
    $s="COMPUTER SCIENCE";
  }
  if($id=="EBAS"){
    $s1="ECONOMICS";
    $s2="BUSINESS STUDIES";
    $s3="ACCOUNTANCY";
    $s="STATISTICS";
  }
  if($id=="PCMB"){
    $s1="PHYSICS";
    $s2="CHEMISTRY";
    $s3="MATHEMATICS";
    $s="COMPUTER SCIENCE";
  }
  if($id=="PCMCS"){
    $s1="PHYSICS";
    $s2="CHEMISTRY";
    $s3="MATHEMATICS";
    $s="BIOLOGY";
  }
  }
  function getclass($total){
    $average=($total/300)*100;
    if ($average>=85)
  {
  echo "<p style='color:blue;'>Distinction ".round($average, 2)."%</p>";
  }
    else if ($average>=60)
  {
  echo "<p style='color:blue;'>First Class ".round($average, 2)."%</p>";
  }
  else if($average>=45)
  {
  echo "<p style='color:blue;'>Second Class ".round($average, 2)."%</p>";
  }
  else if($average>=35)
  {
  echo "<p style='color:blue;'>Pass ".round($average, 2)."%</p>";
  }
  else
  {
  echo "<p style='color:red;'>Failed ".round($average, 2)."%</p>";
  }
  
  
  }
if ($result->num_rows > 0) {
foreach($result as $row){
  ?>
  <table style="width:100%">
 <tr>
   <th colspan="3" style="text-align:center;color:blue;font-size:20px;">SDC-Independent PU College , Bangarpet <br> MM0174</th>


 </tr>
 <tr>
   <td colspan="3">Register number : <?php echo $row['RollNo'];?></td>
 </tr>
 <tr>

   <td colspan="3"> <b style="color:blue;"> Name: &nbsp; &nbsp; &nbsp; <?php echo $row['StudentName'];?></b> <br>
       </td>
  
 </tr>
 <tr style="text-align: center; font-size: 20px;font-weight: bold;">
   <td><b>Subjects</b></td>
   <td colspan="2">Marks</td>
 </tr>
 <tr>
   <td ><b><?php echo language($row['lang_code'])?></b></td>
   <td colspan="2" style="text-align: center;"><?php echo $row['l1']?></td>
 </tr>
 <tr>
   <td ><b>ENGLISH</b></td>
   <td colspan="2" style="text-align: center;"><?php echo $row['l2']?></td>
 </tr>
 <tr>
   <td ><b><?php echo $s1;?></b></td>
   <td colspan="2" style="text-align: center;"><?php echo $row['s1']?></td>
 </tr>
 <tr>
   <td ><b><?php echo $s2;?></b></td>
   <td colspan="2" style="text-align: center;"><?php echo $row['s2']?></td>
 </tr>
 <tr>
   <td ><b><?php echo $s3;?></b></td>
   <td colspan="2" style="text-align: center;"><?php echo $row['s3']?></td>
 </tr>
 <tr>
   <td ><b><?php echo $s;?></b></td>
   <td colspan="2" style="text-align: center;"><?php echo $row['s4']?></td>
 </tr>
 <tr style="font-size:30px;font-weight:bold;">
   <td ><b>TOTAL</td>
   <td colspan="2" style="text-align: center;"><?php echo $row['total']?></td>
 </tr>
 <tr style="font-size:30px;font-weight:bold;">
   <td colspan="3" style="text-align:center;"><?php getclass($row['total']);?></td>
 </tr>

<tr>
 <td colspan="3" style="text-align:center"><button onClick="window.location.reload();" class="btn btn-primary">Back</button></td>
</tr>
</table>
  <?php
}
  }



?>