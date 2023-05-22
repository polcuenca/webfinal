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
  <title>Mens Section</title>
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
                        <li class="scroll-to-section"><a href="user_mens.php" class="active">Men's</a></li>
                        <li class="scroll-to-section"><a href="user_womens.php">Women's</a></li>
                        <li class="scroll-to-section"><a href="user_kids.html">Kid's</a></li>
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
                <img src="assets\images\mens\suit.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>                
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_name">Suit</span>    
                        <p>Formal Wear</p>                                            
                        
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
                        <li><img src="assets\images\mens\suit3.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\suit2.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\suit4.jpg" alt="" /></li>
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
                <img src="assets\images\mens\uniform.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_name">School Uniform</span>    
                        <p>Formal Wear</p>                                            
                        
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
                        <li><img src="assets\images\mens\uniform2.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\uniform4.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\uniform3.jpg" alt="" /></li>
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
        	<h4>FLOWY SHIRT DRESS</h4>
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
                <img src="assets\images\mens\blazer.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">

                        <span class="product_name">Blazer</span>    
                        <p>Formal Wear</p>                                            
                        
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
                        <li><img src="assets\images\mens\blazer2.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\blazer3.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\blazer4.jpg" alt="" /></li>
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
        	<h4>DOUBLE LAYER DRESS</h4>
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

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
            
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="assets\images\mens\waistcoat.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_name">Waistcoats</span>    
                        <p>Formal Wear</p>                                            
                        
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
                        <li><img src="assets\images\mens\waistcoat2.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\waistcoat3.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\waistcoat4.jpg" alt="" /></li>
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
        	<h4>BEAD DETAIL DRESS</h4>
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

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
            
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="assets\images\mens\barong.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_name">Barong</span>    
                        <p>Formal Wear</p>                                            
                        
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
                        <li><img src="assets\images\mens\barong2.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\barong3.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\barong4.jpg" alt="" /></li>
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
        	<h4>PLEATED DETAIL DRESS</h4>
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
                    <li><a href="" style="background:#9b887b"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
            
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="assets\images\mens\shirt.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_name">Shirt</span>    
                        <p>Formal Wear</p>                                            
                        
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
                        <li><img src="assets\images\mens\shirt2.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\shirt3.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\shirt4.jpg" alt="" /></li>
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
        	<h4>PRINTED DRESS</h4>
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
                    <li><a href="" style="background:#9b887b"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
            
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="assets\images\mens\pants1.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_name">Trousers</span>    
                        <p>Formal Wear</p>                                            
                        
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
                        <li><img src="assets\images\mens\pants2.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\pants3.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\pants4.jpg" alt="" /></li>
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
        	<h4>PRINTED DRESS</h4>
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
                    <li><a href="" style="background:#9b887b"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
            
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <img src="assets\images\mens\vest.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_name">Vest</span>    
                        <p>Informal Wear</p>                                            
                        
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
                        <li><img src="assets\images\mens\vest2.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\vest3.jpg" alt="" /></li>
                        <li><img src="assets\images\mens\vest4.jpg" alt="" /></li>
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
