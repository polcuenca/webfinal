<?php
include 'connect.php';
if(isset($_POST['submit'])){

  $Name = $_POST['Name'];
  $Contact_Number = $_POST['Contact_Number'];
  $Garment_Name = $_POST['Garment_Name']; 

  $IMAGE = $_FILES['image'];
  print_r($_FILES['image']);
  $img_loc = $_FILES['image']['tmp_name'];
  $img_name = $_FILES['image']['name'];
  $img_des = "uploads/".$img_name;
  move_uploaded_file($img_loc, 'uploads/' .$img_name);

  $Fabric_details = $_POST['Fabric_details'];
  $Measurements_details = $_POST['Measurements_details'];
  $Appoinment_date = $_POST['Appoinment_date'];
  $Target_date = $_POST['Target_date'];
  
  

  //insert data
  $sql="INSERT INTO `book_order`(`Name`, `Contact_Number`, `Garment_Name`, `image`, `Fabric_details`, `Measurement_details`, `Appointment_date`, `Target_date`) 
  VALUES ('$Name','$Contact_Number','$Garment_Name','$img_des','$Fabric_details','$Measurements_details','$Appoinment_date','$Target_date')";

  $result=mysqli_query($con, $sql);

  if($result){
    header('location:home.php');
      
  }else{
      die(mysqli_error($con));
  }

 
  
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" type="text/css" href="css/order.css"/>
  </head>
  <body>
    
  <section class="Form my-5 mx-5">
      <div class="container">
        
          
          <div class="col-lg-7" id="Cform">
            <h1>BOOK A GARMENT</h1>

           <!--Form-->
            <form name="form1" method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="col-lg-7">
                  <h3>Name</h3>
                  <input type="text" name="Name" class="form-control" placeholder="Enter Name" required="">
                </div>
                <div class="col-lg-7">
                  <h3>Contact Number</h3>
                  <input type="text" name="Contact_Number" class="form-control" placeholder="Enter Contact Number" required="">
                </div>
                <div class="col-lg-7">
                  <h3>Garment Name</h3>
                  <input type="text" name="Garment_Name" class="form-control" placeholder="Enter Garment Name" required="">
                </div>
                <div class="col-lg-7">
                  <h3>Style</h3>
                  <input type="file" name="image" class="form-control" required="">
                </div>
                <div class="col-lg-7">
                  <h3>Fabric Details</h3>
                  <select name="Fabric_details" class="form-select" >
                    <option selected>choose fabric details</option>
                    <option value='I have a fabric'>I have a fabric</option>
                    <option value='Use store fabric'>Use store fabric</option>
                  </select>
                </div>
                <div class="col-lg-7">
                  <h3>Measurements</h3>
                  <select name="Measurements_details" class="form-select">
                    <option selected>choose measurements details</option>
                    <option value='Use my existing fit garment'>Use my existing fit garment </option>
                    <option value='Get fitted in the store'>Get fitted in the store</option>
                  </select>
                </div>
                <div class="col-lg-7">
                  <h3>Set a appointment</h3>
                  <input type="datetime-local" name="Appoinment_date" id="appointment" class="form-control" required="">
                </div>
                
                <div class="col-lg-7">
                  <h3>Set a target date</h3>
                  <input type="date" name="Target_date" id="target" class="form-control" required="">
                </div>
                <div class="col-lg-7 my-5">
                    <button name="submit" class="btn1 mb-3"  type="submit">Book Now</button>
                </div>
              </div>
            </form>
          </div>
        
      </div>
    </section>

  </body>
</html>