<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en" dir="ltr">
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    
    <title>Berlin Cinema Dashbord</title>
    
              

</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
   
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
          
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
              
                <a class="navbar-brand" href="index.html">Admin Dashboard</a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search...">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Admin Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="index.php"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-home"></i>Home <span class="badge badge-success">6</span></a>
                                
                            </li>
                              <li class="nav-item ">
                                <a class="nav-link " href="#"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-users"></i>Profile <span class="badge badge-success">6</span></a>
                                 </li>
                             <li class="nav-divider">
                                Movies
                            </li>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-film"></i>Movies</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-plus-circle"></i>Add Movies</a>
                               </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-plus-circle"></i>Add Upcoming Movie</a>
                               </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-list"></i>Movies Details</a>
                               </li>
            
                            <li class="nav-divider">
                                Shows
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-calendar"></i> Today's Shows </a>
                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fa fa-fw fa-eye"></i>View Shows </a>
                              
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Add Shows</a>
                               <li class="nav-divider">
                                Theatre
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Theatre Details</a>
                                
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#"  aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map"></i>Add Theatre</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"  aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-fw fa-ticket-alt"></i>Screenings</a>
                               
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#"  aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fa fa-fw fa-book"></i>Bookings</a>
                               
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Berlin Cinema Dashboard  </h2>
                                <p class="pageheader-text"> Manage your movies, theatres, screenings, bookings, and
                    users efficiently.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Berlin Cinema Dashboard </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      
      
      

      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class="page-wrapper">
        
         
                

                     
                  <!-- User Account -->
                  

      <!-- ===================================== -->
        <div class="content-wrapper">
          <div class="content"><!-- Card Profile -->
<div class="card card-default card-profile">

  <div class="card-header-bg" style="background-image:url(assets/img/user/user-bg-01.jpg)"></div>

  <div class="card-body card-profile-body">

    <div class="profile-avata">
      <img class="rounded-circle" src="assets/images/avatar-2.jpg" alt="Avata Image">
      <a class="h5 d-block mt-3 mb-2" href="#">Albrecht Straub</a>
      <a class="d-block text-color" href="#">albercht@example.com</a>
    </div>


   

  </div>

  <div class="card-footer card-profile-footer">
    <ul class="nav nav-border-top justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="user-profile.html">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user-activities.html">Activities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="user-profile-settings.html">Settings</a>
      </li>

    </ul>
  </div>

</div>

<!-- <div class="row">
  <div class="col-xl-3">
     Settings -->
   
    <!-- Settings -->
      <!--
    <div class="card card-default">
      <div class="card-header">
        <h2>Settings</h2>
      </div>

      <div class="card-body pt-0">

        <ul class="nav nav-settings">
          <li class="nav-item">
            <a class="nav-link" href="user-profile-settings.html">
              <i class="mdi mdi-account-outline mr-1"></i> Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="user-account-settings.html">
              <i class="mdi mdi-settings-outline mr-1"></i> Account
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user-planing-settings.html">
              <i class="mdi mdi-currency-usd mr-1"></i> Planing
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user-billing.html">
              <i class="mdi mdi-set-top-box mr-1"></i> Billing
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user-notify-settings.html">
              <i class="mdi mdi-bell-outline mr-1"></i> Notifications
            </a>
          </li>
        </ul>

      </div>

    </div>
  </div>
  <div class="col-xl-9">
    -->
    <!-- Account Settings -->
    <div class="card card-default">
      <div class="card-header">
        <h2 class="mb-5">Account Settings</h2>

      </div>

      <div class="card-body">

        <form>
          <div class="row mb-2">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" >
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName">
              </div>
            </div>
          </div>

          <div class="form-group mb-4">
            <label for="userName">User name</label>
            <input type="text" class="form-control" id="userName">
            <span class="d-block mt-1">Accusamus nobis at omnis consequuntur culpa tempore saepe animi.</span>
          </div>

          <div class="form-group mb-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email">
          </div>

          <div class="form-group mb-4">
            <label for="newPassword">New password</label>
            <input type="password" class="form-control" id="newPassword">
          </div>

          <div class="form-group mb-4">
            <label for="conPassword">Confirm password</label>
            <input type="password" class="form-control" id="conPassword">
          </div>

          <div class="d-flex justify-content-end mt-6">
            <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
          </div>

        </form>
      </div>
    </div>




  </div>

</div>
</div>
          
        </div>
          <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2025... <a href="#">Berlin Cinema</a> All rights reserved. 
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
          <!-- Footer -->
           
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->

      </div>
      
    </div>
  
                    <!-- Card Offcanvas -->
                    



    
                    <script src="plugins/jquery/jquery.min.js"></script>
                    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="plugins/simplebar/simplebar.min.js"></script>
                    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

                    
                    <script src="js/mono.js"></script>
                    <script src="js/chart.js"></script>
                    <script src="js/map.js"></script>
                    <script src="js/custom.js"></script>

                    


                    <!--  -->


  </body>
</html>
