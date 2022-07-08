<?php
include('./db_bpet_sdc/db.php');
?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Download Consolidates</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./dashboard.php?page=home"><i
                                                class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Class Consolidates</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Download</h5>
                                    </div>
                                    <div class="card-block">
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Select Class</label>
                                                <select class="form-control" id="exampleFormControlSelect1"
                                                    name="class_id" required>
                                                    <?php
                        
   $sql="SELECT * FROM class";
$result=$conn->query($sql);
foreach($result as $row){
    echo '<option value="'.$row['id'].'">'.$row['section'].' - '.$row['name'].'</option>';
}

   ?>
                                                </select>
                                            </div>
                                            <input type="hidden" name="id" id="id">
                                            <input type="hidden" name="type" id="downloadconsolidate">

                                            <button type="submit" align="center"><i
                                                    class="feather icon-download"></i></button>
                                        </form>




                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>