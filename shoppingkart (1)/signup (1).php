<?php
    require 'include/common.php';
    if(isset($_SESSION['id'])){
        header('location:products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign-In</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form class="form_style" method="POST" action="signup_script.php">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-8">
                        <div class="form-group">
                            <h1>SIGN UP</h1>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="Name" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="E-Mail" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" placeholder="Password" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="Contact" id="contact" name="contact">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="City" id="city" name="city">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="Address" id="address" name="address">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <div class="col-xs-2"></div>
                </form>
            </div>
        </div>
    </body>
</html>


