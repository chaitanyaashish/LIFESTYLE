<?php
require 'includes/common.php';
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$regex_email="/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/";
if (!preg_match($regex_email,$email))
{
    echo 'Incorrect email';
}
$password=md5(mysqli_real_escape_string($con,$_POST['password']));
if (strlen($password)<6)
{
    echo 'Password should have at least 6 characters';
}
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$q1="Select id from users where email=$email;";
$res= mysqli_query($con, $q1);
if (mysqli_num_rows($res))
{
    die("The email alredy exits.");
    
}
$q2="Insert into users(name,email,password,contact,city,address) values('$name','$email','$password',$contact,'$city','$address');";
$res2= mysqli_query($con, $q2);
if ($res2)
{
    echo "User successfully registered.";
    session_start();
    $_SESSION['id']= mysqli_insert_id($con);
    $_SESSION['email']=$email;
    header('location:product.php');
    
}
else
{
    echo"Some problem occurred. Please try again.";
}
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

