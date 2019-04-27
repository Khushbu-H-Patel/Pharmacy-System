<?php
    require 'include/common.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Products</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
       <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
            require 'include/header.php';
            require 'include/check_if_added.php'
        ?>
        <div class="container">
            <div class="jumbotron text-center margin_style">
                <h1>Welcome to our Pharmacy</h1>
            </div>
        </div>
        <div class="container">
            <div class="col-xs-3">
                <div class="thumbnail text-center">
                    <img src="./img/para.jpg" alt="Paracetemol" class="form-group">
                    <b>Paracetemol</b>
                    <h6>Price Rs. 36.00</h6>
                    <?php
                        if(!isset($_SESSION['email'])){?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(1)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{?> 
                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php
                            }
                        }
                    ?>      
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail text-center">
                    <img src="./img/para.jpg" alt="Paracetemol" class="form-group">
                    <b>Paracetemol</b>
                    <h6>Price Rs. 36.00</h6>
                    <?php
                        if(!isset($_SESSION['email'])){?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(2)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{?> 
                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail text-center">
                    <img src="./img/para.jpg" alt="Paracetemol" class="form-group">
                    <b>Paracetemol</b>
                    <h6>Price Rs. 36.00</h6>
                    <?php
                        if(!isset($_SESSION['email'])){?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(3)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{?> 
                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="thumbnail text-center">
                 <img src="./img/para.jpg" alt="Paracetemol" class="form-group">
                    <b>Paracetemol</b>
                    <h6>Price Rs. 36.00</h6>
                    <?php
                        if(!isset($_SESSION['email'])){?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(4)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else{?> 
                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php
            require 'include/footer.php'
        ?>        
    </body>
</html>