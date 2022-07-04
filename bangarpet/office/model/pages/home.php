<?php
                                                include('./db_bpet_sdc/db.php');
                                                $sql="SELECT * FROM ".$new_admission;
                                                $result=$conn->query($sql);
                                                $date=date("Y-m-d");

                                                $sql1="SELECT * FROM `".$tbl_absentees."` WHERE `Date`='$date' AND `Status`='A'";
                                                $absentees=$conn->query($sql1);
                                              
                                                
                                                $sql2="SELECT * FROM `".$tbl_absentees."` WHERE `Date`='$date' AND `Status`='P'";
                                                $present=$conn->query($sql2);

                                                $sql3="SELECT * FROM `user_office`";
                                                $usercontroll=$conn->query($sql3);


                                                $sql4="SELECT * FROM `".$tbl_admission."`";
                                                $data_students_2nd_puc=$conn->query($sql4);


                                                ?>
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
                                <div class="col-md-6 col-xl-4" onclick="location.href='./dashboard.php?page=newadmission';">
                                    <div class="card daily-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4"> New Admissions</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-user-check text-c-green f-30 m-r-10"></i><?php  echo mysqli_num_rows($result);?></h3>
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                                <!--[ daily sales section ] end-->
                                <!--[ Monthly  sales section ] starts-->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card Monthly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Today Absent Students</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-users text-c-red f-30 m-r-10"></i><?php  echo mysqli_num_rows($absentees); ?></h3>
                                                </div>
                                             
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                                <!--[ Monthly  sales section ] end-->
                                <!--[ year  sales section ] starts-->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card Monthly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Today Present Students</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-users text-c-blue f-30 m-r-10"></i><?php  echo mysqli_num_rows($present); ?></h3>
                                                </div>
                                             
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                                <!--[ year  sales section ] end-->
                                <!--[ Recent Users ] start-->
                                <div class="col-xl-8 col-md-6">
                                    <div class="card Recent-Users">
                                        <div class="card-header">
                                            <h5>New Admissions</h5>
                                        </div>
                                        <div class="card-block px-0 py-3">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr class="unread">
                                                            <!-- <td><img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user"></td> -->
                                                            <td>
                                                                <h6 class="mb-1">2nd PUC</h6>
                                                                <p class="m-0">EBACS</p>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>320</h6>
                                                            </td>
                                                            <!-- <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td> -->
                                                        </tr>
                                                      
                                                       
      
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
                                                    <h5 class="m-0">Total Users</h5>
                                                </div>
                                          
                                            </div>
                                            <h2 class="mt-3 f-w-300"><?php echo mysqli_num_rows($usercontroll); ?></h2>
                                            <h6 class="text-muted mt-4 mb-0">Users controll this software</h6>
                                            <i class="feather icon-users text-c-purple f-50"></i>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-block border-bottom">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-auto">
                                                    <i class="feather icon-users f-30 text-c-green"></i>
                                                </div>
                                                <div class="col">
                                                    <h3 class="f-w-300">235</h3>
                                                    <span class="d-block text-uppercase">TOTAL STUDENTS</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-auto">
                                                    <i class="feather icon-users f-30 text-c-blue"></i>
                                                </div>
                                                <div class="col">
                                                    <h3 class="f-w-300">26</h3>
                                                    <span class="d-block text-uppercase">TOTAL STAFF</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ statistics year chart ] end -->
                                <!--[social-media section] start-->
                               
                                
                                
                                
                               
                                       
                                    </div>
                                </div>

                            </div>
      