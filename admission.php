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
        <a class="h2" href="">Admin dashboard</a>

        <div class="logout">
            <a class="h3" href="logout.php">Logout</a>
        </div>

    </header>

    <aside>
        <ul>
            <li>
                <a href="admission.php">Admission</a>
            </li>

            <li>
                <a href="">Add Student</a>
            </li>

            <li>
                <a href="">View Student</a>
            </li>

            <li>
                <a href="">Add Teacher</a>
            </li>

            <li>
                <a href="">View Teacher</a>
            </li>

            <li>
                <a href="">Add Course</a>
            </li>

            <li>
                <a href="">View Course</a>
            </li>
        </ul>
    </aside>

    <div class="content">
        <h1>Admission</h1>
    </div>
    
</body>
</html>