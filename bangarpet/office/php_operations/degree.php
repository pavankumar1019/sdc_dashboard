<?php
include('../db_bpet_sdc/db.php');
if($_POST['type']=="loadtotal"){
     $sql="SELECT * FROM degree_data";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) {
        foreach($result as $row){
            echo '
            <tr>
            <td scope="row"  style="border:1px solid black;">'.$row['id'].'</td>
            <td  style="border:1px solid black;">'.$row['name'].'</td>
            <td   style="border:1px solid black;">'.$row['fathername'].'</td>
            <td   style="border:1px solid black;">'.$row['phone_number'].'</td>
            <td   style="border:1px solid black;"><div class="custom-control form-control-lg custom-checkbox">
          <input type="checkbox" class="check custom-control-input" name="reg_no[]" id="reg_no" value="'.$row['id'].'">
          <label class="custom-control-label" for="reg_no"  style="user-select: none;">Check Here</label>
      </div></td>
          </tr>
            ';
        }
    } else {
   echo "Null No Record Found..";
}

}

?>