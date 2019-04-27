<?php
    function check_if_added_to_cart($item_id){
        $con= mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
        $user_id=$_SESSION['id'];
        $query="SELECT * FROM users_item where item_id='$item_id' AND user_id='$user_id' AND status='Added to Cart'";
        $ans=mysqli_query($con,$query) or die(mysqli_errno($con));
        if(mysqli_num_rows($ans)>=1){
            return 1;
        }
        else{
            return 0;
        }
    }
?>
