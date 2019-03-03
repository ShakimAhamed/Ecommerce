<?php

    include 'dbconnect.php';

    $u_name = $_POST['name'];
    $u_address =  $_POST['Address'];

    $u_email = $_POST['email'];

    $password = $_POST['password'];
    $u_mobile = $_POST['number'];

    $sql = "insert into users(user_name,user_address,user_email,user_password,user_mobile_no) values('$u_name','$u_address','$u_email','$password','$u_mobile')";

    $db->query($sql);

    header('Location: index.php');
?>