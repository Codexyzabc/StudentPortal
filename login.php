<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$login=false;
$showError=false;
$showWrong=false;

if(isset($_POST['login'])){
    include './conn.php';
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql= "Select * from `registration` where Email='$email'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num == 1) {
        while($row=mysqli_fetch_assoc($result)) {
            if(password_verify($password,$row['Password'])) {
                $login=true;
                $email = htmlentities($_POST['email']);

                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'rajanandi.subrata3959@gmail.com';
                //$mail->Password = 'hjxkujjkvbcjxlrz';
                $mail->Password = 'zewsfckdkofienkr';
                $mail->Port = 465;
                $mail->SMTPSecure = 'ssl';
                $mail->isHTML(true);
                $mail->setFrom('rajanandi.subrata3959@gmail.com', $name);
                $mail->addAddress($email);
                $mail->Subject = ("$email ('OTP')");
                $otp= rand(111111,999999);
                $mail->Body =  $otp;
                $mail->send();
                setcookie("otp",$otp,time()+3600*24);
                $_COOKIE['otp'];

                header("location: otp.php");
            }
            else {
                $showError= "Wrong Password";
            }
        }
    }   
    else {
        $showWrong= "You are not Registered";
    }

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
         background-image: url('https://wallpaperaccess.com/full/6367133.png');
         background-repeat: no-repeat;
           
        }
        #reg{
            color: #dee2e6;
            font-family: "Trebuchet MS", Helvetica, sans-serif;
            font-size: 30px;
            text-align:center;
            /* text-decoration: underline; */
        }
        .box_1{
            font-family: Arial, Helvetica, sans-serif;
            color: #f5f2f2;
            background-color:#0303039c;
            max-width:500px;
            margin: 40px auto;
            padding:30px;
            border: 8px solid #212529d9;
            border-radius: 12px;
            box-shadow: 0px 0px 20px #0d6efd;
        }
        .heading{
            background-color: rgb(83, 114, 158);
            padding: 8px;
            color: #f5f2f2;
            font-size: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
        }
        input[type=email],input[type=password] {
                width: 100%;
                padding: 10px 15px;
                margin: 5px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
                border-radius: 5px;
                
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
    if($login) {
        echo '    
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You are logged in.
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
    if($showWrong) {
        echo '    
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '.$showWrong.'.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> ';
    }
    ?>

    <div class="heading"><h1>CU-CS Portal</h1></div>
    <div class="box_1">
        <h1 id="reg">STUDENT LOGIN</h1>
        <form action="./login.php" method="post">
            <input type="email" placeholder="Email Address" name="email" required><br><br>
            <input type="password" placeholder="Password" name="password" required><br><br>
            <input type="submit" value="Login" name="login">
        </form>
        <p>New here? <a href="./register.php">Click to Register</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
 </body>
</html>