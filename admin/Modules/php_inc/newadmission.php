<?php 
include '../../php_include/db/db.php';
// function
function compressImage($source, $destination, $quality) { 
    // Get image info 
    $imgInfo = getimagesize($source); 
    $mime = $imgInfo['mime']; 
     
    // Create a new image from file 
    switch($mime){ 
        case 'image/jpeg': 
            $image = imagecreatefromjpeg($source); 
            break; 
        case 'image/png': 
            $image = imagecreatefrompng($source); 
            break; 
        case 'image/gif': 
            $image = imagecreatefromgif($source); 
            break; 
        default: 
            $image = imagecreatefromjpeg($source); 
    } 
     
    // Save image 
    imagejpeg($image, $destination, $quality); 
     
    // Return compressed image 
    return $destination; 
} 

// upload date

$target_dir = "uploads/";
if(isset($_POST["student_name"])) {
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$target_file = $target_dir.$_POST["reg_no_sslc"].".".$extension;

$uploadOk = 1;
$imageTemp = $_FILES["file"]["tmp_name"];       
// Compress size and upload image 
$compressedImage = compressImage($imageTemp, $target_file, 50); 
if($compressedImage){ 
    $subjects=$_POST['l1'].",".$_POST['l2'].",".$_POST['l3'].$_POST['Science'].",".$_POST['Maths'].",".$_POST['Social'];
$marks=$_POST['l1_m'].",".$_POST['l2_m'].",".$_POST['l3_m'].$_POST['s1_m'].",".$_POST['s2_m'].",".$_POST['s3_m'];
$per=($_POST['marks']/625)*100;
 $insert_data = array(
"student_id"=>'null',
"student_name"=>$_POST['student_name'],

 );
 $table_columns= implode(',', array_keys($insert_data));
 $table_data= implode("', '", $insert_data);
$sql = "INSERT INTO new_admission_bpet ($table_columns) VALUES ('$table_data') "; 
if($conn->query($sql)== TRUE){
    $status = 'success'; 
    $statusMsg = "Image compressed successfully."; 
}else{
    $statusMsg="Failed to add";
}
  
}else{ 
    $statusMsg = "Image compress failed!"; 
} 



// move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
// Check if image file is a actual image or fake image
echo $statusMsg;
}

