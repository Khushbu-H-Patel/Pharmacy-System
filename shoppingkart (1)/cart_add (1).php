<?php
    require 'include/common.php';
    $user_id=$_SESSION['id'];
    $id= filter_input(INPUT_GET, 'id');
    $cart_query="INSERT INTO users_item(user_id,item_id,status) VALUES ('$user_id','$id','Added to Cart')";
    $cart=mysqli_query($con, $cart_query) or die(mysqli_errno($con));
    header('location:products.php');
?>