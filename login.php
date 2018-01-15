<?php
require 'includes/common.php';
if (isset($_SESSION['email']))
{
    header('location:product.php');
}
?>
<html>
    <head>
        <title>Login to Lifestyle</title>
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
            <div class="row" style=" margin-bottom: 30px;">
                <div class="col-sm-4 col-sm-offset-3">
            <div class="panel panel-default" style="border:1px black solid; margin-top:100px;">
                <div class="panel-heading">
                    <h4> Login to your account</h4>
                </div>
                <div class="panel-body">
                    <form method="post" action="login_submit.php">
                        <div class="form-group">
                            <label for="email">
                                Email:
                            </label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">
                                Password:
                            </label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <center> <button type="submit" class="btn btn-primary">Login</button> </center>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <p>Don't have an account? <a href="signup.php">Register</a></p>
                </div>
            </div>
            </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php'
           ?>
    </body>
</html>
