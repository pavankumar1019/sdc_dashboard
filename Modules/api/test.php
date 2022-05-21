<?php
    if(isset($_POST["reg_no"]))
    {
      $search = mysqli_real_escape_string($conn, $_POST["query"]);
      $query = "
       SELECT * FROM sdc_marks_card_bpet 
       WHERE reg_no LIKE '%".$search."%'
       OR student_name LIKE '%".$search."%' 
      ";
     }
     else
     {
      $query = "
       SELECT * FROM sdc_marks_card_bpet ORDER BY reg_no
      ";
     }
     $result = $conn->query($query);
?>