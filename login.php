<?php

    include 'dbconnect.php';

    session_start();
    $name = $_POST["name"];
    $password = $_POST["password"];
    $sql = "select * from users where user_name='$name' and user_password='$password'";
    $result = $db->query($sql);
    $res = $result->fetch_assoc();
    if($res){
        $_SESSION['loggedin']= 1;
        $_SESSION['user_name'] = $name;
        $_SESSION['user_id'] = $res['user_id'];
        
        header('Location: page1.php');
    }
    else{
        header('Location: index.php');
    }

?>