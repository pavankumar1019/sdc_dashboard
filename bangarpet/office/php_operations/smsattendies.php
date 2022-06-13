<?php
include('../db_bpet_sdc/db.php');
if($_POST['type']=="add_atten")
{
    $class_id='22';
    $date=date("Y-m-d");
    $reg_no=$_POST['reg_no'];
    $status=$_POST['status'];
    $sqlcal = "INSERT INTO `calendar`( `Date`) 
	VALUES ('$date')";
 $conn->query($sqlcal);
//  validate already submited attendance
$sqlvalidate = "SELECT * FROM tbl_absentees WHERE Date='$date' AND Class='$class_id'";
$result = $conn->query($sqlvalidate);

if ($result->num_rows > 0) {
    echo "Attendance  submitted";
} else {
// operation sumbmit
if (!empty($reg_no) AND ($status)) {
    $values = array_combine($reg_no, $status);
    foreach ($values as $id => $stat)  {
if($stat=="A"){

// echo $id." &nbsp;Is ".$stat."&nbsp; Message Sent<br> ";

$sql = "INSERT INTO `tbl_absentees`( `Date`, `Status`, `RollNo`, `Class`, `msg_status`) 
VALUES ('$date','$stat','$id','$class_id', 'sent')";

}else{
// echo $id." &nbsp;Is ".$stat."&nbsp;<br> ";
  
$sql = "INSERT INTO `tbl_absentees`( `Date`, `Status`, `RollNo`, `Class`, `msg_status`) 
VALUES ('$date','$stat','$id','$class_id', '')";

}
$conn->query($sql);
   }
}
// submit
}

// validate close
   
}

if($_POST['type']=="getlist"){
    $date=date("Y-m-d");
    $sqlvalidate = "SELECT * FROM tbl_absentees WHERE Date='$date' AND Class='".$_POST['class_id']."'";
$result = $conn->query($sqlvalidate);

if ($result->num_rows > 0) {
    echo "Attendance  submitted";
} else {
    $sql="SELECT * FROM tbl_admission where Class='".$_POST['class_id']."'";
    $result=$conn->query($sql);
    foreach($result as $row){
        echo '
        <tr class="unread">
        <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td>
        <td>
            <h6 class="mb-1">'.$row['StudentName'].'</h6>
            <p class="m-0">'.$row['RollNo'].'</p>
        </td>
        <td>
            <h6 class="text-muted" id="'.$row['RollNo'].'"></h6>
        </td>
        <input type="hidden" name="reg_no[]" id="reg_no" value="'.$row['RollNo'].'"/>
        <input type="hidden" name="status[]" id="status" class="'.$row['RollNo'].'" value="P"  />
        <td><a onclick="markabsent('.$row['RollNo'].')" class="label theme-bg2 text-white f-20" style="cursor: pointer;">A</a><a  style="cursor: pointer;" onclick="markpresent('.$row['RollNo'].')" class="label theme-bg text-white f-20">P</a></td>
        </tr>
        
        ';
    }
}
}

// load total student data
if($_POST['type']=="loadtotal"){
    
$sql = 'SELECT * FROM tbl_admission where Class="'.$_POST['class_code'].'"';
$result=$conn->query($sql);

if($result->num_rows > 0){
    echo $result->num_rows;
}else{
    echo "0";
}

}

if($_POST['type']=="loadabsenties"){
    $date=date("Y-m-d");

     $sql = "SELECT * FROM tbl_absentees WHERE Date='$date' AND Class='".$_POST['class_code']."' AND Status='A'";
$result=$conn->query($sql);

if($result->num_rows > 0){
    echo $result->num_rows;
}else{
    echo "0";
}

}

?>