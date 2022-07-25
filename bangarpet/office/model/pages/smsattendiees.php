<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->

                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <!--[ daily sales section ] start-->
                            <!-- <div class="col-md-6 col-xl-4">
                                    <div class="card daily-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Daily Sales</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>$ 249.95</h3>
                                                </div>

                                                <div class="col-3 text-right">
                                                    <p class="m-b-0">67%</p>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            <!--[ daily sales section ] end-->
                            <!--[ Monthly  sales section ] starts-->
                            <!-- <div class="col-md-6 col-xl-4">
                                    <div class="card Monthly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Monthly Sales</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-down text-c-red f-30 m-r-10"></i>$ 2.942.32</h3>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="m-b-0">36%</p>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme2" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            <!--[ Monthly  sales section ] end-->
                            <!--[ year  sales section ] starts-->
                            <!-- <div class="col-md-12 col-xl-4">
                                    <div class="card yearly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Yearly Sales</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>$ 8.638.32</h3>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="m-b-0">80%</p>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            <!-- Mark Attendance -->
                            <div class="col-md-12 col-xl-12">
                                <div class="card yearly-sales">
                                    <div class="card-block">
                                        <h6 class="mb-4">Mark Attendance</h6>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-9">
                                                <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i
                                                        class="fa fa-users" aria-hidden="true"></i>
                                                    &nbsp;&nbsp;Your Class</h3>
                                            </div>
                                            <div class="col-3 text-right">
                                                <p class="m-b-0"></p>
                                            </div>
                                        </div>
                                        <br>
                                        <select class="mb-3 form-control form-control-lg" id="class_select">
                                            <?php
                                                    require_once('./db_bpet_sdc/db.php');
                                                    $sql = "SELECT * FROM class ";
                                                    $result = $conn->query($sql);
                                                    
                                                    if ($result->num_rows > 0) {
                                                      // output data of each row
                                                      while($row = $result->fetch_assoc()) {
                                                        echo "  <option value='".$row['id']."' selected>".$row['section']."&nbsp;-&nbsp;".$row['name']."</option>";
                                                      }
                                                    } else {
                                                      echo "0 results";
                                                    }
                                                    ?>

                                        </select>

                                    </div>
                                </div>
                            </div>
                            <!--[ year  sales section ] end-->
                            <!--[ Recent Users ] start-->
                            <div class="col-xl-8 col-md-6">
                                <div class="card Recent-Users">
                                    <div class="card-header">
                                        <h5>Students</h5>
                                    </div>
                                    <div class="card-block px-0 py-3">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <tbody id="student_list">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--[ Recent Users ] end-->

                            <!-- [ statistics year chart ] start -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card card-event">
                                    <div class="card-block">
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col">
                                                <h5 class="m-0">Smart Card</h5>
                                            </div>

                                        </div>
                                        <h2 class="mt-3 f-w-300">SCAN</h2>
                                        <h6 class="text-muted mt-4 mb-0"></h6>
                                        <i class="fa fa-id-card text-c-purple f-50"></i>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-block border-bottom">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-auto">
                                                <i class="fa fa-users f-30 text-c-green"></i>
                                            </div>
                                            <div class="col">
                                                <h3 class="f-w-300" id="total_student"></h3>
                                                <span class="d-block text-uppercase">TOTAL STUDENTS</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-auto">
                                                <i class="fa fa-users f-30 text-c-red"></i>
                                            </div>
                                            <div class="col">
                                                <h3 class="f-w-300" id="total_student_absenties"></h3>
                                                <span class="d-block text-uppercase">TOTAL ABSENTIES</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ statistics year chart ] end -->
                            <!--[social-media section] start-->
                            <div class="col-md-12 col-xl-12">
                                <div class="card card-social">
                                    <div class="card-block border-bottom">
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-auto">
                                                <i class="fa fa-users text-primary f-36"></i>
                                            </div>
                                            <div class="col text-right">


                                                <button class="text-c-green mb-0" id="downloadexcelreport"><i
                                                        class="fa fa-download text-primary f-36"></i><span
                                                        class="text-muted">Download Todays</span></button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="row align-items-center justify-content-center card-active">
                                            <div class="col-12">
                                                <label for="">Check the Attendance before submit</label><br>
                                                <button type="button" id="btn_submit" class="btn btn-outline-info"
                                                    title="" data-toggle="tooltip"
                                                    data-original-title="Submit Attendance">SUBMIT & SMS</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--[social-media section] end-->
                            <!-- [ rating list ] starts-->



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

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Please Wait... ! Dont close</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
            </div>
            <div class="modal-body">
                <h6 class="text-center  m-b-10"><span class="text-muted m-r-5" id="progress"></span></h6>
                <div class="progress">
                    <div class="progress-bar progress-c-theme2" id="loading" role="progressbar" style="height:6px;"
                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div id="result">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="closemodal" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>