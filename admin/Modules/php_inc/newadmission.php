<?php 
$target_dir = "uploads/";
if(isset($_POST["student_name"])) {
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$target_file = $target_dir."pavan.".$extension;

$uploadOk = 1;
$imageTemp = $_FILES["file"]["tmp_name"];       
// Compress size and upload image 
$compressedImage = compressImage($imageTemp, $target_file, 50); 
if($compressedImage){ 
    $status = 'success'; 
    $statusMsg = "Image compressed successfully."; 
}else{ 
    $statusMsg = "Image compress failed!"; 
} 
// move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
// Check if image file is a actual image or fake image
echo $statusMsg;
}

