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
                                <h5 class="modal-title" id="exampleModalLabel">Download Datas</h5>
                                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> -->
                            </div>
                            <div class="modal-body">
                                <form id="newadmissionform" method="POST" action="./php_operations/download.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-12 col-xl-12 ">
                                            <div class="card daily-sales">
                                                <div class="card-block">
                                                    <h6 class="mb-4">SQL CMD</h6>
                                                    <div class="form-group">
                                                        <label for="search">CMD Here !</label>
                                                        <textarea type="text" class="form-control" id="search_box"
                                                            placeholder="Search.." name="cmd"></textarea>
                                                    </div>
                                                    <p>To Select all > <br><b>select * from new_admission_bpet</b> <br>
                                        To Select with columns > <br>
                                        <b>select column_name, column_name from  new_admission_bpet</b> <br>
                                        To Select with Condition > <br>
                                       <b> select column_name, column_name  from  new_admission_bpet where column_name="yourdata"</b>
                                       <b style="color:blue">student_name , student_aadhar , dob , gender , father_name , mother_name , religion , mobile_no , total , year_of_passing , reg_no_sslc , combination_opted , lang_opted</b>
                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                           
                                        <div class="form-group  col-12">
                                            <input type="hidden" name="type" id="type" value="downloadnewadmission">
                                            <input type="submit" name="submit" class="btn btn-primary" />
                                        </div>
                         

                                    </div>
                                </form>
                            </div>



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
                                <h5 class="m-b-10"></h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./dashboard.php?page=home"><i
                                            class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:">Download Data from Cloud</a></li>
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
                            <div class="card daily-sales bg-info " type="button" id="btndownloadnewadmission">
                                <div class="card-block">
                                    <h6 class="mb-4 text-white">New Admission</h6>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-9">
                                            <h3 class="f-w-300 d-flex align-items-center m-b-0 text-white"><i
                                                    class="feather icon-download-cloud text-c-voilet f-30 m-r-10"></i>
                                                <span id="getcountdata">0</span>
                                            </h3>
                                        </div>
                                        <p class="text-white">xls</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 ">
                            <div class="card daily-sales bg-primary " type="button">
                                <div class="card-block">
                                    <h6 class="mb-4 text-white">Attendance</h6>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-9">
                                            <h3 class="f-w-300 d-flex align-items-center m-b-0 text-white"><i
                                                    class="feather icon-download-cloud text-c-green f-30 m-r-10"></i><span
                                                    id="getcountdata2">0</span>
                                            </h3>

                                        </div>
                                        <p class="text-white">xls</p>
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
                        <!-- 
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
                        </div> -->
                        <!-- <div class="col-xl-12 col-md-6">
                            <div class="card Recent-Users">
                                <div class="card-header">
                                    <h5>Result Data</h5>
                                </div>
                                <div class="card-block px-0 py-3">
                                    <div class="table-responsive" id="dynamic_content">
                                       
                                                
                                       
                                                
                                         
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- [ Main Content ] end -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>