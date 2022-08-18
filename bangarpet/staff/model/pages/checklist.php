<?php
include('./db_bpet_sdc/db.php');
                if($_SESSION['id']==13 || $_SESSION['id']==21){

                 ?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">

            <form>
  <div class="form-row">
  <select class="form-control form-control-lg">
  <option>--Select Class--</option>
  <?php
                        
                        $sql="SELECT * FROM class";
                     $result=$conn->query($sql);
                     foreach($result as $row){
                         echo '<option value="'.$row['id'].'">'.$row['section'].' - '.$row['name'].'</option>';
                     }
                     
                        ?>
</select>
   
    
    
</form>


            </div>
        </div>
    </div>
</div>




<?php
                }
                ?>