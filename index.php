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
               <a href="index.php"><img src="img/logo.png" alt=""></a>
            </div>
            <!-- <div class="nav-head2">
                <ul>
                    <li class="active"><a href="#">HOME</a></li>
                    <li><a href="#">PROFOLIO</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <li><a href="#">LOG IN</a></li>
                    <div style="clear:both"></div>
                </ul>
            </div> -->
        </nav>
    </header>
    <main>
        <section class="container-1">
            <div class="form">
                <form action="login.php" method="POST">
                    <div class="con1-icon">
                        <i class="fab fa-mailchimp"></i>
                        <input id="name" type = "text" name = "name" placeholder="Enter your User Name">
                    </div>
                    <div class="con1-icon">
                    <i class="fas fa-feather-alt"></i>
                        <input id="password" type="password" name="password" placeholder="Enter Your Password">
                    </div>
                    
                    <input type="submit" value="LOG IN">
                    <!-- <p style="color: red;display: none" id="lv">user name or password is not correct.</p> -->
                    <a href="signup.php">Sign Up Here!!</a>
                    
                    <div style="clear:both"></div>
                </form>
            </div>
        </section>
        <section class="container-2">
            <div class="con-2">
                <h1>We are here to help you?</h1>
                <p>Subsribe to get our newsletters</p>
                <button>SUBSCRIBE NEWLETTERS</button>
            </div>
        </section>
        <section class="container-3">
            <div class="con3">
                <div class="con3-d">
                    <i class="fas fa-gavel fa-flip-horizontal"></i>
                    <p><strong>Amet consectetur adipisicing elit</strong></p>
                    <p class="d-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident quae ab aliquam accusantium? Quod maiores est harum obcaecati ab unde at, quam expedita mollitia dolores eligendi odit vel nobis eum!</p>    
                    <button>CONTINUE READING...</button>
                </div>
                <div class="con3-d">
                    <i class="fas fa-plane fa-rotate-270"></i>
                    <p><strong>Amet consectetur adipisicing elit</strong></p>
                    <p class="d-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident quae ab aliquam accusantium? Quod maiores est harum obcaecati ab unde at, quam expedita mollitia dolores eligendi odit vel nobis eum!</p>    
                    <button>CONTINUE READING...</button>
                </div>
                <div class="con3-d">
                    <i class="far fa-life-ring"></i>
                    <p><strong>Amet consectetur adipisicing elit</strong></p>
                    <p class="d-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident quae ab aliquam accusantium? Quod maiores est harum obcaecati ab unde at, quam expedita mollitia dolores eligendi odit vel nobis eum!</p>    
                    <button>CONTINUE READING...</button>
                </div>
            </div>
        </section>
        <section class="container-4 w3-content w3-display-container">
            <div class="myslides">
                <div class="cont4">
                    <div class="cont4-tab1">
                        <img width="320" height="220" src="img/img-01.jpg" alt="">
                        <div class="tab1-head">
                            <h3>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            </h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus qui repellendus omnis facilis dolorum sint amet 
                            </p>
                            <button>GET MORE INFO.</button>
                        </div>
                    </div>
                    <div class="cont4-tab2">
                        <img width="320" height="220" src="img/img-02.jpg" alt="">
                        <div class="tab1-head">
                            <h3>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            </h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus qui repellendus omnis facilis dolorum sint amet 
                                
                            </p>
                            <button>VIEW DETAIL</button>
                        </div>
                    </div>
                    <div class="cont4-tab3">
                    <div class="cont4-tab3-head">
                            <h3>Recomended Places</h3>
                            <p>consequatur corporis molestias, 
                            </p>
                        </div>
                        <div class="cont4-tab3-body">
                            <div class="tab3-body1">
                            <img width="75" height="75" src="img/tn-img-01.jpg" alt="">   
                            <div class="body1-p">
                                    <p><strong>EUROPE</strong></p>
                            </div>  
                            </div>
                            <div class="tab3-body1">
                                <img width="75" height="75" src="img/tn-img-02.jpg" alt="">  
                                <div class="body1-p">
                                    <p><strong>ASIA</strong></p>
                                </div>   
                            </div>
                            <div class="tab3-body1">
                                <img width="75" height="75" src="img/tn-img-03.jpg" alt=""> 
                                <div class="body1-p">
                                    <p><strong>AFRICA</strong></p>
                                </div>    
                            </div>
                            <div class="tab3-body1">
                                <img width="75" height="75" src="img/tn-img-04.jpg" alt="">     
                                <div class="body1-p">
                                    <p><strong>SOUTH AMERICA</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </section>
        <section class="container-5">
            <video  muted style=" height: 759px;"controls autoplay>
                <source src="zindegi.mp4" type="video/mp4">
                <source src="mov_bbb.ogg" type="video/ogg">
                <source src="zindegi.webm" type="video/webm">
                Your browser does not support HTML5 video.
            </video>
        </section>
        <section class="container-6">
            <div class="con6">
                <div class="con6-head">
                    <h3>ASIA</h3>
                    <p>Singapur</p>
                </div>
                <div class="con6-body">
                    <div class="con6-body1">
                        <div class="body1-head">
                            <img width="200" height="200" src="img/img-03.jpg" alt="">
                        </div>
                        <div class="body1-body">
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, 
                               mollitia consectetur et officia quibusdam culpa ipsum obcaecati! Molestias ab</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, 
                                mollitia consectetur et officia quibusdam culpa ipsum obcaecati! Molestias ab
                            </p>
                        </div>
                    </div>
                    <div class="con6-body2">
                        <div>
                            <img width="200" height="150" src="img/img-04.jpg" alt="">
                        </div>
                        <div class="body2-body">
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, 
                                mollitia consectetur et officia quibusdam culpa ipsum obcaecati! Molestias ab</p>
                            <a href="#">Continue Reading...</a>
                        </div>
                    </div>
                    <div class="con6-body2">
                        <div>
                            <img width="200" height="150" src="img/img-05.jpg" alt="">
                        </div>
                        <div class="body2-body">
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, 
                                mollitia consectetur et officia quibusdam culpa ipsum obcaecati! Molestias ab</p>
                            <a href="#">Continue Reading...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-7">
            <div class="con7">
                <div class="con7-body1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.824337284383!2d90.35778151406159!3d23.753642784587747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf5c7d2ad32d%3A0x4ad0ef1f2366fe9e!2sKaderabad+Housing+Society!5e0!3m2!1sen!2sbd!4v1551590129613" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!-- <div class="con7-body2">
                    <form action="">
                        <input type="text" name="" id="" placeholder="Name"><br><br>
                        <input type="Email" name="" id="" placeholder="Email"><br><br>
                        <input type="text" name="" id="" placeholder="Subject"><br><br>
                        <textarea name="" id="" cols="54" rows="8" placeholder="Message"></textarea><br><br>
                        <input type="Submit" name="" id="" value="SEND MESSAGE NOW">
                    </form>
                </div> -->
            </div>
        </section>
    </main>
    <footer>
        <p>Copyright <i class="far fa-copyright"></i> 2019 Sakim Ahamed.</p>
    </footer>

   
</body>
</html>