<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="student";

$data = mysqli_connect($host,$user,$password,$db);

if ($data === false)
{
    die("connection failed");
}

if (isset($_POST['apply']))
{
    $data_name=$_POST['name'];
    $data_email=$_POST['email'];
    $data_phone=$_POST['phone'];
    $data_age=$_POST['age'];
    $data_address=$_POST['address'];

    $sql = "INSERT INTO admins(name,email,phone,age,address) VALUES ('$data_name','$data_email','$data_phone','$data_age','$data_address')";

    $result = mysqli_query($data,$sql);

    if($result)
    {
        $_SESSION['message'] = "APPLICATION SUBMITTED SUCCESSFULLY";
        header("location:index.php");
    } 
    else 
    {
        echo "Failure";
    }

}


?>