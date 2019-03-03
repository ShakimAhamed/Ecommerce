<?php

include 'dbconnect.php';

$action = $_POST["action"];

if($action == "unvalidate"){
    $user_name = $_POST["username"];
    $sql = "select * from users where user_name='$user_name'";
    $result = $db->query($sql);
    $res = $result->fetch_assoc();
    if($res){
        echo 0;
    }
    else{
        echo 1;
    }
}

if($action == "emailvalidate"){
    $email = $_POST["email"];
    $sql = "select * from users where email='$email'";
    $result = $db->query($sql);
    $res = $result->fetch_assoc();
    if($res){
        echo "0";
    }
    else{
        echo "1";
    }
}

if($action == "lgvalidate"){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "select * from user where email='$user_name' and password='$password'";
    $result = $db->query($sql);
    $res = $result->fetch_assoc();
    if($res){
        echo "1";
    }
    else{
        echo "0";
    }
}

// if($action == "commentupdate"){
//     $user_name = $_POST["username"];
//     $comment_description = $_POST['comment'];
//     $post_id = $_POST['post_id'];
//     $datetime = date("Y-m-d H:i:s");
//     $sql = "insert into comment(comment_description,comment_time,post_id,user_name) values('$comment_description','$datetime','$post_id','$user_name')";
//     $db->query($sql);
// }



 ?>






























