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
	if($_POST["type"]==3){
		if($_POST["otp"]==$_SESSION['otp']){
			echo json_encode(array("statusCode"=>200));
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}
	}
?>