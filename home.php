<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="home.css">

    <title>CU CS Student Portal</title>
</head>
<body>
    <?php require("./nav.php") ?>    
    <div style="margin-left: 88px;">

        <?php require("./carousal.php") ?>    
        
        <!-- ABOUT -->

        <div class="diffSection" id="about_section">
            <center><p style="font-size: 50px; padding: 50px">About</p></center>
            <div class="about-content">
                <div class="side-image">
                    <img class="sideImage" src="images/c3.jpg">
                </div>
                <div class="side-text">
                    <h2>What you think about us ?</h2>
                    <p>Education is the process of facilitating learning, or the acquisition of knowledge, 
                        skills, values, beliefs, and habits. Educational methods include teaching, training, 
                        storytelling, discussion and directed research.<br> 
                        Educational website can include websites that have videos or topic related resources 
                        that act as tools to enhance learning. These websites help make 
                        the process of learning entertaining and attractive to the student, especially in today's age.
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>