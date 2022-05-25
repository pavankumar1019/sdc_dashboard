<?php 
$uploadDir = 'uploads/'; 
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
); 
 
// If form is submitted 
if(isset($_POST['student_name']) || isset($_POST['student_aadhar']) || isset($_POST['reg_no_sslc'])){ 
    // Get the submitted form data 
    $student_name = $_POST['student_name']; 
    $student_aadhar = $_POST['student_aadhar']; 
     
    // Check whether submitted data is not empty 
    if(!empty($student_name) && !empty($student_aadhar)){ 
        // Validate email 

             
            // Upload file 
            $uploadedFile = ''; 
            if(!empty($_FILES["file"]["name"])){ 
                 
                // File path config 
                $fileName = basename($_FILES["file"]["name"]); 
                $targetFilePath = $uploadDir . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                 
                // Allow certain file formats 
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
                if(in_array($fileType, $allowTypes)){ 
                    // Upload file to the server 
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                        $uploadedFile = $fileName; 
                    }else{ 
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    } 
                }else{ 
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
                } 
            } 
             
            // if($uploadStatus == 1){ 
            //     // Include the database config file 
            //     include_once '../../../php_include/db/db.php'; 
                 
            //     // Insert form data in the database 
            //     $insert = $conn->query("INSERT INTO form_data (name,email,file_name) VALUES ('".$name."','".$email."','".$uploadedFile."')"); 
                 
            //     if($insert){ 
            //         $response['status'] = 1; 
            //         $response['message'] = 'Form data submitted successfully!'; 
            //     } 
            // } 
        } 
    }else{ 
         $response['message'] = 'Please fill all the mandatory fields (name and email).'; 
    } 

 
// Return response 
echo json_encode($response);