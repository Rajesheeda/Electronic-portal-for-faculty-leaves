<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/cdac9806aca5e004e5073f36f88147adlakireddybalireddycollegeofengineering-logo-128x128.jpg" type="image/x-icon">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {background-color: #f1f1f1}
.dropdown:hover .dropdown-content {
    display: block;
}
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>
<body>
<?php
 session_start();
 if($_SESSION['u']=='null'||$_SESSION['u']=="")
 {
 header("Location:index.html");
 }
 $u= $_SESSION['u'];	
?>
<section id="menu-c">
    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">
            <div class="mbr-table">
                <div class="mbr-table-cell">
                    <div class="navbar-brand">
                        <a href="https://lbrce.ac.in" target="blank" class="navbar-logo"><img src="assets/images/cdac9806aca5e004e5073f36f88147adlakireddybalireddycollegeofengineering-logo-128x128.jpg" alt="Mobirise"></a>
                        <a class="navbar-caption" href="https://lbrce.ac.in" target="blank">LBRCE</a>
                    </div>
                </div>
                <div class="mbr-table-cell">
				    <button class="dropbtn" style="float:right;"><a href="admin.html">Admin</a></button>
                    <div class="dropdown" style="float:right;">
                    <button class="dropbtn"><?php echo $u ?></button>
                    <div class="dropdown-content">
                    <a href="#">About</a>
                    <a href="#">Logout</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</section>
<section class="engine"><a rel="external" href="https://mobirise.com"></a></section><section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background" id="header1-5" style="background-image: url(assets/images/lbrcadminnight-2000x1250-87.jpg);">
    <div class="mbr-table-cell">
        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">
                    <p class="mbr-section-lead lead"></p>
                    <div class="mbr-section-btn"><a class="btn btn-lg btn-secondary" href="indexm.php">CSE</a> <a class="btn btn-lg btn-success" href="indexm.php">IT</a> <a class="btn btn-lg btn-info" href="indexm.php">EEE</a> <a class="btn btn-lg btn-warning" href="indexm.php">MECH</a> <a class="btn btn-lg btn-danger" href="indexm.php">ECE</a> <a class="btn btn-lg btn-primary" href="indexm.php">CIVIL</a>  <a class="btn btn-lg btn-primary" href="indexm.php">ASE</a> </div>
                </div>	
            </div>
        </div>
    </div>
</section>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <input name="animation" type="hidden">
  </body>
</html>