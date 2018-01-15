<?php
require 'includes/common.php';
if (!isset($_SESSION['email']))
{
    header ('location:index.php');
}

?>
<html>
    <head>
        <title>Settings</title>
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
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <h3>Change Password</h3>
                    <form method="post" action="setting_script.php">
                        <div class="form-group">
                            <input type="password" name="old" placeholder="Old Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="new" placeholder="New Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="renew" placeholder="Re-type New Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="change">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php'
           ?>
    </body>
</html>
