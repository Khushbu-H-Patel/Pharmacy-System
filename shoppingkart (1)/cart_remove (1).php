<?php
    require 'include/common.php';
    $userid=$_SESSION['id'];    
    $remove_id= filter_input(INPUT_GET, 'id');
    echo $remove_id;
    die($con);
    $delete_product= "DELETE FROM users_item where user_id='$userid' AND item_id='$remove_id'";
    $delete_query= mysqli_query($con, $delete_product) or die(mysqli_error($con));
    header('location:cart.php');
?>
