<?php
	session_start();
	error_reporting(0);
    include ('./db_bpet_sdc/db.php');
	if($_POST["type"]==2){
		    $userId=$_POST['userId'];
            $key=$_POST['key'];
			$result = mysqli_query($connect,"SELECT * FROM user_office WHERE user_name='$userId' AND user_key='$key'");
			$row  = mysqli_fetch_array($result);
            foreach($row as $dt){
                $phone=$dt['phone_no'];
            }
			if(is_array($row)){
		// Account details
	$apiKey = urlencode('NDM1OTMzNTA0MjUyMzk2MzVhNGUzMDQ4NzY3NTM5Njc=');
	$rndno=rand(100000, 999999);
	// Message details
	$numbers = array(918123456789);
	$sender = urlencode('SDCPUC');
	$message = rawurlencode('Dear # your score in # is 
#Grand Total 
SDC College OTP:'.$rndno);
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
				/* get response */
				$output = curl_exec($ch);
				/* Print error if any */
				if(curl_errno($ch))
				{
					echo 'error:' . curl_error($ch);
				}
				curl_close($ch);
				$_SESSION['otp']=$rndno;
				echo json_encode(array("statusCode"=>200));
			}
			else{ 
				echo "Mobile number not exist !";
			}
	}
	if($_POST["type"]==3){
		if($_POST["otp"]==$_SESSION['otp']){
			echo json_encode(array("statusCode"=>200));
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}
	}
?>