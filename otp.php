<?php

if(isset($_POST['entered']))
{
  $opt1=$_POST['subotp'];

  if($opt1== $_COOKIE['otp'])
  {
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['sname'] = $sname;
    header("location: home.php");
  }
  else
  {
    echo '    
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Wrong OTP!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> ';
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
    <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/1e8d61f212.js"></script>    
    <title>Login</title>
    <style>
        body {
            background: #c8e8e9;
        }
        #reg{
            color: #15153f;
            font-family: "Trebuchet MS", Helvetica, sans-serif;
            font-size: 30px;
            text-align:center;
            /* text-decoration: underline; */
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
        input[type=text],input[type=password] {
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

    <div class="box_1">
        <h1 id="reg">OTP Verification</h1>
        <form method="post">
            <br><center><h5 style="color: green;">Check your email for the OTP</h5></center><br>
            <input type="text" placeholder="Enter the OTP" name="subotp" required><br><br>
            <input type="submit" value="Submit" name="entered">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/rizalcss@1.5.0/js/rizal.min.js" integrity="sha256-HBuvk3PCFCXtzy/G/393UvcosSWVy6WHf5sRnZdzmio=" crossorigin="anonymous"></script>
</body>
</html>