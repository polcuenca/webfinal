<?php
include 'connect.php';

session_start();
if(!isset($_SESSION["Username"]))
{
    header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
                                  <div class="username px-3">
                                      <h6>Hello <?php echo  $_SESSION["Username"]?>! |</h6>
                                  </div>
                              <div>
                                  <button type="button" class="btn btn-info btn-round"><a href="display.php" class="text-light">Check User Accounts</a></button>
                                  <button type="button" class="btn btn-info btn-round"><a href="order_form.php" class="text-light">Add Order</a></button>
                                  <button type="button" class="btn btn-info btn-round"><a href="logout.php" class="text-light"> Logout</a></button>
                                  
                              </div>
                              <nav>
        
                          </ul>

                      </nav>
                  </div>
              </div>
          </div>
      </header>
      <!-- ***** Header Area End ***** -->
    <div class="container">
    <button class="btn btn-primary my-5"><a href="order_form.php" class="text-light"> Add order</a></button>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Order ID</th>
        <th scope="col">Name</th>
        <th scope="col">Number</th>
        <th scope="col">Garment Name</th>
        <th scope="col">Image</th>
        <th scope="col">Fabric Details</th>
        <th scope="col">Measurment Details</th>
        <th scope="col">Appoinment Date</th>
        <th scope="col">Target Date</th>
        <th scope="col">Operations</th>
        
        </tr>
    </thead>
    <tbody>
        <?php
        $sql="Select * from `book_order`";
        $result=mysqli_query($con,$sql);
        
            while($row=mysqli_fetch_assoc($result)){
                echo"<tr>
                    <td>$row[Order_id]</td>
                    <td>$row[Name]</td>
                    <td>$row[Contact_Number]</td>
                    <td>$row[Garment_Name]</td>
                    <td><img src='$row[image]' width='170px' height='200px'></td>
                    <td>$row[Fabric_details]</td>
                    <td>$row[Measurement_details]</td>
                    <td>$row[Appointment_date]</td>
                    <td>$row[Target_date]</td>
                    <td>
                    
                    <button class='btn btn-danger'><a href='update_order.php? Order_id=$row[Order_id]' class='text-light'>Update</a></button>
                    <br></br>
                    
                    <button class='btn btn-danger'><a href='delete_order.php? Order_id=$row[Order_id]' class='text-light'>Delete</a></button>
                    </td>
                
                </tr>";
    
            }
        
        
        
        
        ?>
    </tbody>
    </table>
    </div>
    
</body>
</html>