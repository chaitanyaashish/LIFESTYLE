<?php
require 'includes/common.php';
if (!isset($_SESSION['email']))
{
    header ('location:index.php');
}
$user_id=$_SESSION['id'];
$old=mysqli_real_escape_string($con,$_POST['old']);
$new=mysqli_real_escape_string($con,$_POST['new']);
$renew=mysqli_real_escape_string($con,$_POST['renew']);
if (strlen($new)!=strlen($renew))
{
    echo "The new password does not match.";
}
$q1="Select password from users where id=$user_id";
$r1= mysqli_query($con, $q1);
$row= mysqli_fetch_array($r1);
if(md5($old)==$row[0])
{
    $new=md5($new);
    $q2="Update users set password='$new' where id=$user_id;";
    $r2= mysqli_query($con, $q2);
    if ($r2)
    {
        echo "Password Updated.";
    }
}
else
{
    echo 'Old passwordis incorrect. <a href="setting.php">Try again.</a>';
}
?>

