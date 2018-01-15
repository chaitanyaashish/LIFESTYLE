<?php

function check($item_id)
{
    include 'includes/common.php';
 $user_id=$_SESSION['id'];
$q="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and
status='Added to cart';";  
$res=mysqli_query($con, $q);
$n=mysqli_num_rows($res);
if ($n>0)
{
    return 1;
}
else
{
    return 0;
}

}
?>
