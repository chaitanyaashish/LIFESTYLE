<?php
require 'includes/common.php';
if (isset($_SESSION['email']))
{
    header('location:product.php');
}
?>
<html>
    <head>
        <title>Sign Up to Lifestyle</title>
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
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-3">
                        <br><br><br>   <h2>Sign Up</h2>
                        <form method="post" action="signup_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name"> 
                            </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" placeholder="E-mail"> 
                            </div>
                        <div class="form-group">
                            <input type="password" pattern=".{6,}" class="form-control" name="password" placeholder="Password" required> 
                            </div>
                        <div class="form-group">
                                <input type="number" class="form-control" name="contact" placeholder="Contact"> 
                            </div>
                        <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City"> 
                            </div>
                        <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address"> 
                            </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            include 'includes/footer.php'
           ?>
        </div>
    </body>
</html>
