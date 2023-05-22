<?php
                include 'connect.php';

                session_start();
                $error = '';

                if($_SERVER["REQUEST_METHOD"]=="POST")
                {
                    $Username = mysqli_real_escape_string($con, $_POST["Username"]);
                    $Password = mysqli_real_escape_string($con, $_POST["Password"]);
                    $Password = md5($Password);
        
                    $sql="Select * from `customer` where Username='$Username' AND Password='$Password' ";

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
<html lang="en">

  <head>

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
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
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
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="mens.php">Men's</a></li>
                            <li class="scroll-to-section"><a href="womens.php">Women's</a></li>
                            <li class="scroll-to-section"><a href="kids.php">Kid's</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <div>
                                <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">Login</button>
                                <button type="button" class="btn btn-info btn-round" data-toggle="modal"><a href="customer.php" class="text-light">Signup</a></button>
                                
                            </div>
                    
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>Custom Tailoring in Bacolod</h4>
                                <span>Unleash your style potential with our expertly crafted and affordable tailoring services <br>– the perfect fit for all your fashion needs. <br></span>
                                <div class="main-border-button">
                                    <a data-toggle="modal" data-target="#loginModal">Book Now!</a>
                                </div>
                            </div>
                            <img src="assets/images/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Women</h4>
                                            <span>Best Clothes For Women</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Women</h4>
                                                <p>| Blouse | Skirts | Trousers | Jackets | Dresses | Uniforms |</p>
                                                <div class="main-border-button">
                                                    <a href="womens.php">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-01.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Men</h4>
                                            <span>Best Clothes For Men</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Men</h4>
                                                <p>| Suits | Shirts | Pants |  Waistcoats |  Blazer | Uniforms |</p>
                                                <div class="main-border-button">
                                                    <a href="mens.php">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-02.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Kids</h4>
                                            <span>Best Clothes For Kids</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Kids</h4>
                                                <p>| Blouse | Skirts | Trousers | Jackets | Dresses | Uniforms | Shirts | Pants |</p>
                                                <div class="main-border-button">
                                                    <a href="kids.php">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-03.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Accessories</h4>
                                            <span>Addition to your Clothes</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Accessories</h4>
                                                <p>| Patches | Emblems | Embroidery Services</p>
                                                <div class="main-border-button">
                                                    <a href="accessories.php">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/baner-right-image-04.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!--we-do start -->
		<section  class="we-do">
			<div class="container">
				<div class="we-do-details">
					<div class="section-header text-center">
						<h2>At your convenience</h2>
						<p>
							Tailored to perfection, just for you! 
						</p>
					</div><!--/.section-header-->
					<div class="we-do-carousel">
						<div class="row">
							<div class="col-sm-4 col-xs-12">
								<div class="single-we-do-box text-center">
									<div class="we-do-description">
										<div class="we-do-info">
											<div class="we-do-img">
												<img src="assets/images/consultency.jpg" alt="image of consultency" />
											</div><!--/.we-do-img-->
											<div class="we-do-topics">
												<h2>
													<a href="#">
														<FONT COLOR="BLACK">Choose a Style</FONT>
													</a>
												</h2>
											</div><!--/.we-do-topics-->
										</div><!--/.we-do-info-->
										<div class="we-do-comment">
											<p>
												Choose your style from our style catalogue OR simply upload your style image.
											</p>
										</div><!--/.we-do-comment-->
									</div><!--/.we-do-description-->
								</div><!--/.single-we-do-box-->
							</div><!--/.col-->
							<div class="col-sm-4 col-xs-12">
								<div class="single-we-do-box text-center">
									<div class="we-do-description">
										<div class="we-do-info">
											<div class="we-do-img">
												<img src="assets/images/busisness_grow.jpg" alt="image of business" />
											</div><!--/.we-do-img-->
											<div class="we-do-topics">
												<h2>
													<a href="#">
														<FONT COLOR="BLACK">Get Measured</FONT>
													</a>
												</h2>
											</div><!--/.we-do-topics-->
										</div><!--/.we-do-info-->
										<div class="we-do-comment">
											<p>
												Schedule Technician's visit OR send us your Best Fit garment (Free pick up).
											</p>
										</div><!--/.we-do-comment-->
									</div><!--/.we-do-description-->
								</div><!--/.single-we-do-box-->
							</div><!--/.col-->
							<div class="col-sm-4 col-xs-12">
								<div class="single-we-do-box text-center">
									<div class="we-do-description">
										<div class="we-do-info">
											<div class="we-do-img">
												<img src="assets/images/support-logo.jpg" alt="image of support" />
											</div><!--/.we-do-img-->
											<div class="we-do-topics">
												<h2>
													<a href="#">
														<FONT COLOR="BLACK">Within 10 days</FONT>
													</a>

												</h2>
											</div><!--/.we-do-topics-->
										</div><!--/.we-do-info-->
										<div class="we-do-comment">
											<p>
												Your garment get stitched by professional tailors and delivered within 10 days.
											</p>
										</div><!--/.we-do-comment-->
									</div><!--/.we-do-description-->
								</div><!--/.single-we-do-box-->
							</div><!--/.col-->
						</div><!--/.row-->
					</div><!--/.we-do-carousel-->
				</div><!--/.we-do-details-->
			</div><!--/.container-->

		</section><!--/.we-do-->
		<!--we-do end-->
    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Explore Our Services</h2>
                        <span>Are you interested in unique and personalized clothing?
                            Are you looking for wedding or special occasion clothing, businesses looking for branded clothing for their employees, or anyone who wants to add a personal touch to their wardrobe?</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Cut n' Sew offers you a lot of options!</p>
                        </div>
                        <p>Custom tailoring: You can choose the fabric, color, and design for their clothing item. Tailors will take measurements and create a garment that fits the customer's body perfectly.
                            Embroidery: You can choose from a range of embroidery designs or create their own design to be added to their clothing item. Embroidery can be added to different parts of the garment, such as the sleeves, collar, or pockets.
                            Alterations: Tailors can also provide alteration services for existing clothing items to ensure a perfect fit.</p>
                        <p> Pricing for the service would depend on the complexity of the design, the type of fabric used, and the amount of time it takes to create the item. Customers can expect to pay a premium price for the personalized service and high-quality craftsmanship.</p>
                        <div class="main-border-button">
                            <a href="about.php">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>Patches and Embroideries</h4>
                                    <span>Latest Collection</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src="assets/images/explore-image-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image">
                                    <img src="assets/images/explore-image-02.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>Different Types</h4>
                                    <span>Over 304 Products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

    
  
    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>Subscribe to our newsletter to be updated.</h2>
                        <span>Delivering updates and news to suit your need!</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your Name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-2">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Store Location:<br><span>103 Ground Floor, Bob's University Courtyard, Lasalle Avenue, 6100 Bacolod City</span></li>
                                <li>Phone:<br><span>0968-5539-890 | 0955-1732-830</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Work Hours:<br><span>07:30 AM - 7:30 PM Daily</span></li>
                                <li>Email:<br><span>cutnsew@gmail.com</span></li>
                                <li>Social Media:<br><span><a target = "blank" href="https://www.facebook.com/cutnsewtailoringservices">Facebook</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
           
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

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });
        (function(){
 
        $("#cart").on("click", function() {
         $(".shopping-cart").fadeToggle( "fast");
         });
 
        })();
    </script>

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



  </body>
</html>