<?php
	session_start();
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include ('./db_bpet_sdc/db.php');
	if($_POST["type"]==2){
		    $userId=$_POST['userId'];
            $key=$_POST['key'];
            $sql = "SELECT * FROM user_office WHERE user_name='$userId' AND user_key='$key'";
            $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            // Fstmsms($sender_id,$message,$number);
            $number=$row['phone_no'];
            $otp=rand(1000,9999);
            Fstmsms($number,$otp);
            $_SESSION['OTP_staff']=$otp;
            echo json_encode(array(
                "statusCode"=>200,
                "phone"=>substr($row['phone_no'], -3),
                "name"=>$row['name'],
           
                "value"=>$otp
            ));
          }
        } 
        else {
            echo json_encode(array("statusCode"=>201));
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





  // function to login 
  function Fstmsms($number,$otp){
 	// Account details
   $apiKey = urlencode('NDM1OTMzNTA0MjUyMzk2MzVhNGUzMDQ4NzY3NTM5Njc=');
	
   // Message details
   $numbers = array($number);
   $sender = urlencode('SDCPUC');
   $message = rawurlencode('Dear # your score in # is 
   ##Grand Total #
   SDC College OTP:'.$otp);
  
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
   echo $response;
  
  }
  
?>