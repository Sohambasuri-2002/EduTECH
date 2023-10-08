<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='admin')
{
    header("location:login.php");
}



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

    <header class="header">
        <a class="h2" href="">Student dashboard</a>

        <div class="logout">
            <a class="h3" href="logout.php">Logout</a>
        </div>

    </header>

    <aside>
        <ul>
            <li>
                <a href="">My Courses</a>
            </li>

            <li>
                <a href="">Result</a>
            </li>
        </ul>
    </aside>


    <div class="content">
        <h1>Lorem ipsum dolor sit amet.</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis eligendi voluptatibus non accusantium quis, ea pariatur quisquam culpa alias, voluptas impedit recusandae nam perspiciatis quae maxime omnis enim totam labore illum eum porro voluptate voluptates dicta. Animi quas iste, nisi unde harum natus neque! Nisi.</p>
    </div>
</body>
</html>