<?php
include("connection.php");
session_start();
    $usr = $_SESSION['Login1'];
    if($usr==true){

    }
    else{
      header('location:Login_fct.php');
    }
if(isset($_POST['submit'])){
  $title = $_POST['Course_Code'];
  $ID = $_POST['SID'];
  $Marks = $_POST['Marks'];
  $comment = $_POST['Comments'];
$sql = "INSERT INTO `ind_res` (`Course_Code`, `SID`, `Marks`, `Comments`) VALUES ('$title', '$ID', '$Marks', '$comment')";
if($conn->query($sql)===true){
}

$conn->close();
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
    #button{
        margin-top: 10%;
        margin-bottom: 10%;
    }
    h1{
        color: white;
        text-align: center;
    }
    .form{
        margin: auto;
        color: white;
        margin-bottom: 5%;
        justify-content: center;
    }
    input {
  width:100%;
  padding: auto;
  margin: auto;
  display: inline-block;
  border-radius: 5px;
  box-sizing: border-box;
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
    <h1>ADD STUDENT RESULT</h1>
    <div class="form">
        <form action="" method="post">
            <label for="Course_Code">Course Code:</label>
            <input type="text" name="Course_Code" required><br><br>
            <label for="SID">Student ID :</label>
            <input type="number" name="SID" required><br><br>
            <label for="Marks">Total Marks :</label>
            <input type="number" name="Marks"><br><br>
            <label for="Comments">Special Comments :</label>
            <input type="text" name="Comments"><br><br>
            <button name="submit">Submit</button>
        </form>
    </div>
  </div>
  <div class="footer">
    <p>Copyright © Nur Ahmed 2022</p>
  </div>
</body>

</html>