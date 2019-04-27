<?php
    require 'include/common.php';
    $name= mysqli_real_escape_string($con,(filter_input(INPUT_POST, 'name')));
    $email= mysqli_real_escape_string($con,(filter_input(INPUT_POST,'email')));
    $address= mysqli_real_escape_string($con,(filter_input(INPUT_POST,'address')));
    $phone= filter_input(INPUT_POST,'contact');
    settype($phone,'float');
    $password=md5(filter_input(INPUT_POST, 'password'));
    $city= filter_input(INPUT_POST, 'city');
    $check_email="SELECT email from users WHERE email='$email'";
    $select_email= mysqli_query($con, $check_email) or die(mysqli_error($con));
    //$num=mysqli_num_rows($select_email);
    if(mysqli_num_rows($select_email)>0){
        echo "Email already exist!!";
    }
    else{
        $insert_details="INSERT INTO users(name,email,password,contact,city,address) values('$name','$email','$password','$phone','$city','$address')";
        $get_query_result= mysqli_query($con, $insert_details) or die(mysqli_errno($con));
        $_SESSION['id']= mysqli_insert_id($con);
        $_SESSION['email']=$email;
        echo"User successfully submitted!!";
        header('location:products.php');
    }
    ?>
