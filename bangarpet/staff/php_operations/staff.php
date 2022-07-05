<?php

if($_POST['type']=="enroll"){
    $bin_string = file_get_contents($_FILES["file"]["tmp_name"]);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($bin_string);
    echo json_encode(array("statusCode"=>200));
}
?>