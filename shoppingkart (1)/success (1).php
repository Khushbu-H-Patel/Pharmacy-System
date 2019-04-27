
<?php
    require 'include/common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
    else{
        $userid=$_SESSION['id'];
        $confirm_query="UPDATE users_item SET status='Confirmed' where user_id=$userid AND status='Added to Cart'";
        $continue= mysqli_query($con, $confirm_query) or die(mysqli_error($con));
        ?>
    <div style="background-color:grey"></style>
        <h2>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</h2>
    </div>
        <?php
    }
?>
