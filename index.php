<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['$message'])
{
    $message = $_SESSION['message'];

    echo " <script type='text/javascript'>
    alert('$message');
    </script>
    ";
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTECH</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
        <nav>
            <img class="logo_front" src="image/portal111.jpg">
            <label class="logo">EduTECH</label>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Admission</a></li>
                <li><a href="login.php">Login</a></li>
                
            </ul>
        </nav>

        <div class="section1">

            <img class="main_logo" src="image/edu.jpg">
        </div>


        <br><br><br><br><br><br>
        <hr>
        <br><br><br><br><br>






        
        <p style="text-align:center; font-size:50px; font-family: 'Young Serif', serif; font-weight:bold;">Welcome to EduTECH</p>
        <center>
            <img class="blue" src="image/blu.png">
        </center>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img class="welcome_img" src="image/school.jpg">
                </div>

                <div class="col-md-4">
                    <h1>About US</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aliquid repudiandae hic dolorum quo in error doloribus ut fugiat reiciendis veniam natus architecto, quas neque cum soluta! Voluptates voluptate quae saepe maiores modi molestias animi officia quasi earum cum, dolorem cupiditate ex placeat qui. Architecto voluptas blanditiis quibusdam quaerat, nisi impedit quos. Quae, at. Ullam hic quo voluptatibus quas unde expedita ab rerum, culpa in, modi dolorum distinctio accusantium at ducimus suscipit enim voluptas omnis explicabo? Quisquam officia corporis quia, minima eligendi suscipit dolorem maiores amet aspernatur id repellendus, doloremque optio nulla animi deleniti sapiente repudiandae ipsa sit, impedit minus laboriosam nobis. Dignissimos porro error unde quas voluptatum est id magni veritatis? Quo sit quisquam rem, quis repellendus adipisci saepe ad beatae tempore pariatur dignissimos officia accusamus laudantium id asperiores itaque eligendi laboriosam obcaecati sed consequatur iste earum dolorem? Aliquid hic quis suscipit! Ipsum, harum modi facilis neque repellat ipsa!</p>
                </div>
            </div>
        </div>

        <br><br><br><br><br><br>
        <hr>
        <br><br><br><br><br>

        <center>
            <h1 style="font-size:40px;font-weight:bold;">Our Courses</h1>
        </center>
        <center>
            <img class="blue" src="image/blu.png">
        </center>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="course" src="image/cse.jpg">
                    <p style="text-align:center;font-size:18px;font-weight:bold;">Computer Science</p>
                </div>

                <div class="col-md-4">
                    <img class="course1" src="image/it.jpg">
                    <p style="text-align:center;font-size:18px;font-weight:bold;">Information Technology</p>
                </div>

                <div class="col-md-4">
                    <img class="course2" src="image/ece.jpg">
                    <p style="text-align:center;font-size:18px;font-weight:bold;">Electronics & Communication</p>
                </div>
                
                <div class="col-md-4">
                    <img class="cont1" src="image/civil.png">
                    <p style="text-align:center;font-size:18px;font-weight:bold;">Civil Engineeering</p>
                </div>
                <br><br><br><br>
                <div class="col-md-4">
                    <img class="cont2" src="image/eee.jpg">
                    <p style="text-align:center;font-size:18px;font-weight:bold;">Electrical Engineering</p>
                </div>
                <br><br><br><br>
                <div class="col-md-4">
                    <img class="cont3" src="image/mec.webp">
                    <p style="text-align:center;font-size:18px;font-weight:bold;">Mechanical Engineering</p>
                </div>
            </div>
        </div>
       
        
         
       
       


        <br><br><br><br><br>
        <hr>
        <br><br><br><br><br>

        
            
            <center>
                <h1 style="font-size:40px;font-weight:bold;">Our Rankings</h1>
            </center>
            <center>
            <img class="blue" src="image/blu.png">
            </center>
            <br><br><br>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img class="course" src="image/k4.webp">
                        
                    </div>

                    <div class="col-md-4">
                        <img class="course1" src="image/k2.jpg">
                        
                    </div>

                    <div class="col-md-4">
                        <img class="course2" src="image/k3.png">
                        
                    </div>
                </div>
            </div>
            
        
        
        
        <br><br><br><br><br>
        <hr>
        <br><br><br><br><br>

        <center>
            <h1 style="font-size:40px;font-weight:bold;">Our Alumni</h1>
        </center>
        <center>
            <img class="blue" src="image/blu.png">
        </center>

        <br><br><br>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="course" src="image/p1.jpg">
                    <h1 style="text-align:center;left:-20px; font-size:30px; font-family: 'Young Serif', serif; font-weight:bold;">Rohan Mishra</h1>
                    <p style="text-align:center; font-family: 'Young Serif', serif; font-weight:bold;">Placed : Amazon (2023) </p>
                </div>

                <div class="col-md-4">
                    <img class="course1" src="image/p1.jpg">
                    <h1 style="text-align:center;left:-20px; font-size:30px; font-family: 'Young Serif', serif; font-weight:bold;">Shruti Ghoshal</h1>
                    <p style="text-align:center; font-family: 'Young Serif', serif; font-weight:bold;">Placed : Deloitte</p>
                </div>

                <div class="col-md-4">
                    <img class="course2" src="image/p1.jpg">
                    <h1 style="text-align:center;left:-20px; font-size:30px; font-family: 'Young Serif', serif; font-weight:bold;">Rahul Roy</h1>
                    <p style="text-align:center; font-family: 'Young Serif', serif; font-weight:bold;">Placed : Capgemini</p>
                </div>
            </div>
        </div>

        <br><br><br><br><br>
        <hr>
        <br><br><br><br><br>

        <center>
            <h1 style="font-size:40px;font-weight:bold;">Top Companies Hiring</h1>
        </center>
        <center>
            <img class="blue" src="image/blu.png">
        </center>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="course" src="image/a1.png">
                    <!-- <p style="text-align:center;font-size:18px;font-weight:bold;">Amazon</p> -->
                </div>

                <div class="col-md-4">
                    <img class="course1" src="image/a2.jpg">
                    <!-- <p style="text-align:center;font-size:18px;font-weight:bold;">Capgemini</p> -->
                </div>

                <div class="col-md-4">
                    <img class="course2" src="image/a3.png">
                    <!-- <p style="text-align:center;font-size:18px;font-weight:bold;">Ericsson</p> -->
                </div>
                
                <div class="col-md-4">
                    <img class="cont1" src="image/a4.jpg">
                    <!-- <p style="text-align:center;font-size:18px;font-weight:bold;">High radius</p> -->
                </div>
                <br><br><br><br>
                <div class="col-md-4">
                    <img class="cont2" src="image/a7.webp">
                    <!-- <p style="text-align:center;font-size:18px;font-weight:bold;">Infosys</p> -->
                </div>
                <br><br><br><br>
                <div class="col-md-4">
                    <img class="cont3" src="image/a6.jpg">
                    <!-- <p style="text-align:center;font-size:18px;font-weight:bold;">Wipro</p> -->
                </div>
            </div>
        </div>

        <br><br><br><br><br>
        <hr>
        <br><br><br><br><br>

        <center>
            <h1 style="font-size:40px;font-weight:bold;">Admission Form</h1>
        </center>
        
        <br><br>

        <div align="center" class="admission_form">


            <form action="data_check.php" method="POST">
                <div class="adm_int">
                    <label class="text">Name</label>
                    <input class="intext" type="text" name="name" id="name" placeholder="Enter Name" autocomplete="off" required>
                </div>

                <div class="adm_int">
                    <label class="text">Email</label>
                    <input class="intext" type="email" name="email" id="email" placeholder="Enter Email" autocomplete="off" required>
                </div>

                <div class="adm_int">
                    <label class="text">Phone</label>
                    <input class="intext" type="text" name="phone" id="address" placeholder="Enter Address" autocomplete="off" required>
                </div>

                <div class="adm_int">
                    <label class="text">Age</label>
                    <input class="intext" type="text" name="age" id="age" placeholder="Enter Age" autocomplete="off" required>
                </div>


                <div class="adm_int">
                    <label class="text">Address</label>
                    <input class="intext" type="text" name="address" id="address" placeholder="Enter Address" autocomplete="off" required>
                </div>

                <div class="adm_int">
                    <input class="btn btn-primary" type="submit" value="apply" name="apply" id="submit">
                </div>

            </form>
        </div>
        <br><br><br>
        <footer>
            <p class="foottext">All rights reserved by @EduTECH</p>
        </footer>

</body>
</html>

