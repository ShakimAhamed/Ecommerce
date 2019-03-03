<?php
session_start();
include 'dbconnect.php';

if($_SESSION['loggedin'] != 1)
{
    header('Location: index.php');
}
$name = $_SESSION['user_name'];


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="qsn.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    
</head>

<body>
    <header class="head">
        <nav class="nav">
            <div class="nav-head1">
                <a href="page1.php"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="cart">
                <a href="cart.php"><i class="fas fa-cart-plus"></i></a>
            </div>
            <div class="nav-head2">
                <ul>
                    <li ><a href="page1.php">HOME</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <li  class="sub"><a href="#">CATEGORY</a>
                        <ul class="submanu">
                            <li><a href="women.php">Women's_Collection</a></li>
                            <li><a href="gents.php">Gent's_Collection</a></li>
                            <li><a href="watch.php">Watch_Collection</a></li>
                            <li><a href="electronics.php">Electronics</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php">LOG OUT</a></li>
                    <div style="clear:both"></div>
                </ul>
            </div>
        </nav>
    </header>
    <main style = "background-color: #e6e6e6;;">
        <div style="margin:0 auto;display:block;width:600px;">
        <h2 style = "margin: 0px; padding:10px; color:darkblue;text-align:center">Shopping Cart</h2>
        <table style="width:600px;text-align:center;border-collapse: collapse;" border="1px">
            <tr>
                <th>Product</th>
                <th>Descrption</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
                <?php
                    $user_id = $_SESSION['user_id'];
                    $sql = "SELECT * FROM cart WHERE user_id ='$user_id'";
                    $result = $db->query($sql);
                    $res = $result->fetch_assoc();
                    $cart_id = $res['cart_id'];
            
                    $sql = "SELECT * FROM cart_items WHERE cart_id = '$cart_id'";
                    $result = $db->query($sql);
                    $res = $result->fetch_assoc();

                    $sum = 0;
                    while($res){ 
                    $p_id = $res['p_id'];
                    $sql2 = "select * from product where p_id='$p_id'";
                    $result2 = $db->query($sql2);
                    $res2 = $result2->fetch_assoc();
                    ?>
                    <tr>
                        <td><?php echo $res2['p_name'];?></td>
                        <td><?php echo $res2['p_description'];?></td>
                        <td><?php echo $res2['p_price'];?></td>
                        <td><?php echo $res['quantity'];?></td>
                    </tr>
                    <?php
                        $sum+= $res2['p_price'];
                        $res = $result->fetch_assoc(); 
                    }?>
        </table>
        <!-- <h2 style = "margin: 0px; padding:10px; color:darkblue;text-align:end">Grand Total: <?php echo $sum;?></h2> -->
        </div>
        <a href="checkout.php"><button style="margin-left: 67%;background-color: #ed5057;border: none;color: #fffeea;padding: 10px;cursor: pointer;outline: none;">Purchase</button></a> 
       
    </main>
    <footer>
        <p>Copyright <i class="far fa-copyright"></i> 2019 Sakim Ahamed.</p>
    </footer>

</body>
</html>