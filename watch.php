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
                    <li  ><a href="#">CATEGORY</a>
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
    <main>
    <section class="sec">
            <?php
            $sql  = "select * from product";
            $result = $db->query($sql);
            $res = $result->fetch_assoc();
            $cnt = 0;
            while($res){ 
                $name = $res['p_name'];
                $id = $res['p_id'];
                $des = $res['p_description'];
                $price = $res['p_price'];   
                $cat = $res['cat_id'];
                ?>
                <?php if($cnt>=32 && $cnt<=35): ?>
                    <div class="card">
                        <img width="300" height="250" src="<?php echo $cat;?>/<?php echo $id;?>.jpg">
                        <p>Name:<?php echo $name;?></p>
                        <p>Discription:<?php echo $des;?></p>
                        <p>Price:<?php echo $price;?></p>
                        <a href="submit.php?id=<?php echo $id;?>"><button>Add To Cart</button></a>    
                    </div>
                <?php endif; ?>
                <?php $res = $result->fetch_assoc();
                $cnt++;
            }?>
            
        </section>

         <section class="sec">
            <?php
            $sql  = "select * from product";
            $result = $db->query($sql);
            $res = $result->fetch_assoc();
            $cnt = 0;
            while($res){ 
                $name = $res['p_name'];
                $id = $res['p_id'];
                $des = $res['p_description'];
                $price = $res['p_price'];   
                $cat = $res['cat_id'];
                ?>
                 <?php if($cnt>=36 && $cnt<=39): ?>
                    <div class="card">
                        <img width="300" height="250" src="<?php echo $cat;?>/<?php echo $id;?>.jpg">
                        <p id="productID">Name:<?php echo $name;?></p>
                        <p id="product_desc">Discription:<?php echo $des;?></p>
                        <p id="price">Price:<?php echo $price;?></p>
                        <a href="submit.php?id=<?php echo $id;?>"><button>Add To Cart</button></a>   
                        
                    </div>                 
                <?php endif; ?>
                <?php $res = $result->fetch_assoc();
                $cnt++;
            }?>
            
        </section>
        
    </main>
    <footer>
        <p>Copyright <i class="far fa-copyright"></i> 2019 Sakim Ahamed.</p>
    </footer>

   
</body>
</html>