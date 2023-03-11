<?php
include("connection.php");
    session_start();
    $usr = $_SESSION['Login'];
    if($usr==true){

    }
    else{
      header('location:Login_std.php');
    }
    $query="SELECT * FROM `sem_cgpa` where SID = '$usr'"; 
    $result=mysqli_query($conn,$query);
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

        .img {
            margin-top: 10%;
        }

        .title {
            margin: 0;
        }

        .title>p {
            font-size: 280%;
        }

        .container{
            margin-top: 14%;
        }

        tr{
            color: white ;
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
            <div class="list">
                <ul>
                    <li><?php echo $usr;?></li>
                    <li><a href="">Settings</a></li>
                    <li class="button1" style="margin: 0; border-radius: 2px;"><a href="index.html">
                            <h5>Logout</h5>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <table>
            <thead>
                <tr style="background: #337ab7; color:white; text-align: center;">
                    <th>Semester</th>
                    <th>Total Credit</th>
                    <th>GPA</th>
                    <th>CGPA</th>
                </tr>
            </thead>
            <tbody>
            <?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> 
		<td><?php echo $rows['semester']; ?></td> 
		<td><?php echo $rows['Total_Credit']; ?></td> 
		<td><?php echo $rows['GPA']; ?></td>
        <td><?php echo $rows['CGPA']; ?></td>
		</tr> 
	<?php 
               } 
          ?>
            </tbody>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <p>Copyright © Nur Ahmed 2022</p>
    </div>
</body>

</html>