<?php
	session_start();
	error_reporting(0);
    include ('./db_bpet_sdc/db.php');
	if($_POST["type"]==2){
		    $userId=$_POST['userId'];
            $key=$_POST['key'];
			$result = mysqli_query($connection,"SELECT * FROM user_office WHERE user_name='$userId' AND user_key='$key'");
			$row  = mysqli_fetch_array($result);
            foreach($row as $dt){
                $phone=$dt['phone_no'];
            }
			echo $phone;
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