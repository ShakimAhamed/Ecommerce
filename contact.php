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
                    <li  class="sub"><a href="">CATEGORY</a>
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
        <h2 style = "margin: 0px; padding:10px; color:darkblue;text-align:center;border:1px solid darkblue">Contact Us</h2>
        <div class="con7-body2">
            <form action="email.php" method="POST">
                <input type="text" name="name" id="" placeholder="Name"><br><br>
                <input type="Email" name="email" id="" placeholder="Email"><br><br>
                <input type="text" name="sub" id="" placeholder="Subject"><br><br>
                <textarea name="msg" id="" cols="54" rows="8" placeholder="Message"></textarea><br><br>
                <input type="Submit" name="submit" id="" value="SEND MESSAGE NOW">
            </form>
        </div>
        <!-- <h2 style = "margin: 0px; padding:10px; color:darkblue;text-align:end">Grand Total: <?php echo $sum;?></h2> -->
        </div>
    </main>
    <footer>
        <p>Copyright <i class="far fa-copyright"></i> 2019 Sakim Ahamed.</p>
    </footer>

</body>
</html>