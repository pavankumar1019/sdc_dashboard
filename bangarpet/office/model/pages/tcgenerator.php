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
                                    <h5 class="m-b-10"></h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./dashboard.php?page=home"><i
                                                class="feather icon-home"></i></a></li>

                                    <li class="breadcrumb-item"><a href="javascript:">TC - Generator</a></li>
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
<h5><?php
require_once('./db_bpet_sdc/db.php');

$sql = "SELECT id FROM tc ORDER BY id DESC LIMIT 1";

$result=mysqli_query($conn, $sql);
if($result=TRUE){
    foreach($result as $row){
        echo "No.".($row['id']+1);
         }
}else{
    echo "No. 1";
}

?></h5>
                                    </div>
                                    <div class="card-body">
                                        <h5>Fill the Form</h5>
                                        <hr>
                                        <form target="_blank" action="./api/tc.php"
      method="post" id="tcform"
      name="mc-embedded-subscribe-form" class="validate">
                                            <div class="row">
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Admission No</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="" required>
                                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never
                                                            share your email with anyone else.</small> -->
                                                    </div>


                                                </div>
                                                <div class="col-md-8">
                                                    <label for="exampleInputEmail1">Name Of Student</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="" required>
                                                </div>
                                                <div class="col-md-8">
                                                    <label for="exampleInputEmail1">Place of Birth</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Gender</label>
                                                        <select class="form-control" id="exampleFormControlSelect1" required>
                                                            <option value="" selected>--Choose Gender--</option>
                                                            <option>Male</option>
                                                            <option>Female</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">DOB</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nationality</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="" value="Indian" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Religion</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Caste</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name of Father</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name Of Mother</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Whether the candidate belongs to
                                                            Schedule Caste or Schedule Tribe</label>
                                                        <select class="form-control" id="exampleFormControlSelect1" required>
                                                            <option value="" selected>--Choose Yes / No--</option>
                                                            <option>Yes</option>
                                                            <option>No</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Whether qualified for promotion
                                                            to the next standard
                                                        </label>
                                                        <select class="form-control" id="exampleFormControlSelect1" required>
                                                            <option>Qualified</option>
                                                            <option>Not Qualified</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"> Standard in which the student
                                                            was studying at time of leaving the college
                                                        </label>
                                                        <select class="form-control" id="exampleFormControlSelect1" required>
                                                            <option>2nd PUC</option>
                                                            <option>1st PUC</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">1st language
                                                        </label>
                                                        <select class="form-control" id="exampleFormControlSelect1" required>
                                                            <option>KANNADA</option>
                                                            <option>HINDI</option>
                                                            <option>URDU</option>
                                                            <option>SANSKRIT</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">COMBINATION
                                                        </label>
                                                        <select class="form-control" id="exampleFormControlSelect1" required>
                                                            <option>PCMB</option>
                                                            <option>PCMCs</option>
                                                            <option>EBACS</option>
                                                            <option>EBAS</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Date of Student’s last attendance at college</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Date of Admission or promotion to next class or standard</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="">
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Date on which the application for the transfer certificate was recived</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Number of college working days upto the date of leaving the college</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Total number of days student attended</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">GENERATE</button>                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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