<?php
include 'includes/common.php';
?>
<html>
    <head>
        <title>Products at Lifestyle</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js" type="text/javascript"> </script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"> </script>
        <link href="index.css" type="text/css" rel="stylesheet">
        <style>
            img {
                max-height: 200px;
            }
        </style>
    </head>
    <body>   
            <?php
            include 'includes/header.php';
            ?>
        <br><br><br><br>
        <?php include 'checkifadded.php' ?>
        <div class="container">
            <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.</p>
            </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="img/cam1.jpg">
                        <center>  <div class="caption">   
                            <h2>Canon EOS</h2>
                            <p>Price: Rs. 36,000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php 
                            } else {
                                if (check(1))
                                {
                           
                                echo'<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to Cart</a>'; }
                                else {
                               ?>
                            <p><a href="cart-add.php?id=1" name="add" role="button" class="btn btn-primary btn-block">Add to Cart</a> </p>
                            <?php }} ?>
                            </div> </center>
                    </div>
                </div>
                    <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="img/cam2.jpg">
                        <center>  <div class="caption">   
                            <h2>Sony DSLR</h2>
                            <p>Price: Rs. 40000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php 
                            } else {
                                if (check(2))
                                {
                           
                                echo'<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to Cart</a>'; }
                                else {
                               ?>
                            <p><a href="cart-add.php?id=2" name="add" role="button" class="btn btn-primary btn-block">Add to Cart</a> </p>
                            <?php }} ?>
                            </div> </center>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="img/cam4.jpg">
                        <center>  <div class="caption">   
                                <h2>Sony DSLR</h2>
                            <p>Price: Rs. 50000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php 
                            } else {
                                if (check(3))
                                {
                           
                                echo'<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to Cart</a>'; }
                                else {
                               ?>
                            <p><a href="cart-add.php?id=3" name="add" role="button" class="btn btn-primary btn-block">Add to Cart</a> </p>
                            <?php }} ?>
                            </div> </center>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="img/cam3.jpg">
                        <center>  <div class="caption">   
                            <h2>Olympus DSLR </h2>
                            <p>Price: Rs. 80000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php 
                            } else {
                                if (check(4))
                                {
                           
                                echo'<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to Cart</a>'; }
                                else {
                               ?>
                            <p><a href="cart-add.php?id=4" name="add" role="button" class="btn btn-primary btn-block">Add to Cart</a> </p>
                            <?php }} ?>
                            </div> </center>
                    </div>
                     </div>
                </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="img/w1.jpg">
                        <center>  <div class="caption">   
                            <h2>Tital Model #301</h2>
                            <p>Price: Rs. 13000.00</p>
                           <?php 
                            if (!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php 
                            } else {
                                if (check(5))
                                {
                           
                                echo'<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to Cart</a>'; }
                                else {
                               ?>
                            <p><a href="cart-add.php?id=5" name="add" role="button" class="btn btn-primary btn-block">Add to Cart</a> </p>
                            <?php }} ?>
                            </div> </center>
                    </div>
                </div>
                    <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="img/w2.jpg">
                        <center>  <div class="caption">   
                            <h2>Titan Model #201</h2>
                            <p>Price: Rs. 3000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php 
                            } else {
                                if (check(6))
                                {
                           
                                echo'<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to Cart</a>'; }
                                else {
                               ?>
                            <p><a href="cart-add.php?id=6" name="add" role="button" class="btn btn-primary btn-block">Add to Cart</a> </p>
                            <?php }} ?>
                            </div> </center>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="img/w3.jpg">
                        <center>  <div class="caption">   
                                <h2>HMT Milan</h2>
                            <p>Price: Rs. 8000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php 
                            } else {
                                if (check(7))
                                {
                           
                                echo'<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to Cart</a>'; }
                                else {
                               ?>
                            <p><a href="cart-add.php?id=7" name="add" role="button" class="btn btn-primary btn-block">Add to Cart</a> </p>
                            <?php }} ?>
                            </div> </center>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="img/w4.jpg">
                        <center>  <div class="caption">   
                            <h2>Faber Luba #111</h2>
                            <p>Price: Rs. 18000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php 
                            } else {
                                if (check(8))
                                {
                           
                                echo'<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to Cart</a>'; }
                                else {
                               ?>
                            <p><a href="cart-add.php?id=8" name="add" role="button" class="btn btn-primary btn-block">Add to Cart</a> </p>
                            <?php }} ?>
                            </div> </center>
                    </div>
                     </div>
                </div><div class="row">
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="img/s1.jpg">
                        <center>  <div class="caption">   
                            <h2>H & W</h2>
                            <p>Price: Rs. 8000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php 
                            } else {
                                if (check(9))
                                {
                           
                                echo'<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to Cart</a>'; }
                                else {
                               ?>
                            <p><a href="cart-add.php?id=9" name="add" role="button" class="btn btn-primary btn-block">Add to Cart</a> </p>
                            <?php }} ?>
                            </div> </center>
                    </div>
                </div>
                    <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="img/s2.jpg">
                        <center>  <div class="caption">   
                            <h2>Luis Phil</h2>
                            <p>Price: Rs. 1000.00</p>
                         <?php 
                            if (!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php 
                            } else {
                                if (check(10))
                                {
                           
                                echo'<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to Cart</a>'; }
                                else {
                               ?>
                            <p><a href="cart-add.php?id=10" name="add" role="button" class="btn btn-primary btn-block">Add to Cart</a> </p>
                            <?php }} ?>
                            </div> </center>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="img/s3.jpg">
                        <center>  <div class="caption">   
                                <h2>John Zok</h2>
                            <p>Price: Rs. 15000.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php 
                            } else {
                                if (check(11))
                                {
                           
                                echo'<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to Cart</a>'; }
                                else {
                               ?>
                            <p><a href="cart-add.php?id=11" name="add" role="button" class="btn btn-primary btn-block">Add to Cart</a> </p>
                            <?php }} ?>
                            </div> </center>
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="img/s4.jpg">
                        <center>  <div class="caption">   
                            <h2>Jhalsani </h2>
                            <p>Price: Rs. 1300.00</p>
                            <?php 
                            if (!isset($_SESSION['email'])) {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a> </p>
                            <?php 
                            } else {
                                if (check(12))
                                {
                           
                                echo'<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to Cart</a>'; }
                                else {
                               ?>
                            <p><a href="cart-add.php?id=12" name="add" role="button" class="btn btn-primary btn-block">Add to Cart</a> </p>
                            <?php }} ?>
                            </div> </center>
                    </div>
                     </div>
                </div>
            </div>
         <?php
            include 'includes/footer.php'
           ?>
    </body>
</html>
