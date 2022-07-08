<?php
include('./db_bpet_sdc/db.php');

                if($_SESSION['role_staff']=="P"){
                   
?>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="enroll">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Assign Class</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Assign Class</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="class_id" required>
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
                    <input type="hidden" name="type" id="type">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="continue">Accept</button>
                </div>
            </form>
        </div>
    </div>
</div>
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
                                    <h5 class="m-b-10">Approve Staff</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./dashboard.php?page=home"><i
                                                class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">approve staff</a></li>
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
                                        <h5>Requests</h5>
                                    </div>
                                    <div class="card-block">

                                        <div class="table-responsive" id="dynamic_content">

                                        </div>

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


<?php



                }
                ?>