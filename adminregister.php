<?php 
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../conn.php';
    $aname = $_POST["aname"];
    $gender = $_POST["gender"];
    $dob = date('Y-m-d',strtotime($_POST["dob"]));
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    //$exists=false;

    // Check whether this password exist
    $existSql = "Select * from `admin` where Email='$email'";
    $result= mysqli_query($conn,$existSql);
    $numExistRows=mysqli_num_rows($result);
    if($numExistRows == true) {
        //$exists = true;
        $showError = "Email already exists";
    }
    else {
        //$exists = false;
        if($password == $cpassword) {
            $hash=password_hash($password, PASSWORD_DEFAULT);
            $sql= "INSERT INTO `admin` (`Name`, `Gender`, `DOB`, `Email`, `Password`) 
            VALUES ('$aname', '$gender', '$dob', '$email', '$hash')";
            $result=mysqli_query($conn,$sql);
            if($result) {
                $showAlert=true;
            }
        }
        else {
            $showError= "Passwords do not match.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            background: #1d72a3de;
        }
        #reg{
            color: #15153f;
            font-family: "Trebuchet MS", Helvetica, sans-serif;
            font-size: 30px;
            text-align:center;
        }
        .box_1{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f1f1f2;
            max-width:500px;
            margin: 50px auto;
            padding:25px;
            border: 3px solid #e9e9ea;
            border-radius: 10px;
            box-shadow: 0px 0px 20px #535252;
        }
        input[type=text], input[type=date] , input[type=email],input[type=password] {
            width: 100%;
            padding: 10px 15px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;   
        }
        input[type=submit] {
            padding: 8px;
            width: 100%;
            outline: none;
            background: transparent;
            border-radius: 5px;
            border: 1px solid green;
            color: green;
            font-size: 20px;
        }
        input[type=submit]:hover {
            background: green;
            color: white;
            transition: all 0.3s ease;
        }
        input {
            outline: none;
            font-size: 15px;
        }
        p {
            text-align: center;
            margin-top: 30px;
        }      
    </style>
</head>
<body>
    <?php
    if($showAlert) {
        echo '    
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is now created and you can <a href="./adminlogin.php">login.</a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> ';
    }
    if($showError) {
        echo '    
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '.$showError.'.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> ';
    }
    ?>
	<div class="box_1">
        <h1 id="reg">ADMIN REGISTRATION</h1>
        <form action="./adminregister.php" method="post">
            <input type="text" placeholder="Enter Name" name="aname" maxlength="40" required><br><br>
            <label>Gender: </label>
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female" required> Female 
            <input type="radio" name="gender" value="Others" required> Others <br><br>
            <label> Date of Birth: </label> <input type="date" name="dob" required><br><br>
            <input type="email" placeholder="Enter Email" name="email" maxlength="100" required><br><br>
            <input type="password" placeholder="Enter Password" name="password" maxlength="25" required><br><br>
            <input type="password" placeholder="Confirm Password" name="cpassword" required><br><br>
            <input type="submit" value="Register" name="register">
        </form>
    <p>Already a member?<a href="./adminlogin.php"> Click to Login</a></p>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
