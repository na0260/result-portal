<?php
include("connection.php");
    session_start();
    $usr = $_SESSION['Login'];
    if($usr==true){

    }
    else{
      header('location:Login_std.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/style.css" />
  <title>Portal | GUB</title>
  <style>
    .head {
      gap: 0;
      grid-template-columns: auto;
    }

    .marquee>p {
      font-family: Georgia, 'Times New Roman', Times, serif;
      color: white;
      font-size: 220%;
    }

    .logo {
      margin: 0;
    }

    .img{
      margin-top: 10%;
    }
    .title {
      margin: 0;
    }

    .title>p {
      font-size: 280%;
    }

    .container{
      margin-top: 10%;
    }
    .button1{
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="header">
    <div class="logo">
      <img src="media/Logo-PNG.jpg" alt="GUB-LOGO" />
    </div>
    <div class="title">
      <p><b>GREEN UNIVERSITY OF BANGLADESH</b></p>
    </div>
    <div class="details">
      <div class="img">
        <img src="media/Logo-PNG.jpg" alt="Photo" height="100px" width="100px">
      </div>
      <div class="list"><ul>
        <li><?php echo $usr;?></li>
        <li><a href="">Settings</a></li>
        <li class="button1" style="margin: 0; border-radius: 2px;"><a href="index.html"><h5>Logout</h5></a></li>
      </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="head">
      <div class="marquee">
        <p>
          <marquee behavior="" direction=""><b>Welcome To GUB Result Portal</b></marquee>
        </p>
      </div>
    </div>
    <div id="button">
      <div class="button1">
        <a href="http://localhost:8080/Project/Ind_res.php">
          <h1>INDIVIDUAL COURSE RESULT</h>
        </a>
      </div>
      <div class="button2">
        <a href="http://localhost:8080/Project/sem_cgpa.php">
          <h1>SEMESTER WISE CGPA</h1>
        </a>
      </div>
    </div>
  </div>
  <div class="footer">
    <p>Copyright © Nur Ahmed 2022</p>
  </div>
</body>

</html>