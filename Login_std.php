<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
    <title>Login | Student</title>
</head>

<body>
    <div class="container">
        <div class="head">
            <div class="logo">
                <img src="media/Logo-PNG.jpg" alt="GUB-LOGO" />
            </div>
            <div class="title">
                <p><b>GREEN UNIVERSITY OF BANGLADESH</b></p>
            </div>
        </div>
        <div class="login_title">
            <h1>Student Login</h1>
        </div>
        <div id="form">
            <form action="" method="post">
                <input type="text" name="ID" placeholder="Student ID" required>
                <input type="password" name="Password" placeholder="Password" required>
                <button type="submit" name="Login"><b>Login</b></button>
            </form>

        </div>
    </div>
    <div class="footer">
        <p>Copyright © Nur Ahmed 2022</p>
    </div>
</body>

</html>

<?php
if(isset($_POST['Login'])){
    include("connection.php");
    session_start();
    $id = $_POST['ID'];
    $pwd=$_POST['Password'];

    $query = "SELECT * FROM `std_login` where ID = '$id' && Password = '$pwd'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);

    if($total == 1){
        $_SESSION['Login'] = $_POST['ID'];
        header('location:std_pg1.php');
        
        
    }
    else{
        echo '<script>';  
echo 'alert("Incorrect ID or Password")';  
echo '</script>'; 
    }
}
?>