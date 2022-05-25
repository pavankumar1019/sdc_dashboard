<?php 
$target_dir = "uploads/";
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$target_file = $target_dir."pavan.".$extension;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["student_name"])) {
  $check = getimagesize($_FILES["file"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".".$target_file;
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// If form is submitted 
