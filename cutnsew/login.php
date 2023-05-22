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













<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cut N' Sew Tailoring Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/log.css"/>
  </head>
  <body>

    <section class="Form my-4 mx-2">
      <div class="container">
        <div class="row g-0">
          <div class="col-lg-5">
            <img src="images/log.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7 px-4 py-5" id="Cform">
            <h1 class="font-weight-bold py-3">Login</h1>
            <h5>Sign in to your account</h5>
             <form action="#" method="post">
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="text" name="Username" class="form-control my-3 p-2" placeholder="Username" required="">
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="password" name="Password" class="form-control my-3 p-2" placeholder="Password" required="">
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
                  <button type="submit" value="Login" class="btn1 mt-3 mb-5">Login</button>
                </div>
              </div>
              <a href="#" style="font-weight:bold">Forgot Password ?</a>
              <p>Don't have an account? <a href="customer.php" style="font-weight:bold">Register here</a></p> 
             </form>
          </div>
        </div>
      </div>
    
    </section>

  </body>
</html>