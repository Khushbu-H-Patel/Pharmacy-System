<?php
    require 'include/common.php';
    if (!isset($_SESSION['email'])){
        header('location:index.php');
    }
    $sum=0;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
       <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
            require 'include/header.php';
            $userid=$_SESSION['id'];
        ?>
        <div class="container">
            <div class="col-xs-2"></div>
            <div class="col-xs-8">
                <div class="table-responsive">
                <table class="table table-condensed table-hover table-bordered margin_style">
                        <tbody>
                            <tr>
                                <th></th>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Delete the item</th>
                            </tr>
                        <?php
                            $puurchased_product="SELECT item_id,name,price from users_item u,items i WHERE u.user_id='$userid' AND "
                                    . "u.item_id=i.id AND status='Added to cart'";
                            $purchase_query= mysqli_query($con, $puurchased_product) or die (mysqli_error($con));
                            if(mysqli_num_rows($purchase_query)==0){
                                echo"Add the items to the cart first!!";
                            }
                        ?>
                        <?php while($row= mysqli_fetch_array($purchase_query)){?>
                            <tr>
                                <td></td>
                                <td><?php echo $row['item_id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['price'];
                                    $sum=$sum+$row['price'];
                                        ?></td>
                                <td><a href="cart_remove.php?id=<?php echo $row['item_id'] ;?>">Delete</a></td>
                            </tr>
                            <?php
                            } 
                            ?>   
                            <tr>
                                <td><a href="success.php?id={$row['item_id']}">Total(Confirm Order)</a>:<?php echo $sum;?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-2"></div>
        </div>
        <?php
            require 'include/footer.php'
        ?>
    </body>
</html>

