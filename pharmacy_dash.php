<?php
session_start();
if(!isset($_SESSION['doctor_id']) || !isset($_SESSION['doctor_id']))
{
  header('location:index.php');
}
include('dbconfig.php');
$query=mysqli_query($conn,"SELECT * FROM patientdata,patient_report where patientid={$_SESSION['patient_id']} and patientid=id");
while($result=mysqli_fetch_array($query)){
echo'  <option>'.$result['reportid'].'</option>';
}
?>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Alpha</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
     <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <style>
        html {
          scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>

        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                      <a href="index.php" style="font-size:30px;">ALPHA</a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="index.php">Home</a></li>
                        <li><a href="index.php/#Feedback">Feedback</a></li>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="login/signup/index.php">Doctor Signup</a></li>
                        <li><a href="login/signup/patientsignup.php">Patient Signup</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </div>
    </header>
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div>
                    <h1>Pharmacy Home</h1>

                  </div>
            </div>
        </div>
    </section>
  <div style="text-align:center">
        <!-- <h4>Pdf viewer testing</h4> -->
        <iframe src="demo.php" frameborder="0" height="800px" width="70%"></iframe>
          </div>
     <footer class="footer-area section-padding">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-8">
                        <span>

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This webapp is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Team Alpha

</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
