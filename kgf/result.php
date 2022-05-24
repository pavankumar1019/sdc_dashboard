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
if($id==1){
  $s1="BASIC MATHS";
  $s2=" BUSINESS STUDIES";
  $s3="ACCOUNTANCY";
  $s="STATISTICS";
}
if($id==2){
  $s1="ECONOMICS";
  $s2="BUSINESS STUDIES";
  $s3="ACCOUNTANCY";
  $s="COMPUTER SCIENCE";
}
if($id==3){
  $s1="ECONOMICS";
  $s2="BUSINESS STUDIES";
  $s3="ACCOUNTANCY";
  $s="STATISTICS";
}
if($id==4){
  $s1="PHYSICS";
  $s2="CHEMISTRY";
  $s3="MATHEMATICS";
  $s="COMPUTER SCIENCE";
}
if($id==5){
  $s1="PHYSICS";
  $s2="CHEMISTRY";
  $s3="MATHEMATICS";
  $s="BIOLOGY";
}
}
function getclass($total){
  $average=($total/600)*100;
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
$sql = "SELECT * FROM kgf_ist_puc_result where reg_no='".$_POST['reg']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    subj($row['class_code']);
   ?>
   <table style="width:100%">
  <tr>
    <th colspan="3" style="text-align:center;color:blue;font-size:20px;">SDC-Independent PU College , KGF <br> MM0273</th>
 

  </tr>
  <tr>
    <td colspan="3">Register number : <?php echo $row['reg_no'];?></td>
 

  </tr>
  <tr>

    <td colspan="3"> <b style="color:blue;"> Name: &nbsp; &nbsp; &nbsp; <?php echo $row['student_name'];?></b> <br>
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