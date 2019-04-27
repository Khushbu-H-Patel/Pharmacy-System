<?php
    require 'include/common.php';
    $email= mysqli_real_escape_string($con,(filter_input(INPUT_POST,'email')));
    $password=md5(filter_input(INPUT_POST, 'password'));
    $select_query="SELECT id,email,password from users WHERE email='$email'";
    $select_query_result= mysqli_query($con, $select_query) or die(myqli_error($con));
    if(mysqli_num_rows($select_query_result)==0){
        echo "There is no user with this e-mail!!";
    }
    else{
        $row= mysqli_fetch_array($select_query_result);
        if($row['password']==$password){
            $_SESSION['id']=$row['id'];
            $_SESSION['email']=$row['email'];
            header('location:products.php');
        }
        else{
            echo "Password is incorrect!!!";
        }
        
    }
?>
