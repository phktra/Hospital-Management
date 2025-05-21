<?php
    date_default_timezone_set('Asia/Phnom_Penh');
    include('database/config_db.php');
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>SU54-Admin</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- Start Header -->
         <?php include('layout/header.php'); ?>
        <!-- End Header -->
         <!-- Start left side bar -->
         <?php include('layout/leftsidebar.php'); ?>
        <!-- End left side bar -->
        
        <div class="page-wrapper">
            <!-- Start dynamic content -->
            <?php 
                //include('layout/master.php');
                // include('page/doctor/doctor_list.php')
                if (isset($_GET['p_doctor'])) {
                    include('page/doctor/'.$_GET['p_doctor'].'.php');
                  }else {
                    include('layout/master.php'); 
                  }
            ?>
            <!-- End dynamic content -->
            <div class="notification-box">
                <!-- Start alert -->
                    <?php include('page/alert/alert.php'); ?>
                <!-- End alert -->
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>



</html>