<?php
require 'includes/common.php';
if (isset($_SESSION['email']))
{
    header('location:product.php');
}
?>
<html>
    <head>
        <title>Lifestyle Store</title>
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
            <div id="banner_img">
                <div class="container">
                    <div class="banner_content">
                        <h1>We sell Lifestyle</h1>
                        <p>Flat 40% off on premium brands</p>
                        <a href="product.php"><button type="button" class="btn btn-danger active btn-lg">Shop Now</button></a>
                    </div>
                </div>
            </div>
            <?php
            include 'includes/footer.php'
           ?>
        </div>
    </body>
</html>
