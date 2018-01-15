<?php 
require 'includes/common.php';
if (!isset($_SESSION['email']))
{
    header('location:index.php');
}
$id=$_GET['id'];
$user_id=$_SESSION['id'];
$x=0;
while ($x<count($id))
{
    $q="Update users_items set status ='CONFIRMED' where $item_id=$id[$x] and user_id=$user_id;";
    $res= mysqli_query($con, $q);
    $x=$x+1;
}
?>
<html>
    <head>
        <title>Success</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js" type="text/javascript"> </script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"> </script>
        <link href="index.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div>
            <?php
            include 'includes/header.php';
            ?>
        </div>
        <br><br>
    <center><h3>Your order is confirmed. <br>Thank you for shopping
with us. <br>
<a href="product.php">Click here</a> to purchase any other item.</h3></center>
         <?php
            include 'includes/footer.php'
           ?>
    </body>
</html>
