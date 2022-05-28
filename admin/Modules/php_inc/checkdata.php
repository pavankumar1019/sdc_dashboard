<?php
include '../../php_include/db/db.php';
$sql = 'SELECT * FROM new_admission_bpet where student_aadhar LIKE "%'.str_replace(' ', '%', $_POST['aadhar']).'%"'; 
$result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        echo('USER_AVAILABLE');
    }
    else
    {
        echo('Not Available');
    }
?>