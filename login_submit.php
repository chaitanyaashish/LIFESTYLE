<?php
require 'includes/common.php';
$email= mysqli_real_escape_string($con,$_POST['email']);
$password=md5(mysqli_real_escape_string($con,$_POST['password']));
$query="SELECT id,email,password FROM USERS WHERE EMAIL='$email';";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if ($num==0)
{
    echo "Incorrect username. Try Again";
}
else
{
    $a=mysqli_fetch_array($result);
    if ($password==$a[2])
    {
        session_start();
    $_SESSION['id']=$a[0];
    $_SESSION['email']=$a[1];
    header('location:product.php');
    }
    else
    {
        echo "Incorrect Password.";
    }
}
?>