<?php

include ('../db_bpet_sdc/db.php');

if($_POST['type']=="enroll"){
	$sql = "SELECT * FROM `staff` WHERE `phone_no`='".$_POST['phone']."' AND `name`='".$_POST['name']."' AND `branch`='".$_POST['branch']."'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode(array("statusCode"=>201,'code'=>'Already Enrolled'));
}else{
    // convert to base 64 
    $bin_string = file_get_contents($_FILES["file"]["tmp_name"]);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($bin_string);
   $image= json_encode(array("statusCode"=>200,'code'=>$base64));


    $sqlinsert = "INSERT INTO `calendar`( `name`, `phone_no`, `photo`, `branch`) 
	VALUES ('".$_POST['name']."', '".$_POST['phone']."', '$image', '".$_POST['branch']."' )";
if($conn->query($sqlinsert)==TRUE){
  
}
else{
    echo json_encode(array("statusCode"=>202,'code'=>'failed to enroll'));

}
  
}
   
}
?>