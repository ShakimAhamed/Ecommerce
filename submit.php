<?php
    include 'dbconnect.php';
    session_start();
    $p_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM cart WHERE user_id ='$user_id'";
    $result = $db->query($sql);
    $res = $result->fetch_assoc();
    $cart_id = $res['cart_id'];

    
    $sql1 = "INSERT INTO cart_items (p_id,cart_id,quantity) VALUES ('$p_id','$cart_id','1')";
    $db->query($sql1);

    
    header('Location: cart.php');
?>