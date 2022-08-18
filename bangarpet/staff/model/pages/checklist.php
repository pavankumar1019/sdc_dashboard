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
                                    <input type="checkbox" class="custom-control-input" id="studentname">
                                    <label class="custom-control-label" for="studentname">Student Name</label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="custom-control form-control-lg custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="fathername">
                                    <label class="custom-control-label" for="fathername">Father Name</label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="custom-control form-control-lg custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="languageobtained">
                                    <label class="custom-control-label" for="languageobtained">Language Obtained</label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="custom-control form-control-lg custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="languageobtained">
                                    <label class="custom-control-label" for="languageobtained">Language Obtained</label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="custom-control form-control-lg custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="languageobtained">
                                    <label class="custom-control-label" for="languageobtained">Language Obtained</label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="custom-control form-control-lg custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="languageobtained">
                                    <label class="custom-control-label" for="languageobtained">Language Obtained</label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="custom-control form-control-lg custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="languageobtained">
                                    <label class="custom-control-label" for="languageobtained">Language Obtained</label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="custom-control form-control-lg custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="languageobtained">
                                    <label class="custom-control-label" for="languageobtained">Language Obtained</label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="custom-control form-control-lg custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="languageobtained">
                                    <label class="custom-control-label" for="languageobtained">Language Obtained</label>
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