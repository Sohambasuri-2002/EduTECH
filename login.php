<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="body_color">
    
    <center>
        <div class="form_deg">
                <center class="title_deg">
                    Login Form

                    <h5>
                        <?php
                        error_reporting(0);
                        session_start();
                        session_destroy();
                        echo $_SESSION['loginmessage'];


                    ?>
                    </h5>
                </center>
            <form action="login_check.php" method="post" class="login_form">
                
                <div>
                    <label class="label_deg">Username</label>
                    <input type="text" name="username">
                </div>

                <div>
                    <label class="label_deg">Passsword</label>
                    <input type="password" name="password">
                </div>

                <div>
                    <input class="btn btn-primary" type="submit" value="Login">
                </div>
            </form>
        </div>
    </center>
</body>
</html>