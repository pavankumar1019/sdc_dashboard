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

<div class="form-group col-12">
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
   <div class="form-group col-12">
   <div class="form-check form-check-inline">
   <div class="custom-control form-control-lg custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck1">
    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
</div>
</div>
<div class="form-check form-check-inline">
<div class="custom-control form-control-lg custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck1">
    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
</div>
</div>
<div class="form-check form-check-inline">
<div class="custom-control form-control-lg custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck1">
    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
</div>
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