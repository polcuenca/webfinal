<?php
                include 'connect.php';

                session_start();
                $error = '';

                if($_SERVER["REQUEST_METHOD"]=="POST")
                {
                    $Username=$_POST["Username"];
                    $Password=$_POST["Password"];
                    $sql="Select * from `customer` where Username='".$Username."' AND Password='".$Password."' ";

                    $result=mysqli_query($con, $sql);
                    $row=mysqli_fetch_array($result);

                    if(isset($row["User_Type"]) && $row["User_Type"]=="Customer")
                    { 
                        $_SESSION["Username"]=$Username;
                        header("location:home.php");
                    }
                    else if(isset($row["User_Type"]) && $row["User_Type"]=="Admin")
                    {
                        $_SESSION["Username"]=$Username;
                        header("location:display.php");
                    }
                    else
                    {
                    $error = 'Invalid username or password';
                    }
                }

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Kids Section</title>
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
                        <li class="scroll-to-section"><a href="index.php">Home</a></li>
                        <li class="scroll-to-section"><a href="mens.php">Men's</a></li>
                        <li class="scroll-to-section"><a href="womens.php">Women's</a></li>
                        <li class="scroll-to-section"><a href="kids.php" class="active">Kid's</a></li>
                        <li><a href="about.php">About Us</a></li>
                        
                        <div>
                        
                            <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">Login</button>
                            <button type="button" class="btn btn-info btn-round" data-toggle="modal"><a href="customer.php" class="text-light">Signup</a></button>
                            
                        </div>
                        <nav>
  
                    </ul>

                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- new login code -->
                <div class="container">
                  <div class="row g-0">
                    <div class="col-lg-5">
                      <img src="images/log.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7" id="Cform">
                      <h1 class="font-weight-bold">Login</h1>
                      <h5>Sign in to your account</h5>
                       <form action="#" method="post">
                        <div class="form-row">
                          <div class="col-lg-7">
                            <input type="text" name="Username" class="form-control my-1 p-2" placeholder="Username" required="">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-lg-7">
                            <input type="password" name="Password" class="form-control my-1 p-3" placeholder="Password" required="">
                          </div>
                        </div>
                        <?php if ($error) { ?>
                            <div class="form-row">
                                <div class="col-lg-7">
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $error; ?>
                                </div>
                                </div>
                            </div>
                        <?php } ?>
                        
                        <div class="form-row">
                          <div class="col-lg-7">
                            <button type="submit" value="Login" class="btn1 mt-2 mb-5">Login</button>
                          </div>
                        </div>
                        <a href="#" style="font-weight:bold">Forgot Password ?</a>
                        <p>Don't have an account? <a href="customer.php" style="font-weight:bold">Register here</a></p> 
                       </form>
                    </div>
                  </div>
                </div>
          

          
      </div>
    </div>
  </div>
</div>

                           

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
                <img src="assets\images\kids\shirts1.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>                
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_name">Shirts</span>    
                        <p>Informal Wear</p>                                            
                        
                        <div class="product-options">
                        <button class="btn btn-primary my-5" data-toggle="modal" data-target="#loginModal">Book Now</button>
                        
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="assets\images\kids\shirts2.jpg" alt="" /></li>
                        <li><img src="assets\images\kids\shirts3.jpg" alt="" /></li>
                        <li><img src="assets\images\kids\shirts4.jpg" alt="" /></li>
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
                <img src="assets\images\kids\blouse1.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_name">Blouse</span>    
                        <p>Formal Wear</p>                                            
                        
                        <div class="product-options">
                        <button class="btn btn-primary my-5" data-toggle="modal" data-target="#loginModal">Book Now</button>
 
    
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="assets\images\kids\blouse2.jpg" alt="" /></li>
                        <li><img src="assets\images\kids\blouse3.jpg" alt="" /></li>
                        <li><img src="assets\images\kids\blouse4.jpg" alt="" /></li>
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
                <img src="assets\images\kids\uniform1.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">

                        <span class="product_name">Uniform</span>    
                        <p>Formal Wear</p>                                            
                        
                        <div class="product-options">
                        <button class="btn btn-primary my-5" data-toggle="modal" data-target="#loginModal">Book Now</button>
                       
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="assets\images\kids\uniform2.jpg" alt="" /></li>
                        <li><img src="assets\images\kids\uniform3.jpg" alt="" /></li>
                        <li><img src="assets\images\kids\uniform4.jpg" alt="" /></li>
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
                <img src="assets\images\kids\pants1.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_name">Pants</span>    
                        <p>Formal Wear</p>                                            
                        
                        <div class="product-options">
                        <button class="btn btn-primary my-5" data-toggle="modal" data-target="#loginModal">Book Now</button>
                        
                        
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="assets\images\kids\pants2.jpg" alt="" /></li>
                        <li><img src="assets\images\kids\pants3.jpg" alt="" /></li>
                        <li><img src="assets\images\kids\pants4.jpg" alt="" /></li>
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
                <img src="assets\images\kids\jacket1.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>                
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_name">Jacket</span>    
                        <p>Informal Wear</p>                                            
                        
                        <div class="product-options">
                        <button class="btn btn-primary my-5" data-toggle="modal" data-target="#loginModal">Book Now</button>
                        
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="assets\images\kids\jacket2.jpg" alt="" /></li>
                        <li><img src="assets\images\kids\jacket3.jpg" alt="" /></li>
                        <li><img src="assets\images\kids\jacket4.jpg" alt="" /></li>
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
                <img src="assets\images\kids\skirt1.jpg" alt="" />
                <div class="image_overlay"></div>
                <div class="view_gallery">View gallery</div>                
                <div class="stats">        	
                    <div class="stats-container">
                        <span class="product_name">Skirt</span>    
                        <p>Informal Wear</p>                                            
                        
                        <div class="product-options">
                        <button class="btn btn-primary my-5" data-toggle="modal" data-target="#loginModal">Book Now</button>
                        
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="assets\images\kids\skirt2.jpg" alt="" /></li>
                        <li><img src="assets\images\kids\skirt3.jpg" alt="" /></li>
                        <li><img src="assets\images\kids\skirt4.jpg" alt="" /></li>
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
