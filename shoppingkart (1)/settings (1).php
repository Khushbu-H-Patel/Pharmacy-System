<?php
    require 'include/common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
       <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
            require 'include/header.php';
        ?>
        <div class="container" style="padding-top: 70px"></style>
            <div class="col-xs-2"></div>
            <div class="col-xs-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Settings</h2>   
                    </div>
                    <div class="panel-body">
                        <form action="setting_script.php" method="POST">
                            <div class="form-group">
                                <input type="text" placeholder="Username" class="form-control" name="uname">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Old Password" class="form-control" name="oldpassword">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="New Password" class="form-control" name="newpassword">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Retype Password" class="form-control" name="repassword">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-group-xs btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-2"></div>
        </div>
    </body>
</html>