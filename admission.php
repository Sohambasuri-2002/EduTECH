<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="student";

$data = mysqli_connect($host,$user,$password,$db);

$sql = "SELECT * from admins";

$result = mysqli_query($data,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
    
</head>
<body>

    <?php
    include 'admin_sidebar.php';

    ?>

    <div class="content">
        <h1>Admission</h1>
        <br><br><br>
        <table border="1px">
            <tr>
                <th style="padding: 20px; font-size:15px;">Name</th>
                <th tyle="padding: 20px; font-size:15px;">Email</th>
                <th tyle="padding: 20px; font-size:15px;">Phone</th>
                <th tyle="padding: 20px; font-size:15px;">Age</th>
                <th tyle="padding: 20px; font-size:15px;">Address</th>
            </tr>

            <?php

            while($info=$result->fetch_assoc())
            {

            ?>

            <tr>
                <td style="padding: 20px;">
                    <?php echo "{$info['name']}"; ?>
                </td>
                <td style="padding: 20px;">
                    <?php echo "{$info['email']}"; ?>
                </td>
                <td style="padding: 20px;"> 
                    <?php echo "{$info['phone']}"; ?>
                </td>
                <td style="padding: 20px;"> 
                    <?php echo "{$info['age']}"; ?>
                </td>
                <td style="padding: 20px;"> 
                    <?php echo "{$info['address']}"; ?>
                </td>
            </tr>

            <?php

            }

            ?>
        </table>
    </div>
    
</body>
</html>