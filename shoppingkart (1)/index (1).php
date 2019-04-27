<?php
    require 'include/common.php';
    if (isset($_SESSION['email'])){
        header('location:products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="style.css" type="text/css" rel="stylesheet">
        <title>MediCo</title>
    </head>
    <body> 
        <?php
            require 'include/header.php';
        ?>
        <div id="background_image">
                <div class="container">
                    <div id="content">
                        <a href="products.php" class="btn btn-danger btn-lg-active" style="margin-right: 100px;font-size: 40px;">Shop Now </style> </a>
                    </div>
                </div>
        </div>
        <?php
            require 'include/footer.php';
        ?>
    </body>
</html>
