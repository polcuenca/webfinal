<?php

  
session_start();


if(!isset($_SESSION["Username"]))
{
    header("location:index.php");
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

    <title>Cut n' Sew - About Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="css/log.css"/>

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
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
                            <div class="username ">
                                <h6>Welcome <?php echo  $_SESSION["Username"]?>!  |</h6>
                            </div>
                            <li class="scroll-to-section"><a href="home.php">Home</a></li>
                            <li class="scroll-to-section"><a href="user_mens.php">Men's</a></li>
                            <li class="scroll-to-section"><a href="user_womens.php">Women's</a></li>
                            <li class="scroll-to-section"><a href="user_kids.php">Kid's</a></li>
                            <li><a href="user_about.php" class="active">About Us</a></li>
                            
                            <div>
                                <button type="button" class="btn btn-info btn-round" data-toggle="modal"><a href="logout.php" class="text-light">Logout</a></button>  
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
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>About Our Company</h2>
                        <span>Online tailoring service in Bacolod.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="assets/images/about-left-image.jpg" alt="">
                    </div>
                </div>
                <div class="fb col-lg-6">
                    <div class="right-content">
                        <h4>About Us &amp; Our Skills</h4>
                        <span>Welcome to our tailoring services website! We are a team of skilled tailors who take pride in delivering high-quality and personalized tailoring services to our clients.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Our tailoring services cater to a wide range of clothing needs, from custom-made suits and dresses to alterations and repairs for everyday wear.</p>
                        </div>
                        <p>We believe that a great fit is the key to looking and feeling confident in your clothing.

                            At our tailoring services website, we are committed to providing our clients with a seamless and hassle-free experience. We offer flexible scheduling options and strive to complete every project on time and within budget.</p>
                        <ul>
                            <h5>Visit our facebook page!</h5>
                            <br><li><a target = "blank" href="https://www.facebook.com/cutnsewtailoringservices"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Our Team Area Starts ***** -->
    <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Amazing Team</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="assets/images/team-member-01.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Ragnar Lodbrok</h4>
                            <span>Product Caretaker</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="assets/images/team-member-02.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Ragnar Lodbrok</h4>
                            <span>Product Caretaker</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="assets/images/team-member-03.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Ragnar Lodbrok</h4>
                            <span>Product Caretaker</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area Ends ***** -->

    <!-- ***** Services Area Starts ***** -->
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Services</h2>
                        <span>At our tailoring service, we provide a range of services to help you look and feel your best. From minor alterations to bespoke designs, we've got you covered!</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Custom Designs</h4>
                        <p>If you're looking for something truly unique, we offer custom designs tailored to your specific needs. Our team of experienced designers will work with you to create the perfect garment!</p>
                        <img src="assets/images/service-01.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Alteration</h4>
                        <p>We offer alterations for all types of clothing, including pants, shirts, dresses, and jackets. Whether you need a hem taken up or a waistband adjusted, we can help.</p>
                        <img src="assets/images/service-02.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Custom Logo Patches and Emblems</h4>
                        <p>Our tailors are skilled in making custom designs for your logo while also offering you the best quality with our new machines.</p>
                        <img src="assets/images/service-03.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Services Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
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

    </script>
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

    </script>

  </body>

</html>
