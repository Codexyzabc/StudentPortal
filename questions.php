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
    <link rel="stylesheet" href="./questions.css">
    <title>Questions</title>
</head>
<body>
    <?php require("./nav.php") ?> 

    <div style="margin-left: 88px;">
        <h2>Semester Wise Subject's Questions</h2>
        <h2>Semester 1</h2>
        <div class="container sem1">
            <div class="course">
                <h3>Digital Logic</h3>
                <ul class="b">
                    <li>Question 2020 : <a href="https://drive.google.com/uc?id=1RzaSP8wFmxynQq5yu1V-66fdc3DAw9lR&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Programming Fundamentals using C</h3>
                <ul class="b">
                    <li>Question 2021 : <a href="https://drive.google.com/uc?id=1OKXfI194WTm-nTePKyvdi6kkytBcu3G3&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
        </div>

        <h2>Semester 2</h2>
        <div class="container sem2">
            <div class="course">
                <h3>Data Structure</h3>
                <ul class="b">
                    <li>Question 2021 : <a href="https://drive.google.com/uc?id=1BKYJoGTVFt0ps38tCRc6STETvwjblT_p&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Basic Electronic Devices and Circuits</h3>
                <ul class="b">
                    <li>Question 2021 : <a href="https://drive.google.com/uc?id=1qvfny3JrqGmjCcuOgjRSGOapVEX3RgiF&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
        </div>

        <h2>Semester 3</h2>
        <div class="container sem3">
            <div class="course">
                <h3>Computer Organization & Architecture</h3>
                <ul class="b">
                    <li>Question 2020 : <a href="https://drive.google.com/uc?id=1UKD8K9w5DP-c0QZcNuFwER4ucZ3mKLwr&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2021 : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Computational Mathematics</h3>
                <ul class="b">
                    <li>Question 2020 : <a href="https://drive.google.com/uc?id=1Kzpc6j4YEOCzt5gOIPZ8VsKDFixacImD&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2021 : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Operating Systems</h3>
                <ul class="b">
                    <li>Question 2020 : <a href="https://drive.google.com/uc?id=1T_jcmPIRnezEaKMROSzdQn7HmtgMYz-d&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2021 : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Computer Graphics</h3>
                <ul class="b">
                    <li>Question 2020 : <a href="https://drive.google.com/uc?id=1rv0kOAGZjjvVTPQZfmeM9qP6W8QaMgSR&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2021 : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
        </div>

        <h2>Semester 4</h2>
        <div class="container sem3">
            <div class="course">
                <h3>Data Communication, Networking and Internet Technology</h3>
                <ul class="b">
                    <li>Question 2021 : <a href="https://drive.google.com/uc?id=126i5ez1z9nNcrB1biaQdeFSsOvKrHzvR&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="https://drive.google.com/uc?id=1e-aVkYzMGi1trI5rou1AFTYftUky4ouL&export=download
                " target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Introduction to Algorithms & its Application</h3>
                <ul class="b">
                    <li>Question 2021 : <a href="https://drive.google.com/uc?id=1MIr8BVf2dX8bdeDY0HcGc43TWpnH9J_e&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="https://drive.google.com/uc?id=1cXFvxKSVH6ridnosVnSwTUaeJ4dJSVZx&export=download
                " target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Microprocessor and its Applications</h3>
                <ul class="b">
                    <li>Question 2021 : <a href="https://drive.google.com/uc?id=1s6owdKSgUx7kpv7BZx-3JC1QZyb063yc&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="https://drive.google.com/uc?id=18q7eBdezZVdAyr1sr2iL0rWobopnYDBf&export=download
                " target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>E-Commerce</h3>
                <ul class="b">
                    <li>Question 2021 : <a href="https://drive.google.com/uc?id=1F96pSqfOhX8beERo9KhdsIoVa0p7Otjb&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="https://drive.google.com/uc?id=15ByQsx-O68XrbK2b5HTCl-5rfe3eGZI3&export=download
                " target="_blank">Download PDF now</a></li>
                </ul>
            </div>
        </div>

        <h2>Semester 5</h2>
        <div class="container sem3">
            <div class="course">
                <h3>Database Management System (DBMS)</h3>
                <ul class="b">
                    <li>Question 2020 : <a href="https://drive.google.com/uc?id=134V_bnoceAnOfsk9fq9C90bzqDGWFFZQ&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2021 : <a href="https://drive.google.com/uc?id=1dDoxlHOX4Bb9I0R-Z-u-tg1o6gezqE8B&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="https://drive.google.com/uc?id=1nZZGxcy79FZo9Xwu-KYnNR37UBzXZUKq&export=download
                " target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Object Oriented Programming (OOPs)</h3>
                <ul class="b">
                    <li>Question 2020 : <a href="https://drive.google.com/uc?id=1MHQ7kKO5MDi8FrQNA756lrpzYvBR3ZKM&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2021 : <a href="https://drive.google.com/uc?id=1MVat4f_rVb0Am5wAHTEoGfWuJPGSta1W&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="https://drive.google.com/uc?id=1OG_wrqGHSP1syoXKkYOnXp1P6wyR9lj8&export=download
                " target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Digital Image Processing</h3>
                <ul class="b">
                    <li>Question 2020 : <a href="https://drive.google.com/uc?id=1AdmQZAtG1TkU4wyraJlXUKm4mg7rX7Kv&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2021 : <a href="https://drive.google.com/uc?id=1AKtUTVTFUb1d_qPIDuVqTk6_AASER_9a&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="https://drive.google.com/uc?id=1yLy9Kx0JFkeENfudyhxCUPvG_u6gVWeW&export=download
                " target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Programming using Python</h3>
                <ul class="b">
                    <li>Question 2020 : <a href="https://drive.google.com/uc?id=12pHN9U5Dds71xCN0mbu6wixFNGBE4VgP&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2021 : <a href="https://drive.google.com/uc?id=1gUXE3RB1K4ryw3Uhmjq6oEZwZtcDtFbT&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="https://drive.google.com/uc?id=1zLJwCCUa0ig0o3Ihj_84w6dyizF6L2RO&export=download
                " target="_blank">Download PDF now</a></li>
                </ul>
            </div>
        </div>
        
        <h2>Semester 6</h2>
        <div class="container sem3">
            <div class="course">
                <h3>Software Engineering</h3>
                <ul class="b">
                    <li>Question 2021 : <a href="https://drive.google.com/uc?id=1kGQSvp_6QUMh9cOI210m7b-Q4djtzMgc&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="https://drive.google.com/uc?id=1O4Hki460s4J0sJEGWXnVpPPLam7XMbYw&export=download
                        " target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Theory of Computation</h3>
                <ul class="b">
                    <li>Question 2021 : <a href="https://drive.google.com/uc?id=1leChlJsg1h7tdlF-_a3BmxSB48xyLwnS&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="https://drive.google.com/uc?id=1ovO0LWvAbc5RY4LcJJcAW_OdKfoOdBT3&export=download
                        " target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Multimedia and its Application</h3>
                <ul class="b">
                    <li>Question 2021 : <a href="https://drive.google.com/uc?id=1OhJrm46sKpecqYwPHoLuAGYz7g6PUmHr&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="https://drive.google.com/uc?id=1Zpg1GRkqn9lzjVMJJmfJWF5P4KnGUukF&export=download
                        " target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Introduction to Computational Intelligence</h3>
                <ul class="b">
                    <li>Question 2021 : <a href="https://drive.google.com/uc?id=1HlVFqh30dyrTjYRUX1seWDT2NgGqwt_r&export=download
                        " target="_blank">Download PDF now</a></li>
                    <li>Question 2022 : <a href="https://drive.google.com/uc?id=1CqL3QSy4sx9eoLXgzlGPuOFSAozxZjZp&export=download
                        " target="_blank">Download PDF now</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>