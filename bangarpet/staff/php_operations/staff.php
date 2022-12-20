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
	 
	 // Process your response here
	//  echo $response;
	

}


if($_POST['type']==2){
	if($_SESSION['OTP_staff']==$_POST['otp']){
		echo json_encode(array("statusCode"=>200));
		$_SESSION['name_staff']=$_POST['name'];
		$_SESSION['branch_staff']=$_POST['branch'];
		$_SESSION['role_staff']=$_POST['role'];
		$_SESSION['id']=$_POST['id'];
		$_SESSION['profile_staff']=$_POST['img'];
		$_SESSION['class_id']=$_POST['class_id'];
		$_SESSION['class']=$_POST['class'];
	}else{
		echo json_encode(array("statusCode"=>201));

	}
}
if($_POST['type']==4){
	$user_id=$_POST['user_id'];
	$key=$_POST['key'];
	$branch=$_POST['branch'];
	$role=$_POST['role'];
	$sql = "SELECT * FROM `staff` WHERE `user_id`='$user_id' AND `ukey`='$key' AND `branch`='$branch' AND `role`='$role'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	// Fstmsms($sender_id,$message,$number);
	$number=$row['phone_no'];
	$otp=rand(100000,999999);
	Fstmsms($number,$otp);
	$_SESSION['OTP_staff']=$otp;
	echo json_encode(array(
		"statusCode"=>200,
		"phone"=>substr($row['phone_no'], -3),
		"name"=>$row['name'],
		"branch"=>$row['branch'],
        "role"=>$row['role'],
        "img"=>$row['photo'],
		"id"=>$row['id'],
		"class"=>$row['class'],
        "class_id"=>$row['class_id'],
		"value"=>$otp
	));
  }
} 
else {
	echo json_encode(array("statusCode"=>201));
}
}
?>