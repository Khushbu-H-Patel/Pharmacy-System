<?php
    require 'include/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-2"></div>
                <div class="col-xs-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="text-warning">
                                <h3>Log In to US</h3>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input type="text" class="form-control input-lg" id="email" name="email">
                                </div>
                                <div class="form-group form_style">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control input-lg" id="password" name="password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account? <a href="signup.php">Register</a></p>
                        </div>
                    </div>
                </div> 
                <div class="col-xs-2"></div>
            </div>
        </div>
        <?php
            require 'include/footer.php';
        ?>
    </body>
</html>
