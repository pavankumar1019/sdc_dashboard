<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- Large modal -->

                <div class="modal fade bd-example-modal-lg" id="newadmissionmodal" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
                                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> -->
                            </div>
                            <div class="modal-body">

                                <form method="post" id="newadmissionform">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">SATS NO. <span style="color:red" id="error"></span></label>
                                            <input type="text" class="form-control" onkeypress="return onlyNumberKey(event)" id="sats" name="sats" placeholder=""
                                                required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Roll No</label>
                                            <input type="text" class="form-control" id="RollNo" name="RollNo"
                                                placeholder="" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Student Number</label>
                                            <input type="text" class="form-control" id="student_number"
                                                name="student_number" placeholder="" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Student Name </label>
                                            <input type="text" class="form-control" id="StudentName" name="StudentName"
                                                placeholder="" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Father Name</label>
                                            <input type="text" class="form-control" id="father_name" name="father_name"
                                                placeholder="" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Mother Name</label>
                                            <input type="text" class="form-control" id="mother_name" name="mother_name"
                                                placeholder="" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">DOB <span>(YYYY/MM/DD)</span></label>
                                            <input type="text" class="form-control" id="dob" name="dob" placeholder=""
                                                required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Mobile No</label>
                                            <input type="text" class="form-control"
                                                onkeypress="return onlyNumberKey(event)" id="mobile_no" name="mobile_no"
                                                placeholder="" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Combination</label>
                                            <select id="combination" name="combination" class="form-control"
                                                required="">
                                                <option value="" selected>-select one-</option>
                                                <option value="PCMB">PCMB</option>
                                                <option value="PCMCS">PCMCS</option>
                                                <option value="EBACS">EBACS</option>
                                                <option value="EBAS">EBAS</option>
                                                <option value="ABMS">ABMS</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4">Class</label>
                                            <select id="Class" name="Class" class="form-control" required="">
                                                <option value="" selected>-select one-</option>
                                                <?php
                                                    require_once('./db_bpet_sdc/db.php');
                                                    $sql = "SELECT * FROM class ";
                                                    $result = $conn->query($sql);
                                                    
                                                    if ($result->num_rows > 0) {
                                                      // output data of each row
                                                      while($row = $result->fetch_assoc()) {
                                                        echo "  <option value='".$row['id']."' >".$row['section']."&nbsp;-&nbsp;".$row['name']."</option>";
                                                      }
                                                    } else {
                                                      echo "0 results";
                                                    }
                                                    ?>
                                            </select>

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Language</label>
                                            <select id="lang_code" name="lang_code" class="form-control" required="">
                                            <option value="" selected>-select one-</option>    
                                            <option value="1">KANNADA</option>
                                                <option value="3">HINDI</option>
                                                <option value="8">URDU</option>
                                                <option value="9">SANSKRIT</option>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Class Name</label>
                                            <select id="class_name" name="class_name" class="form-control" required="">
                                            <option value="" selected>-select one-</option>   
                                            <option value="1">1st PUC</option>
                                                <option value="2">2nd PUC</option>
                                            </select>
                                        </div>
                                        <hr>
                                        <div class="form-group  col-12">
                                            <input type="hidden" name="type" id="type" required>
                                            <input type="hidden" name="id" id="id">
                                            <input type="submit" name="submit" id="submit" class="btn btn-primary" />
                                        </div>
                                    </div>
                            </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <!-- modal Close -->
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Students Database</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./dashboard.php?page=home"><i
                                            class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:">Student Data base</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page inner -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- [ Main Content ] start -->
                    <div class="row">
                        <!--[ daily sales section ] start-->
                        <div class="col-md-6 col-xl-4 ">
                            <div class="card daily-sales bg-dark " type="button" id="btnAdmissionModal">
                                <div class="card-block">
                                    <h6 class="mb-4 text-white">Students</h6>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-9">
                                            <h3 class="f-w-300 d-flex align-items-center m-b-0 text-white"><i
                                                    class="fa fa-users text-c-green f-30 m-r-10"></i> <span
                                                    id="getcountdata"></span>
                                            </h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [ breadcrumb ] end -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- [ Main Content ] start -->
                    <div class="row">

                        <div class="col-md-12 col-xl-12 ">
                            <div class="card daily-sales">
                                <div class="card-block">
                                    <h6 class="mb-4">Query</h6>
                                    <div class="form-group">
                                        <label for="search">Search Here !</label>
                                        <input type="text" class="form-control" id="search_box" placeholder="Search..">

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <div class="card Recent-Users">
                                <div class="card-header">
                                    <h5>New Admissions</h5>
                                </div>
                                <div class="card-block px-0 py-3">
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