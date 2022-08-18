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

<div class="col-12">
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
</div>
   <div class="col-12">
   <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">2</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
  <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
</div>
   </div>
    
    
</form>


            </div>
        </div>
    </div>
</div>




<?php
                }
                ?>