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
    <link rel="stylesheet" href="./videos.css">
    <title>Videos</title>
</head>
<body>
    <?php require("./nav.php") ?>    

    <div style="margin-left: 88px;">
        <h2>Videos</h2>
        <h2>Digital Logic</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/KkA3j-gdBfw" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/M0mx8S05v60" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/0k8RKsDaNXQ" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Programming Fundamentals using C</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/EjavYOFoJJ0" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/irqbmMNs2Bo" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/Wa-kgmSLls4" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Data Structure</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/xLetJpcjHS0" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/5_5oE5lgrhw" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/AT14lCXuMKI" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Basic Electronic Devices and Circuits</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/s3vpH3A_eTA" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/7jaa1rlW7Ak" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/icrAf1us2IQ" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Computer Organization & Architecture</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/j8NnE1YeSN0" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/Ol8D69VKX2k" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/S34P2OjtLIE" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Computational Mathematics</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/Aw6LvaPtESE" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/vz96KunWXd8" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/3j0c_FhOt5U" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Operating Systems</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/WJ-UaAaumNA" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/vBURTt97EkA" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/RozoeWzT7IM" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Computer Graphics</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/B0sksFkAMyk" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/NmMky9Pg8Yc" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/W5P8GlaEOSI" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Data Communication, Networking and Internet Technology</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/4D55Cmj2t-A" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/VwN91x5i25g" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/I8JvM5ROB7c" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Introduction to Algorithms & its Application</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/0IAPZzGSbME" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/u8JZ9gU5o4g" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/SN4x87ZdhGg" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Microprocessor and its Applications</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/zAXAb_ttazY" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/J16wtQBytSc" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/gdL7Kdbb_rA" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>E-Commerce</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/aYFRKceSX5o" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/owuDbxdcj9o" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/PzunqhpoLlY" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Database Management System (DBMS)</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/3EJlovevfcA" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/vuXnRRG-m5M" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/y8XuGhEdslM" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Object Oriented Programming (OOPs)</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/bSrm9RXwBaI" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/ntLJmHOJ0ME" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/7WhnYwoBY24" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Digital Image Processing</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/J-KxVvDRl18" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/tcLJ3FQ2FqI" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/kdLM6AOd2vc" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Programming using Python</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/7wnove7K-ZQ" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/6i3EGqOBRiU" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/vLqTf2b6GZw" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Software Engineering</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/uJpQlyT_CK4" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/OT2O7uNldQk" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/1Ycx7_KlpXk" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Theory of Computation</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/aoUEXRlvmxc" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/58N2N7zJGrQ" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/vvvpCKnmehc" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Multimedia and its Application</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/NPQW-UwR6vQ" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/DMCX1HKneII" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/LMZTyXX6nG0" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Introduction to Computational Intelligence</h2>
        <div class="container sem1">
            <div class="course">
                <iframe src="https://www.youtube.com/embed/uB3i-qV6VdM" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/rC15V-8ZzM8" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="course">
                <iframe src="https://www.youtube.com/embed/GZS6UFrzoTo" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</body>
</html>