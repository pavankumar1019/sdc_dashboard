<?php
if($_POST['type']=="getcount"){

  $query = "
  SELECT * FROM new_admission_bpet
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  echo $statement->rowCount();

}
?>