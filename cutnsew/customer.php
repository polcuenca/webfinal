<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Number = $_POST['Number'];
    $Email = $_POST['Email'];
    $Age = $_POST['Age'];
    $Sex = $_POST['Sex'];
    $Address = $_POST['Address'];
    $Username = mysqli_real_escape_string($con, $_POST["Username"]);
    $Password = mysqli_real_escape_string($con, $_POST["Password"]);
    $Password = md5($Password);

    $sql = "INSERT INTO `customer` (First_Name, Last_Name, Number, Email, Age, Sex, Address, Username, Password)
    VALUES ('$First_Name','$Last_Name', '$Number', '$Email', '$Age', '$Sex', '$Address', '$Username', 'Password')";

    if($result = mysqli_query($con, $sql)){
      echo '<script>("Registration Done");</script>';
    } 

    if ($result) {
        header('location:index.php');
        exit; 
    } else {
        die(mysqli_error($con)); 
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cut N' Sew Tailoring Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" type="text/css" href="css/customer.css"/>
  </head>
  <body>
  <section class="Form my-5 mx-5">
      <div class="container">
        <div class="row g-0">
          <div class="col-lg-5">
            <img src="images/book.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7" id="Cform">
            <h1>REGISTER</h1>

           <!--Form-->
            <form name="form1" method="post">
              <div class="form-row">
                <div class="col-lg-7">
                  <h3>First Name</h3>
                  <input type="text" name="First_Name" class="form-control" placeholder="Enter Fisrt Name" required="">
                </div>
                <div class="col-lg-7">
                  <h3>Last Name</h3>
                  <input type="text" name="Last_Name" class="form-control" placeholder="Enter Last Name" required="">
                </div>
                <div class="col-lg-7">
                  <h3>Age</h3>
                  <input type="text" name="Age" class="form-control" placeholder="Enter Age" required="">
                </div>
                <div class="col-lg-7">
                  <h3>Gender</h3>
                  <select name="Sex" class="form-select">
                    <option selected>Select Gender</option>
                    <option value='Male'>Male</option>
                    <option value='Female'>Female</option>
                    <option value='Others'>Others</option>
                  </select>
                </div>
                
                <div class="col-lg-7">
                  <h3>Email</h3>
                  <input type="text" name="Email" class="form-control" placeholder="Enter E-mail" required="">
                </div>
                <div class="col-lg-7">
                  <h3>Username</h3>
                  <input type="text" name="Username" class="form-control" placeholder="Enter Username" required="">
                </div>
                <div class="col-lg-7">
                  <h3>Password</h3>
                  <input type="Password" name="Password" class="form-control" placeholder="******" required="">
                </div>
                <div class="col-lg-7">
                  <h3>Address</h3>
                  <input type="text" name="Address" class="form-control" id="inputAddress" placeholder="Enter Address" required="">
                </div>
                <div class="col-lg-7">
                  <h3>Number</h3>
                  <input type="text" name="Number" class="form-control" id="inputAddress" placeholder="Enter Number" required="">
                </div>
                <div class="col-lg-7 py-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                    <button name="submit" class="btn1 mb-3" type="submit">Register</button>
                </div>
                    <p>Already have an account? <a href="index.php" style="font-weight:bold">Login here</a></p> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </body>
</html>