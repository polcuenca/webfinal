<?php

  
session_start();


if(!isset($_SESSION["Username"]))
{
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Accesories Section</title>
  <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Cut n' Sew</title>


  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

  <link rel="stylesheet" type="text/css" href="css/log.css"/>
  <link rel="stylesheet" type="text/css" href="css/grid.css"/>

  <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

  <link rel="stylesheet" href="assets/css/owl-carousel.css">

  <link rel="stylesheet" href="assets/css/lightbox.css">

  <!-- Bootstrap CSS -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
  <!-- Font Awesome CSS -->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Demo CSS -->
  <link rel="stylesheet" href="css/demo.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
</head>
<body>






<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <div class="username ">
                            <h6>Welcome <?php echo  $_SESSION["Username"]?>!  |</h6>
                        </div>
                        <li class="scroll-to-section"><a href="home.php">Home</a></li>
                        <li class="scroll-to-section"><a href="user_mens.php">Men's</a></li>
                        <li class="scroll-to-section"><a href="user_womens.php">Women's</a></li>
                        <li class="scroll-to-section"><a href="user_kids.php">Kid's</a></li>
                        <li><a href="user_about.php">About Us</a></li>
                        
                        <div>
                        
                            <button type="button" class="btn btn-info btn-round" data-toggle="modal"><a href="logout.php" class="text-light">Logout</a></button>
                            
                        </div>
                        <nav>
  
                    </ul>

                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    
<div class="center">
    <div>
        <h1>FIND SOME INSPIRATIONS</h1>
        <h6>Save the image and upload it into the booking form</h6>
    </div>
    <div class="product">
    	<div class="info-large">
        	<h4>Suit</h4>
            <div class="sku">
            	PRODUCT SKU: <strong>89356</strong>
            </div>
             
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="assets\images\accesories\embroideries.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>                
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_name">Embroideries</span>                                             
                        
                        <div class="product-options">
                        <button class="btn btn-primary my-5"><a href="order_form.php">Book Now</a></button>
                        
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="assets\images\accesories\embroideries2.jpg" alt="" /></li>
                        <li><img src="assets\images\accesories\embroideries3.jpg" alt="" /></li>
                        <li><img src="assets\images\accesories\embroideries4.jpg"alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-back">
                    <div class="cy"></div>
                    <div class="cx"></div>
                </div>
            </div>	  
        </div>	
    </div>
    
    
    <div class="product">
    <div class="info-large">
        	<h4>PLEAT PRINTED DRESS</h4>
            <div class="sku">
            	PRODUCT SKU: <strong>89356</strong>
            </div>
             
            <div class="price-big">
            	<span>$43</span> $39
            </div>
             
            <h3>COLORS</h3>
            <div class="colors-large">
                <ul>
                    <li><a href="" style="background:#222"><span></span></a></li>
                    <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                    <li><a href="" style="background:#f56060"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>
            
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="assets\images\accesories\patches.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_name">Patches</span>                                              
                        
                        <div class="product-options">
                        <button class="btn btn-primary my-5"><a href="order_form.php">Book Now</a></button>
 
    
                    </div>                       
                    </div>                         
                </div>
            </div>
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="assets\images\accesories\patches2.jpg" alt="" /></li>
                        <li><img src="assets\images\accesories\patches3.jpg" alt="" /></li>
                        <li><img src="assets\images\accesories\patches4.png" alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-back">
                    <div class="cy"></div>
                    <div class="cx"></div>
                </div>
            </div>	  
        </div>	
    </div>     
        </div> 	
    </div>    
</div>
</div>
           
        

<!-- ***** Footer Start ***** -->
<footer>
        <div class="footer">
           
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 Cut n Sew, Ltd. All Rights Reserved. 
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</footer>
                 

    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- partial -->
  <script  src="assets/js/script.js"></script>

 

</body>
</html>
