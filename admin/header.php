 <?php
    session_start();
    include '../includes/conn.php';


    if (!isset($_SESSION["admin_username"])) {
        header("Location: http://localhost/law/admin/");
    }
    ?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>ADMIN</title>

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
                                     <small>Hello <?php echo $_SESSION["admin_username"]; ?></small>
                                 </h5>
                             </div>

                             <!-- item-->
                             <a href="update-login-creds" class="dropdown-item notify-item">
                                 <i class="fas fa-user"></i>
                                 <span>Profile</span>
                             </a>

                             <!-- item-->
                             <a href="logout" class="dropdown-item notify-item">
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
                             <a class="active" href="welcome">
                                 <i class="fas fa-bars"></i>
                                 <span> Dashboard </span>
                             </a>
                         </li>


                         <li class="submenu">
                             <a href="#">
                                 <i class=" fas fa-user-graduate"></i>
                                 <span> Lawyer Details </span>
                                 <span class="menu-arrow"></span>
                             </a>
                             <ul class="list-unstyled">
                                 <li>
                                     <a href="new-lawyers"> New lawyers</a>
                                 </li>
                                 <li>
                                     <a href="approved-lawyers"> Aproved lawyers</a>
                                 </li>
                                 <li>
                                     <a href="featured-lawyers"> Featured lawyers</a>
                                 </li>

                             </ul>
                         </li>
                         <li class="submenu">
                             <a href="users">
                                 <i class="fas fa-user"></i>
                                 <span>Users </span>

                             </a>

                         </li>
                         <li class="submenu">
                             <a href="basic-details">
                                 <i class="fab fa-wpforms"></i>
                                 <span> Website Details </span>

                             </a>

                         </li>
                         <li class="submenu">
                             <a href="review-service-request">
                                 <i class="fas fa-user-cog"></i>
                                 <span> Service Request </span>
                             </a>
                         </li>
                         <li class="submenu">
                             <a href="review-contact-details">
                                 <i class="fas fa-comment-dots"></i>
                                 <span>Review Contact Details </span>
                             </a>
                         </li>
                         <li class="submenu">
                             <a href="review-subscribers">
                                 <i class="fas fa-calendar-check"></i>
                                 <span>Review Subscribers</span>
                             </a>
                         </li>
                     </ul>

                     <div class="clearfix"></div>

                 </div>

                 <div class="clearfix"></div>

             </div>

         </div>
         <!-- Begin Javascript -->
         <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
         <script src="assets/js/jquery.dataTables.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function() {
                 $('#myTable').DataTable();
             });
         </script>
         <!-- End Sidebar -->