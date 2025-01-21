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
    <title>Notes</title>
</head>
<body>
    <?php require("./nav.php") ?>    
    
    <div class="questions" style="margin-left: 88px;">
        <h2>Books and Handwritten Notes</h2>
        <h2>Semester 1</h2>
        <div class="container sem1">
            <div class="course">
                <h3>Digital Logic</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1n5bPs5tMkr_xpcDIJEdNRG5XB20eMOAb&export=download" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Programming Fundamentals using C</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1zoUC0gkpcx3AbQB_WeFws50PgW0o6-sp&export=download" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
        </div>

        <h2>Semester 2</h2>
        <div class="container sem2">
            <div class="course">
                <h3>Data Structure</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=19j90ee5nbyjRu7G2ZCUHtQJomyxCWhi-&export=download" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Basic Electronic Devices and Circuits</h3>
                <ul class="b">
                    <li>Book : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
        </div>

        <h2>Semester 3</h2>
        <div class="container sem3">
            <div class="course">
                <h3>Computer Organization & Architecture</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1F3dPWMpRThHSsdQOM4cFHVKXSZW2BrGt&export=downloads" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Computational Mathematics</h3>
                <ul class="b">
                    <li>Book : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Operating Systems</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1k7TmogURzITf-vsWfpyc6j4L7qFx8ntm&export=download" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Computer Graphics</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1opSsXSIxUpUiZMKQeSDlLt2UITJeQcQb&export=download" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
        </div>

        <h2>Semester 4</h2>
        <div class="container sem3">
            <div class="course">
                <h3>Data Communication, Networking and Internet Technology</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1vTmg0KZxI3WrgmIGYLAYnznbdtAn1QzY&export=download" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Introduction to Algorithms & its Application</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1LnUJLj6Hu2bbpbYBzBgrwNlQtvyeaSy4&export=download">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Microprocessor and its Applications</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1QDw2oF2FUM-7l4_o21PVicwRlsaOc4C5&export=download" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>E-Commerce</h3>
                <ul class="b">
                    <li>Book : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
        </div>

        <h2>Semester 5</h2>
        <div class="container sem3">
            <div class="course">
                <h3>Database Management System (DBMS)</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1IhHENno64fgNKKfuKGnJehEW4CmuPArB&export=download" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Object Oriented Programming (OOPs)</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1fEYpEoNo1UFSmSMMzyc9eROGvHvcwmJm&export=download">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Digital Image Processing</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1TZkj57Ol06l-IBASaXOA45dpqZCjH0Ru&export=download" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Programming using Python</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1P7KVBYD7qiknTmELelVdQrvt4AWjd0p8&export=download" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
        </div>
        
        <h2>Semester 6</h2>
        <div class="container sem3">
            <div class="course">
                <h3>Software Engineering</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1bTQfXGFeMguRS0gGGhBBLjDEIkuDIKRP&export=download" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Theory of Computation</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1qFQoD5cRvKEW16W-frgcWFrAZayRugVp&export=download" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Multimedia and its Application</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1skpYJAvqO5-YlrdpSPrADNbvFbuO1-lI&export=download" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
            <div class="course">
                <h3>Introduction to Computational Intelligence</h3>
                <ul class="b">
                    <li>Book : <a href="https://drive.google.com/uc?id=1ZNYJenl94WS1Xje7KBaHGlVdwyteoPbS&export=download
                        " target="_blank" target="_blank">Download PDF now</a></li>
                    <li>Notes : <a href="download.php?file=sub" target="_blank">Download PDF now</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>