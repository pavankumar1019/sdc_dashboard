<?php
session_start();

include ('../db_bpet_sdc/db.php');

if($_POST['type']=="enroll"){
	$sql = "SELECT * FROM `staff` WHERE `phone_no`='".$_POST['phone']."' AND `name`='".$_POST['name']."' AND `branch`='".$_POST['branch']."'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode(array("statusCode"=>201,'code'=>'Already Enrolled'));
}else{
    // convert to base 64 
    $bin_string = file_get_contents($_FILES["file"]["tmp_name"]);
    $image = 'data:image/' . $type . ';base64,' . base64_encode($bin_string);
  
    $sqlinsert = "INSERT INTO `staff`( `name`, `phone_no`, `photo`, `branch`) 
	VALUES ('".$_POST['name']."', '".$_POST['phone']."', '$image', '".$_POST['branch']."' )";
if($conn->query($sqlinsert)==TRUE){
    echo json_encode(array("statusCode"=>200,'code'=>$image));
}
else{
    echo json_encode(array("statusCode"=>202,'code'=>'failed to enroll'));

}
  
}
   
}

function Fstmsms($number,$otp){
	$method = 'sendMessage';
	
	// Message details

$content =  rawurlencode('Dear OTP:'.$otp.'  
to login into staff Portal.
SDC COLLEGE BANGARPET-563114');


 
 
	// Send the POST request with cURL
	$ch = curl_init('https://smsforall.com/portal/receive_api/api_request?method=sendMessage&mobileno='.$number.'&content='.$content.'&loginid=Sdcbpet2&auth_scheme=PLAIN&password=Sajsdc@25');
	curl_setopt($ch, CURLOPT_POST, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);

}


if($_POST['type']==2){
	if($_SESSION['OTP']==$_POST['otp']){
		echo json_encode(array("statusCode"=>200));
		$_SESSION['name']=$_POST['name'];
		$_SESSION['branch']=$_POST['branch'];
		$_SESSION['role']=$_POST['role'];
	}else{
		echo json_encode(array("statusCode"=>201));

	}
}
if($_POST['type']==4){
	$user_id=$_POST['user_id'];
	$key=$_POST['key'];
	$branch=$_POST['branch'];
	$role=$_POST['role'];
	$sql = "SELECT * FROM `staff` WHERE `user_id`='$user_id' AND `u_key`='$key' AND `branch`='$role'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	// Fstmsms($sender_id,$message,$number);
	$number=$row['phone_no'];
	$otp=rand(100000,999999);
	Fstmsms($number,$otp);
	$_SESSION['OTP']=$otp;
	echo json_encode(array(
		"statusCode"=>200,
		"phone"=>substr($row['phone_no'], -3),
		"name"=>$row['name'],
		"branch"=>$row['branch'],
        "role"=>$row['role']
	));
  }
} 
else {
	echo json_encode(array("statusCode"=>201));
}
}
?>