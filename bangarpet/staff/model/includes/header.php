
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SDC | Bangarpet OFFICE Login</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="http://sdccollegebpet.in/SDC.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a  href="./dashboard.php?page=home" class="b-brand">
                    
                       <img src="<?php echo $_SESSION['profile_staff']?>" class="img-radius" width="50px" alt="" srcset="">
                    
                    <span class="b-title">SDC-<?php 
                             if($_SESSION['branch_staff']==1){
                                echo "BANGARPET";
                             }
                             if($_SESSION['branch_staff']==2){
                                echo "KGF";
                             }
                                 
                                 ?></span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class='nav-item active'>
                        <a  href="./dashboard.php?page=home" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>OPERATIONS</label>
                    </li>
                    
                <?php
                if($_SESSION['role_staff']=="ct"){
                    echo '<li data-username="Sample Page" class="nav-item"><a href="./dashboard.php?page=consolidate" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Upload Marks</span></a></li>';
                }
                ?>
                <?php
                if($_SESSION['role_staff']=="ct"){
                    echo '<li data-username="Sample Page" class="nav-item"><a id="consolidate" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Download Consolidate</span></a></li>';
                }
                ?>
           
                <?php
                if($_SESSION['role_staff']=="P"){
                    echo '<li data-username="Sample Page" class="nav-item"><a href="./dashboard.php?page=approvestaff" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Approve Satff</span></a></li>
                    ';
                }
                ?>
                <?php
                if($_SESSION['role_staff']=="P"){
                    echo '<li data-username="Sample Page" class="nav-item"><a href="./dashboard.php?page=downloadconsolidate" class="nav-link"><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Consolidates</span></a></li>
                    ';
                }
                ?>
                <?php
                if($_SESSION['role_staff']=="P"){
                    echo '<li data-username="Sample Page" class="nav-item"><a href="./dashboard.php?page=smsmarks" class="nav-link"><span class="pcoded-micon"><i class="feather icon-mail"></i></span><span class="pcoded-mtext">SMS MARKS '.$_SESSION['id'].' </span></a></li>
                    ';
                }
                ?>
                      <?php
                if($_SESSION['id']==13){
                    echo '<li data-username="Sample Page" class="nav-item"><a href="./dashboard.php?page=checklist" class="nav-link"><span class="pcoded-micon"><i class="feather icon-mail"></i></span><span class="pcoded-mtext">Check List</span></a></li>
                    ';
                }
                ?>
                  
                    <li data-username="Sample Page" class="nav-item"><a href="./dashboard.php?page=about" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">About</span></a></li>
                    <!-- <li data-username="Disabled Menu" class="nav-item disabled"><a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Disabled menu</span></a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a  href="./dashboard.php?page=home" class="b-brand">
                <img src="./assets/images/logo.png" alt="" srcset="">
                    
                <span class="b-title">SDC-<?php 
                             if($_SESSION['branch_staff']==1){
                                echo "BANGARPET";
                             }
                             if($_SESSION['branch_staff']==2){
                                echo "KGF";
                             }
                                 
                                 ?></span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown">Operations</a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./dashboard.php?page=consolidate">Upload Marks</a></li>
                        <li><a class="dropdown-item" href="javascript:">New Updates</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="main-search">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="javascript:" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <!-- <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a> -->
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="javascript:" class="m-r-10">mark as read</a>
                                    <a href="javascript:">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>SDC</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="javascript:">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="<?php echo $_SESSION['profile_staff']?>" width="50px" class="img-radius" alt="User-Profile-Image">
                                <span style="text-transform: uppercase;"><?php echo $_SESSION['name_staff']?> - <?php 
                             if($_SESSION['branch_staff']==1){
                                echo "BANGARPET";
                             }
                             if($_SESSION['branch_staff']==2){
                                echo "KGF";
                             }
                                 
                                 ?></span>
                                <a href="./logout.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="./logout.php" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
