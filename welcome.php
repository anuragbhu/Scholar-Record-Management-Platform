<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="welcome.css">
    <link rel="icon" type="img/png" href="UniversityIcon.png">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

    <div>
        <img src="BHU_Logo.jpg" width="9%" alt="ARE Visual Logo Mark" class="imageSpin" align="left">
        <div class="heading">
            <h1>BANARAS  HINDU  UNIVERSITY</h1>
            <h2>INSTITUTE OF SCIENCE</h2>
            <h3>DEPARTMENT  OF  COMPUTER  SCIENCE</h3>
        </div>
        <img src="DoCS.jpg" width="13%" alt="ARE Visual Logo Mark" class="imageSpin" align="right">
    </div><br><br><br><br><br><br><br><br><br><br><br><br>

    <div>
        <nav>
            <ul class="ref_1">
                <li class="ref_2">SCHOLAR REGISTRATION PORTAL</li>
            </ul>
        </nav>  
    </div>o

    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to registration portal.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>

    <div>
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active" href="form.html">Registration Form</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="download.html">Downloads</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="report.html">Report</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="contact_us.html">Contact Us</a>
            </li>
    </div>

    <div>
        <img src="01.jpg" class="img" alt="Responsive image">

    </div>
    
</body>
</html>