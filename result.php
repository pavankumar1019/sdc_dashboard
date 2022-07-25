<?php
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
$query = "SELECT tbl_admission.StudentName,  tbl_admission.father_name, tbl_admission.combination, tbl_admission.lang_code, tbl_admission.mobile_no, tbl_admission.RollNo, class_test_marks_bpet.l1, class_test_marks_bpet.l2,  class_test_marks_bpet.s1, class_test_marks_bpet.s2,  class_test_marks_bpet.s3,  class_test_marks_bpet.s4,  class_test_marks_bpet.total
FROM tbl_admission
LEFT JOIN class_test_marks_bpet ON tbl_admission.RollNo = class_test_marks_bpet.roll AND class_test_marks_bpet.test_id=1 WHERE tbl_admission.RollNo=".$_POST['reg']."  
";
$result = mysqli_query($conn, $query);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    subj($row['class_code']);
   ?>
   <table style="width:100%">
  <tr>
    <th colspan="3">Register number : <?php echo $row['RollNo'];?></th>
 

  </tr>
  <tr>

    <td colspan="3"> <b style="color:blue;"> Name: &nbsp; &nbsp; &nbsp; <?php echo $row['StudentName'];?></b> <br>
     Father Name :  <?php echo $row['father_name'];?><br>
    Mother Name : <?php echo $row['mother_name'];?>
    </td>
   
  </tr>
  <tr style="text-align: center; font-size: 20px;font-weight: bold;">
    <td><b>Subjects</b></td>
    <td colspan="2">Marks</td>
  </tr>
  <tr>
    <td ><b><?php echo language($row['lang_code'])?></b></td>
    <td colspan="2" style="text-align: center;"><?php echo $row['language']?></td>
  </tr>
  <tr>
    <td ><b>ENGLISH</b></td>
    <td colspan="2" style="text-align: center;"><?php echo $row['english']?></td>
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
    <td colspan="2" style="text-align: center;"><?php echo $row['g']?></td>
  </tr>
  <tr style="font-size:30px;font-weight:bold;">
    <td colspan="3" style="text-align:center;"><?php getclass($row['g']);?></td>
  </tr>

<tr>
  <td colspan="3" style="text-align:center"><button onClick="window.location.reload();" class="btn btn-primary">Back</button></td>
</tr>
</table>
   <?php
  }
} else {
  echo "Not Found Result Please SDC-College Contact Office ";
}

$conn->close();
?>