<?php 
include '../../php_include/db/db.php';
// function
// function compressImage($source, $destination, $quality) { 
//     // Get image info 
//     $imgInfo = getimagesize($source); 
//     $mime = $imgInfo['mime']; 
     
//     // Create a new image from file 
//     switch($mime){ 
//         case 'image/jpeg': 
//             $image = imagecreatefromjpeg($source); 
//             break; 
//         case 'image/png': 
//             $image = imagecreatefrompng($source); 
//             break; 
//         case 'image/gif': 
//             $image = imagecreatefromgif($source); 
//             break; 
//         default: 
//             $image = imagecreatefromjpeg($source); 
//     } 
     
//     // Save image 
//     imagejpeg($image, $destination, $quality); 
     
//     // Return compressed image 
//     return $destination; 
// } 

// // upload date

// $target_dir = "uploads/";
// if(isset($_POST["student_name"])) {
// $temp = explode(".", $_FILES["file"]["name"]);
// $extension = end($temp);
// $target_file = $target_dir.$_POST["reg_no_sslc"].".".$extension;

// $uploadOk = 1;
// $imageTemp = $_FILES["file"]["tmp_name"];       
// // Compress size and upload image 
// $compressedImage = compressImage($imageTemp, $target_file, 50); 
// if($compressedImage){ 
   
// }else{ 
//     echo "<p style='color:green;font-weight:bold;font-size:20px;'>Failed to compress image !</p>";
// } 
// }

// insert data
if(isset($_POST["student_name"])) {
$subjects=$_POST['l1'].",".$_POST['l2'].",".$_POST['l3'].",Science,Maths,Social";
$marks=$_POST['l1_m'].",".$_POST['l2_m'].",".$_POST['l3_m'].",".$_POST['s1_m'].",".$_POST['s2_m'].",".$_POST['s3_m'];
$per=(($_POST['marks'])/625)*100;
 $insert_data = array(
"sats"=>'null',
"student_name"=>$_POST['student_name'],
"student_aadhar"=>$_POST['student_aadhar'],
 "dob"=>$_POST['dob'],
 "gender"=>$_POST['check'],
 "place_of_birth"=>$_POST['place_of_birth'],
 "state"=>$_POST['state'],
 "district"=>$_POST['district'],
 "religion"=>$_POST['religion'],
 "caste"=>$_POST['caste'],
 "subcaste"=>$_POST['subcaste'],
 "address"=>$_POST['address'],
 "mobile_no"=>$_POST['mobile_no'],
 "email_id"=>$_POST['email_id'],
 "father_name"=>$_POST['father_name'],
 "mother_name"=>$_POST['mother_name'],
 "father_occ"=>$_POST['father_occ'],
 "mother_occ"=>$_POST['mother_occ'],
 "name_of_g"=>$_POST['name_of_g'],
 "g_address"=>$_POST['g_address'],
 "annual_income"=>$_POST['annual_income'],
 "name_of_preschool"=>$_POST['name_of_preschool'],
 "address_of_preschool"=>$_POST['address_of_preschool'],
 "reg_no_sslc"=>$_POST['reg_no_sslc'],
 "year_of_passing"=>$_POST['year_of_passing'],
 "subjects"=>$subjects,
 "marks"=>$marks,
 "total"=>$_POST['marks'],
 "per"=>$per,
 "photo"=>'null',
 "combination_opted"=>$_POST['combination_opted'],
 "lang_opted"=>$_POST['lang_opted'],
 );
 $table_columns= implode(',', array_keys($insert_data));
 $table_data= implode("', '", $insert_data);
$sql = "INSERT INTO new_admission_bpet ($table_columns) VALUES ('$table_data') "; 
if($conn->query($sql)== TRUE){
    echo "<p style='color:blue;font-weight:bold;font-size:20px;'>Record Added :)</p>";
}else{
    echo "<p style='color:red;font-weight:bold;font-size:20px;'>Failed to add</p>";
}
}


