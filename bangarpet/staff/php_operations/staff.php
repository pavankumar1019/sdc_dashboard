<?php
$bin_string = file_get_contents($_FILES["file"]["tmp_name"]);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($bin_string);

echo $base64;

echo $_FILES["file"]["name"];


?>