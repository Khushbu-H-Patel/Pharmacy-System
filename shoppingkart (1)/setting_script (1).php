<?php
    require 'include/common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
    $userid=$_SESSION['id'];
    $opassword= md5(filter_input(INPUT_POST, '$oldpassword'));
    $npassword= md5(filter_input(INPUT_POST, '$newpassword'));
    $rpassword= md5(filter_input(INPUT_POST, '$repassword'));
    $oldpassquery="SELECT password from users where id='$userid'";
    $oquery= mysqli_query($con, $oldpassquery) or die (mysqli_error($con));
    $row= mysqli_fetch_array($oquery);
    if($row['password']==$opassword){
        if($rpassword== $npassword){
           $password_query="UPDATE users SET password='$npassword' where id='$userid'";
           $uquery= mysqli_query($con, $password_query) or die(mysqli_error($con));
           
           die($con);
           echo"Password is set";
       }
       else{
           header('location:settings.php');
       }
    }
    else{
        header('location:index.php');
    }   
    
?>
