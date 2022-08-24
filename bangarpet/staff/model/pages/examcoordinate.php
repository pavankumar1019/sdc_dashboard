<?php
include('./db_bpet_sdc/db.php');
                if($_SESSION['id']==32 || $_SESSION['id']==21){

                 ?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content" style="color:#333333">

                <form id="exam">
                    <div class="form-row" >
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Test Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Ex. Unit Test 1" name="name">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Min Marks</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1"
                                  name="minmarks"
                                >
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Max Marks</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1"
                                    name="maxmarks"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Class</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="class">
                            <option value="1">1st PUC</option>
                            <option value="2">2nd PUC</option>
                        
                        </select>
                    </div>
                    <input type="hidden" name="type" value="add">
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-info" id="continue"> ADD </button>
                    </div>
                </form>
            </div>
            <div id="dynamic_content">
                
            </div>
        </div>
    </div>
</div>
<?php
                }
                ?>