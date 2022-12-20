<?php

session_start();

include ('../db_bpet_sdc/db.php');

function Fstmsms($number,$otp){
	// Account details
	$apiKey = urlencode('NDM1OTMzNTA0MjUyMzk2MzVhNGUzMDQ4NzY3NTM5Njc=');
	
	// Message details
	$numbers = array($number);
	$sender = urlencode('SDCPUC');
$message =  rawurlencode('Your OTP : '.$otp.' Do not share OTP
SDC College Bangarpet ');
	
	$numbers = implode(',', $numbers);
   
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
   
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);

}


if($_POST['type']==2){
	if($_SESSION['OTP']==$_POST['otp']){
		echo json_encode(array("statusCode"=>200));
		$_SESSION['name']=$_POST['name'];
		$_SESSION['branch']=$_POST['branch'];
	}else{
		echo json_encode(array("statusCode"=>201));

	}
}
if($_POST['type']==4){
	$user_id=$_POST['user_id'];
	$key=$_POST['key'];
	$branch=$_POST['branch'];
	$sql = "SELECT * FROM `user_office` WHERE `user_name`='$user_id' AND `user_key`='$key' AND `branch`='$branch'";
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
		"value"=>$otp
	));
  }
} 
else {
	echo json_encode(array("statusCode"=>201));
}
}
?>