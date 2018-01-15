<?php
require 'includes/common.php';
if (!isset($_SESSION['email']))
{
    header('location:login.php');
}
$user_id=$_SESSION['id'];
$q="Select ITEM_ID,NAME,PRICE,STATUS FROM ITEMS INNER JOIN  USERS_ITEMS ON ITEMS.ID=USERS_ITEMS.ITEM_ID AND USERS_ITEMS.USER_ID=$user_id;";
$res= mysqli_query($con, $q);
$sum=0;
$id=array();
if ($res)
{
    $n= mysqli_num_rows($res);
    if ($n==0)
    {
        echo"Add items to cart first";
    }
    else
    {     $x=0;
        while($row=mysqli_fetch_array($res))
        {
            $sum+=$row[2];
            $id[$x]=$row[0];
            $x++;
        }
    }
}
else
{
    echo "A problem occurred.";
}
?>
<html>
    <head>
        <title>Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js" type="text/javascript"> </script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"> </script>
        <link href="index.css" type="text/css" rel="stylesheet">
    </head>
    <body>
            <?php
            include 'includes/header.php';
            ?>
        <br><Br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
            <table class="table table-responsive table-hover table-striped">
                <tbody>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <td></td>
                    </tr>
                    
                        <?php
                        $res2=mysqli_query($con,$q);
                        while ($ROW= mysqli_fetch_array($res2)) {
                        ?>
                    <tr>
                        <td> <?php echo"$ROW[0]"; 
                        echo'<a href="cart-remove?id={$ROW[0]}" class="remove_item_link">Remove</a>'; ?></td>
                        <td><?php echo"$ROW[1]"; ?></td>
                        <td><?php echo"$ROW[2]"; ?></td>
                        
                    </tr>
                        <?php } ?>
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td>Rs <?php echo "$sum"; ?></td>
                        <td><?php echo'<a href="success.php?id=$id" role="button" class="btn btn-primary btn-block">Confirm Order</a>';?></td>
                    </tr>
                </tbody>
            </table>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php'
           ?>
    </body>
</html>
