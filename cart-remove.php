<?php
require 'includes/common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$q="delete from users_items where user_id=$user_id and item_id=$item_id;";
$res=mysqli_query($con,$q);
if ($res)
{
    header('location:cart.php');
}
else
{
    echo'An error occurred while deletion. Try Again.';
}
?>