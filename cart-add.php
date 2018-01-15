<?php
require 'includes/common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$q="INSERT INTO USERS_ITEMS(USER_ID,ITEM_ID,STATUS) VALUES ($user_id,$item_id,'ADDED TO CART');";
$res=mysqli_query($con,$q);
header('location:product.php');

?>