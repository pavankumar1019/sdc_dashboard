<?php
include('../db_bpet_sdc/db.php');

$sql = "INSERT INTO tc (`name`)
VALUES (".$row['id'].")";

if (mysqli_query($conn, $sql)) {
  $last_id = mysqli_insert_id($conn);
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>