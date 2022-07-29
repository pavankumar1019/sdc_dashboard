<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AdminX - The last Admin template you'll ever need</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="./dist/css/adminx.css" media="screen" />

    <!--
      # Optional Resources
      Feel free to delete these if you don't need them in your project
    -->
  </head>
  <body>
    <div class="adminx-container">
      <nav class="navbar navbar-expand justify-content-between fixed-top">
        <a class="navbar-brand mb-0 h1 d-none d-md-block" href="index.html">
          <img src="./demo/img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
          SDC-COLLEGE
        </a>

        <form class="form-inline form-quicksearch d-none d-md-block mx-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-icon">
                <i data-feather="search"></i>
              </div>
            </div>
            <input type="text" class="form-control" id="search" placeholder="Type to search...">
          </div>
        </form>

        <div class="d-flex flex-1 d-block d-md-none">
          <a href="#" class="sidebar-toggle ml-3">
            <i data-feather="menu"></i>
          </a>
        </div>

        <ul class="navbar-nav d-flex justify-content-end mr-2">
          <!-- Notificatoins -->
          <li class="nav-item dropdown d-flex align-items-center mr-2">
            <a class="nav-link nav-link-notifications" id="dropdownNotifications" data-toggle="dropdown" href="#">
              <i class="oi oi-bell display-inline-block align-middle"></i>
              <span class="nav-link-notification-number">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-notifications" aria-labelledby="dropdownNotifications">
              <div class="notifications-header d-flex justify-content-between align-items-center">
                <span class="notifications-header-title">
                  Notifications
                </span>
                <a href="#" class="d-flex"><small>Mark all as read</small></a>
              </div>

              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action unread">
                  <p class="mb-1">Invitation for <strong>Lunch</strong> on <strong>Jan 12th 2018</strong> by <strong>Laura</strong></p>

                  <div class="mb-1">
                    <button type="button" class="btn btn-primary btn-sm">Accept invite</button>
                    <button type="button" class="btn btn-outline-danger btn-sm">Decline</button>
                  </div>

                  <small>1 hour ago</small>
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                  <p class="mb-1"><strong class="text-success">Goal completed</strong><br />1,000 new members today</p>
                  <small>3 days ago</small>
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                  <p class="mb-1 text-danger"><strong>System error detected</strong></p>
                  <small>3 days ago</small>
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                  <p class="mb-1">Your task <strong>Design Draft</strong> is due today.</p>
                  <small>4 days ago</small>
                </a>
              </div>

              <div class="notifications-footer text-center">
                <a href="#"><small>View all notifications</small></a>
              </div>
            </div>
          </li>
          <!-- Notifications -->
          <li class="nav-item dropdown">
            <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
              <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg" class="d-inline-block align-top" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">My Profile</a>
              <a class="dropdown-item" href="#">My Tasks</a>
              <a class="dropdown-item" href="#">Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="#">Sign out</a>
            </div>
          </li>
        </ul>
      </nav>

      <!-- expand-hover push -->
      <!-- Sidebar -->
      <div class="adminx-sidebar expand-hover push">
        <ul class="sidebar-nav">
          <li class="sidebar-nav-item">
            <a href="index.html" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name">
                Dashboard
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a href="#" class="sidebar-nav-link">
              <span class="sidebar-nav-icon">
                <i data-feather="layout"></i>
              </span>
              <span class="sidebar-nav-name">
                Layout Options
              </span>
              <span class="sidebar-nav-end">
                <span class="badge badge-info">4</span>
              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#example" aria-expanded="false" aria-controls="example">
              <span class="sidebar-nav-icon">
                <i data-feather="pie-chart"></i>
              </span>
              <span class="sidebar-nav-name">
                Charts
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="example">
              <li class="sidebar-nav-item">
                <a href="./layouts/charts_chartjs.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Ch
                  </span>
                  <span class="sidebar-nav-name">
                    ChartJS
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Mo
                  </span>
                  <span class="sidebar-nav-name">
                    Morris
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navTables" aria-expanded="false" aria-controls="navTables">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
                Tables
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navTables">
              <li class="sidebar-nav-item">
                <a href="./layouts/tables.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Re
                  </span>
                  <span class="sidebar-nav-name">
                    Regular Tables
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/tables_data.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Da
                  </span>
                  <span class="sidebar-nav-name">
                    Data Tables
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navForms" aria-expanded="false" aria-controls="navForms">
              <span class="sidebar-nav-icon">
                <i data-feather="edit"></i>
              </span>
              <span class="sidebar-nav-name">
                Forms
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navForms">
              <li class="sidebar-nav-item">
                <a href="./layouts/form_elements.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    El
                  </span>
                  <span class="sidebar-nav-name">
                    Elements
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/form_advanced.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Ad
                  </span>
                  <span class="sidebar-nav-name">
                    Advanced Elements
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navUI" aria-expanded="false" aria-controls="navUI">
              <span class="sidebar-nav-icon">
                <i data-feather="grid"></i>
              </span>
              <span class="sidebar-nav-name">
                UI Elements
              </span>
              <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navUI">
              <li class="sidebar-nav-item">
                <a href="./layouts/icons.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Ic
                  </span>
                  <span class="sidebar-nav-name">
                    Icons
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/buttons.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Bu
                  </span>
                  <span class="sidebar-nav-name">
                    Buttons
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/notifications.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    No
                  </span>
                  <span class="sidebar-nav-name">
                    Notifications
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/progress.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Pr
                  </span>
                  <span class="sidebar-nav-name">
                    Progress Bars
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/tabs.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Ta
                  </span>
                  <span class="sidebar-nav-name">
                    Tabs
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navExtra" aria-expanded="false" aria-controls="navExtra">
              <span class="sidebar-nav-icon">
                <i data-feather="layers"></i>
              </span>
              <span class="sidebar-nav-name">
                Other Layouts
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navExtra">
              <li class="sidebar-nav-item">
                <a href="./layouts/login.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Lo
                  </span>
                  <span class="sidebar-nav-name">
                    Login
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/signup.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Si
                  </span>
                  <span class="sidebar-nav-name">
                    Sign Up
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/404.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Nf
                  </span>
                  <span class="sidebar-nav-name">
                    404 Error
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/500.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Is
                  </span>
                  <span class="sidebar-nav-name">
                    500 Error
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/timeline.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Ti
                  </span>
                  <span class="sidebar-nav-name">
                    Timeline
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/invoice.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    In
                  </span>
                  <span class="sidebar-nav-name">
                    Invoice
                  </span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div><!-- Sidebar End -->