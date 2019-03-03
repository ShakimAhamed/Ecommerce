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
    <link rel="stylesheet" href="style.css">
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
                <button style="border:none;outline:none;width:130px;color:white; text-transform:uppercase;background-color:#ed5057"><?php echo $name?></button>
            </div>
            <div class="nav-head2">
                <ul>
                    <li ><a href="page1.php">HOME</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li class="sub"><a href="#">CATEGORY</a>
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
    <main style="background-color: #e6e6e6;">
       
    <div style="margin:0 auto;display:block;width:600px;">
        <h2 style = "margin: 0px;padding: 10px;color: darkblue;text-align: center;background-color: #cfdede;">Voucher</h2>
        <div style="background-color:aliceblue;padding:15px">
        <table style="width:600px;text-align:center;border-collapse: collapse;" >
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
                    $qnt = 0;
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
                        $qnt+= $res['quantity'];
                        $sum+= $res2['p_price'];
                        $res = $result->fetch_assoc(); 
                    }?>
        </table>
        

        </div>
        <div style="background-color: #cfdede;">
            <h2 style = "color: darkblue;margin: 0px;padding: 10px;text-align: center;border: 0 0 1px 0 solid black;border-bottom: 1px solid black;">Grand Total: <?php echo $sum;?> Tk.</h2>
            <h2 style = "color: darkblue;margin: 0px;padding: 10px;width: 279px;float: left;border-right: 1px solid;">Number of Quantity: <?php echo $qnt;?></h2>
            <h2 style = "color: darkblue;margin: 0px; padding:10px;width: 280px;float: right;">Purchase Date: <?php echo date('Y-m-d', strtotime(' + 0 days')); ?></h2>
            <div style="clear:both"></div>        
        </div>
           
    </div>
    </main>
    <footer>
        <p>Copyright <i class="far fa-copyright"></i> 2019 Sakim Ahamed.</p>
    </footer>

   
</body>
</html>