<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
    header("location: login.php");
    exit;
}
?>

<?php
if(isset($_POST['send'])){
  include './conn.php';
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"]; 
  $sql= "INSERT INTO `contact` (`Name`, `Email`, `Message`) VALUES ('$name', '$email', '$message')";
  $result=mysqli_query($conn,$sql);
  if($result) {
    echo '    
        <script>
        alert("Your message has been sent successfully.");
        </script> ';
  }
  else {
    echo '    
        <script>
        alert("Failed to send message.");    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </script> ';
  }
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="contact.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <?php require("./nav.php") ?>    

  <div class="main" style="margin-left: 88px;">
    <center>
      <div class="container">
        <div class="content">
          <div class="left-side">
            <div class="address details">
              <i class="fas fa-map-marker-alt"></i>
              <div class="topic">Address</div>
              <div class="text-one">Surkhet, NP12</div>
              <div class="text-two">Baranagar 06</div>
            </div>
            <div class="phone details">
              <i class="fas fa-phone-alt"></i>
              <div class="topic">Phone</div>
              <div class="text-one">+91 98 3227 1180</div>
              <div class="text-two">+91 74 3961 1592</div>
            </div>
            <div class="email details">
              <i class="fas fa-envelope"></i>
              <div class="topic">Email</div>
              <div class="text-one">r.subratanandi@gmail.com</div>
              <div class="text-two">rhazra97@gmail.com</div>
            </div>
          </div>
          <div class="right-side">
            <div class="topic-text">Send us a message</div>
            <p>If you have any types of quries related to any questions, you can send me message from here. It's my pleasure to help you.</p>
          <form action="./contact.php" method="post">
            <div class="input-box">
              <input type="text" placeholder="Enter your name" name="name">
            </div>
            <div class="input-box">
              <input type="text" placeholder="Enter your email" name="email">
            </div>
            <div class="input-box message-box">
              <textarea id="message" cols="30" rows="10" name="message" placeholder="Write your query within 1000 words."></textarea>
            </div>
            <div class="button">
              <input type="submit" value="Send Now" name="send" class="send" style="color: #fff;font-size: 18px;outline: none;
              border: none;padding: 8px 16px;border-radius: 6px;background: #3e2093;cursor: pointer;transition: all 0.3s ease;">
            </div>
          </form>
        </div>
        </div>
      </div>
    </center>
  </div>
</body>
</html>