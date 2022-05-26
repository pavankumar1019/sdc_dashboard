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
    $method = 'sendMessage';
	
	// Message details
	$mobileno = $_POST['mobile_no'];
$content =  rawurlencode('Dear '.$_POST['student_name'].' 
Your admission is confirmed.Thank you for choosing our college.
SDC COLLEGE BANGARPET-563114');


 
	// Prepare data for POST request
	$data = array('method' => $method, 'mobileno' => $mobileno, 'content' => $content, 'loginid' =>'Sdcbpet2', 'auth_scheme'=>'PLAIN', 'password'=>'Sajsdc@25');
 
	// Send the POST request with cURL
	$ch = curl_init('https://smsforall.com/portal/receive_api/api_request?method=sendMessage&mobileno=7483737698&content='.$content.'&loginid=Sdcbpet2&auth_scheme=PLAIN&password=Sajsdc@25');
	curl_setopt($ch, CURLOPT_POST, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	// Process your response here
	// echo $response;
    echo "done";
}else{
    echo "failed";
}
}


