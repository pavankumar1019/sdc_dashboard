<?php

session_start();

include ('../db_bpet_sdc/db.php');

function Fstmsms($number,$otp){
	$method = 'sendMessage';
	
	// Message details

$content =  rawurlencode('Dear OTP:'.$otp.'  
to login into Office Portal.
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
	}else{
		echo json_encode(array("statusCode"=>201));

	}
}
if($_POST['type']==4){
	$user_id=$_POST['user_id'];
	$key=$_POST['key'];
	$sql = "SELECT * FROM `user_office` WHERE `user_name`='$user_id' AND `user_key`='$key'";
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
		"name"=>$row['name']
	));
  }
} 
else {
	echo json_encode(array("statusCode"=>201));
}
}
?>