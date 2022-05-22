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
?>
<?php
// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// loadprint

    if(isset($_GET["reg_no"]))
    {
      $search = mysqli_real_escape_string($conn, $_GET["reg_no"]);
      $query = "
       SELECT * FROM sdc_marks_card_bpet 
       WHERE reg_no LIKE '%".$search."%'
      ";
     }
     else
     {
      $query = "
       SELECT * FROM sdc_marks_card_bpet ORDER BY reg_no
      ";
     }
     $result = $conn->query($query);


// add

?>
<?php
function numberTowords(float $number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'one', 2 => 'two',
        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
        7 => 'seven', 8 => 'eight', 9 => 'nine',
        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred','thousand','lakh', 'crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
}

extract($_POST);
if(isset($convert))
{
echo "<p align='center' style='color:blue'>".numberTowords("$num")."</p>";
}
function language($lang){
if($lang==1){
    echo "Kannada";
}
if($lang==3){
    echo "Hindi";
}
if($lang==8){
    echo "Urdu";
}
if($lang==9){
    echo "Sanskrit";
}
}
// subject function
$s1;
$s2;
$s3;
$s;
$s1c;
$s2c;
$s3c;
$s4c;
function subj($id) {
  global $s1,$s2,$s3,$s,$s1c,$s2c,$s3c,$s4c;
if($id==1){
  $s1="BASIC MATHS";
  $s2=" BUSINESS STUDIES";
  $s3="ACCOUNTANCY";
  $s="STATISTICS";
  $s1c=75;
  $s2c=27;
  $s3c=30;
  $s4c=31;

}
if($id==2){
  $s1="ECONOMICS";
  $s2="BUSINESS STUDIES";
  $s3="ACCOUNTANCY";
  $s="COMPUTER SCIENCE";
  $s1c=22;
  $s2c=27;
  $s3c=30;
  $s4c=41;
}
if($id==3){
  $s1="ECONOMICS";
  $s2="BUSINESS STUDIES";
  $s3="ACCOUNTANCY";
  $s="STATISTICS";
  $s1c=22;
  $s2c=27;
  $s3c=30;
  $s4c=31;
}
if($id==4){
  $s1="PHYSICS";
  $s2="CHEMISTRY";
  $s3="MATHEMATICS";
  $s="COMPUTER SCIENCE";
  $s1c=33;
  $s2c=34;
  $s3c=35;
  $s4c=41;
}
if($id==5){
  $s1="PHYSICS";
  $s2="CHEMISTRY";
  $s3="MATHEMATICS";
  $s="BIOLOGY";
  $s1c=33;
  $s2c=34;
  $s3c=35;
  $s4c=36;
}
}
function classobtained($total){
  // case $average >= 33 && $average <= 60:
$average=($total/600)*100;
if ($average>=85)
{
	echo "Distinction <br>".round($average, 2);
}
else if ($average>=60)
{
	echo "First Class <br>".round($average, 2);
}
else if($average>=45)
{
    echo "Second Class <br>".round($average, 2);
}
else if($average>=35)
{
    echo "Pass <br>".round($average, 2);
}
else
{
	echo "Fail <br>".round($average, 2);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Card</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    
<?php

    foreach($result as $row)
    {
        subj($row['class_code']);
     ?>
     <div style="border:4px solid green;border-color:green; height: 1070px; padding:10px;" class="margin">
        <div class="grid-container" >
            <div class="cc">College Code : MM-0174</div>
            <div class="ph" style="padding-right:6px;">Ph : 8861731246</div>
            <div class="img" ><img src="./logo.jpg" width="120px" alt="" srcset=""></div>
            <div class="title"  style="font-weight: bolder;line-height:normal;">Smt. Danamma Channabasavaiah (SDC) <br> Independent P.U. College
            <p style="font-size:15px;line-height:26px;">(Recognised by Govt. of Karnataka) <br> <span style="font-size:20px;font-weight: bold;">Near Canara Bank, Kolar Main Road, Bangarpet-563114</span></p>
            <p style="border:3px solid green;border-color:green; color: red; font-weight: bold;width: 350px;">I PUC MARKS CARD</p>
    
        </div>
          </div>
      
          <p style="font-size: 15px;padding:10px;">This is to certify that the candidate mentioned below has completed the I PUC course and has passed the I PUC Examination with the following details</p>
          <div class="grid-container1" style="font-size: 20px;" >

            <div class="sats">SATS No.<span style="font-weight:600;"><?php echo $row['sats_no'];?></span></div>
            <div class="studentnumber">Student No. <span style="font-weight:600;"> <?php echo $row['student_no'];?></span> </div>
        <div style="grid-row: span 4;text-align: center;"><div style="border:2px solid black;height:150px;width:130px;">PHOTO</div></div>
        <div class="sats " style="grid-column: span 2 ;">Student Name. <span style="font-weight:600;"><?php echo $row['student_name'];?></span></div>
        <div class="sats" style="grid-column: span 2 ;">Father Name. <span style="font-weight:600;"><?php echo $row['father_name'];?></span> &nbsp;&nbsp;&nbsp;&nbsp;Register No.<span style="font-weight:600;">&nbsp;<?php echo $row['reg_no'];?></span></div>
        <div class="studentnumber" style="grid-column: span 2 ;">Mother Name. <span style="font-weight:600;"><?php echo $row['mother_name'];?></span>  &nbsp;&nbsp;&nbsp;&nbsp;Date of Passing<span style="font-weight:600;">&nbsp;<?php echo $row["year_of_passing"]?></span> </div>
  
              </div>
             
<!-- table -->
<table style="border:1px solid rgb(255, 72, 0); width: 100%;font-size: 19px;font-weight: 500;">
<tbody style="text-align:center;">
<tr>
    <td>Subjects</td>
    <td rowspan="2">Subject Code</td>
    <td rowspan="2">Max Marks</td>
    <td rowspan="2">Min Marks</td>
    <td colspan="2">Marks Obtained</td>
    <td rowspan="2" colspan="2">Class Obtained</td>
</tr>
<tr>
    <td style="font-weight:bold;">Part-1 Languages</td>
    <td>In figures</td>
    <td>In Words</td>
</tr>
<tr>
    <td colspan="1"><?php language($row['langcode']);?></td>
   <td><?php echo $row['langcode'];?></td>
   <td>100</td>
   <td>35</td>
   <td><?php echo $row['l1'];?></td>
   <td><?php echo numberTowords($row['l1']);?></td>
   <td rowspan="7" colspan="2"><?php classobtained($row['gt'])?>%
   </td>

</tr>
<tr>
    <td colspan="1"><?php echo "English" ?></td>
   <td>2</td>
   <td>100</td>
   <td>35</td>
   <td><?php echo $row['l2'];?></td>
   <td><?php echo numberTowords($row['l2']);?></td>
  

</tr>
<tr>
    <td colspan="1" style="font-weight:bold;">Part-2 Optionals</td>


</tr>
<tr>
    <td colspan="1"><?php echo $s1 ?></td>
   <td><?php echo $s1c ?></td>
   <td>100</td>
   <td>35</td>
   <td><?php echo $row['s1'];?></td>
   <td><?php echo numberTowords($row['s1']);?></td>
  

</tr>
<tr>
    <td colspan="1"><?php echo $s2 ?></td>
   <td><?php echo $s2c ?></td>
   <td>100</td>
   <td>35</td>
   <td><?php echo $row['s2'];?></td>
   <td><?php echo numberTowords($row['s2']);?></td>
  

</tr>
<tr>
    <td colspan="1"><?php echo $s3 ?></td>
   <td><?php echo $s3c ?></td>
   <td>100</td>
   <td>35</td>
   <td><?php echo $row['s3'];?></td>
   <td><?php echo numberTowords($row['s3']);?></td>
  

</tr>
<tr>
    <td colspan="1"><?php echo $s ?></td>
   <td><?php echo $s4c ?></td>
   <td>100</td>
   <td>35</td>
   <td><?php echo $row['s4'];?></td>
   <td><?php echo numberTowords($row['s4']);?></td>
  

</tr>
<tr style="font-weight: bold;">
    <td colspan="1">Total</td>
   <td></td>
   <td>600</td>
   <td>210</td>
   <td><?php echo $row['gt'];?></td>
   <td></td>
   <td></td>

</tr>
<tr>
    <td colspan="1" style="font-weight: bolder;">Total in Words</td>
   <td colspan="6"><?php echo numberTowords($row['gt']);?></td>
  
  

</tr>
</tbody>
</table>

<div class="grid-container4">
<div>Signature of the Student</div>
<div style="text-align: right;padding-right:50px;">Signature of the principal</div>
    </div>
    </div>

     <?php
    }

?>
    

    <script>
               window.onafterprint = window.close;
        window.print();
    </script>
</body>
</html>