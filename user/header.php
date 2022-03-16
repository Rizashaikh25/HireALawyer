 <?php
    session_start();
    include_once 'actions/user-login_check.php';
    include '../includes/conn.php';
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>User</title>

     <!-- Favicon -->

     <!-- Bootstrap CSS -->
     <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

     <!-- Font Awesome CSS -->
     <link href="assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

     <!-- Custom CSS -->
     <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

     <!-- BEGIN CSS for this page -->
     <link rel="stylesheet" type="text/css" href="assets/plugins/chart.js/Chart.min.css" />
     <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/datatables.min.css" />
     <!-- END CSS for this page -->
 </head>

 <body class="adminbody">

     <div id="main">

         <!-- top bar navigation -->
         <div class="headerbar">

             <!-- LOGO -->
             <div class="headerbar-left">
                 <a href="#" class="logo">
                     <!-- <img alt="Logo" src="assets/images/logo.png" /> -->
                     <span>Hire A Lawyer!</span>
                 </a>
             </div>

             <nav class="navbar-custom">

                 <ul class="list-inline float-right pt-2 mb-0">
                     <li class="list-inline-item dropdown notif">
                         <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                             <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                         </a>
                         <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                             <!-- item-->
                             <div class="dropdown-item noti-title">
                                 <h5 class="text-overflow">
                                     <small>Hello <?php echo $_SESSION["username"]; ?></small>
                                 </h5>
                             </div>

                             <a href="../logout-lawyer" class="dropdown-item notify-item">
                                 <i class="fas fa-power-off"></i>
                                 <span>Logout</span>
                             </a>
                         </div>
                     </li>

                 </ul>

                 <ul class="list-inline menu-left pt-2 mb-0">
                     <li class="float-left">
                         <button class="button-menu-mobile open-left">
                             <i class="fas fa-bars"></i>
                         </button>
                     </li>
                 </ul>

             </nav>

         </div>
         <!-- End Navigation -->

         <!-- Left Sidebar -->
         <div class="left main-sidebar">

             <div class="sidebar-inner leftscroll">

                 <div id="sidebar-menu">

                     <ul>
                         <li class="submenu">
                             <a class="active" href="#">
                                 <i class="fas fa-bars"></i>
                                 <span> Dashboard </span>
                             </a>
                         </li>
                         <li class="submenu">
                             <a href="Personal-details">
                                 <i class="fas fa-user"></i>
                                 <span> Personal Details </span>
                             </a>
                         </li>
                         <!-- <li class="submenu">
                             <a href="Practice-area">
                                 <i class="fab fa-asymmetrik"></i>
                                 <span> Practice Area </span>
                             </a>
                         </li> -->
                         <!-- <li class="submenu">
                             <a href="Practice-courts">
                                 <i class="fas fa-balance-scale"></i>
                                 <span> Practice Courts </span>
                             </a>
                         </li> -->
                         <!-- <li class="submenu">
                             <a href="Recent-Cases">
                                 <i class="fas fa-calendar-check"></i>
                                 <span> Recent Cases </span>
                             </a>
                         </li> -->
                         <!-- <li class="submenu">
                             <a href="Acc-Credentials">
                                 <i class="fas fa-diagnoses"></i>
                                 <span> Account Credentials </span>
                             </a>
                         </li> -->
                         <li class="submenu">
                             <a href="../index">
                                 <i class="fab fa-wordpress-simple"></i>
                                 <span> Website </span>
                             </a>
                         </li>

                     </ul>

                     <div class="clearfix"></div>

                 </div>

                 <div class="clearfix"></div>

             </div>

         </div>
         <!-- End Sidebar -->