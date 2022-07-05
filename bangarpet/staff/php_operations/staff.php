<?php
$img_path = $_FILES['file']['name'];
 
// get the extension of the image to generate base64 string
$type = pathinfo($img_path, PATHINFO_EXTENSION);
 
// get the file data
$img_data = file_get_contents($img_path);
 
// get base64 encoded code of the image
$base64_code = base64_encode($img_data);
 
// create base64 string of image
$base64_str = 'data:image/' . $type . ';base64,' . $base64_code;

echo json_encode(array("statusCode"=>200 ,'code'=>$base64_str));
    

?>