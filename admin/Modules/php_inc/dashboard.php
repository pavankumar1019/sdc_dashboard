<?php
include '../../php_include/db/db.php';
$sql = "SELECT * FROM new_admission_bpet";
$result = mysqli_query($conn, $sql);
echo mysqli_num_rows($result);
?>