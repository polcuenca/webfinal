<?php
include 'connect.php';
$Customer_id=$_GET['updateCustomer_id'];
$sql="Select * from `customer` where Customer_id=$Customer_id";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);

$First_Name=$row['First_Name'];
$Last_Name=$row['Last_Name'];
$Number=$row['Number'];
$Email=$row['Email'];
$Age=$row['Age'];
$Sex=$row['Sex'];
$Address=$row['Address'];
$Username=$row['Username'];
$Password=$row['Password'];

if(isset($_POST['submit'])){
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Number = $_POST['Number'];
    $Email = $_POST['Email'];
    $Age = $_POST['Age'];
    $Sex = $_POST['Sex'];
    $Address = $_POST['Address'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    
    

    $sql="update `customer` set Customer_id='$Customer_id', First_Name='$First_Name', Last_Name='$Last_Name', Number='$Number', Email='$Email'
    , Age='$Age', Sex='$Sex', Address='$Address', Username='$Username', Password='$Password' where Customer_id=$Customer_id";

    $result=mysqli_query($con, $sql);

    if($result){
        //echo"Data Updated successfully";
        header('location:display.php');
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
    <title>Cut N' Sew Tailoring Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" type="text/css" href="css/form.css"/>
  </head>
  <body>
  <section class="Form my-4 mx-5">
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
                  <input type="text" name="First_Name" class="form-control" placeholder="Paul" required="" value=<?php echo $First_Name;?>> 
                </div>
                <div class="col-lg-7">
                  <h3>Last Name</h3>
                  <input type="text" name="Last_Name" class="form-control" placeholder="Cuenca" required="" value=<?php echo $Last_Name;?>>
                </div>
                <div class="col-lg-7">
                  <h3>Age</h3>
                  <input type="text" name="Age" class="form-control" placeholder="mm/dd/yy" required="" value=<?php echo $Age;?>>
                </div>
                <div class="col-lg-7">
                  <h3>Gender</h3>
                  <select name="Sex" class="form-select">
                    <option selected>Select Gender</option>
                    <option value='Male' <?php if ($row['Sex'] == 'Male') echo 'selected'; ?>>Male</option>
                    <option value='Female' <?php if ($row['Sex'] == 'Female') echo 'selected'; ?>>Female</option>
                    <option value='Others' <?php if ($row['Sex'] == 'Others') echo 'selected'; ?>>Others</option>
                  </select>
                </div>
                
                <div class="col-lg-7">
                  <h3>Email</h3>
                  <input type="text" name="Email" class="form-control" placeholder="E-mail" required="" value=<?php echo $Email;?>>
                </div>
                <div class="col-lg-7">
                  <h3>Username</h3>
                  <input type="text" name="Username" class="form-control" placeholder="PaulMartin21" required="" value=<?php echo $Username;?>>
                </div>
                <div class="col-lg-7">
                  <h3>Password</h3>
                  <input type="Password" name="Password" class="form-control" placeholder="******" required="" value=<?php echo $Password;?>>
                </div>
                <div class="col-lg-7">
                  <h3>Address</h3>
                  <input type="text" name="Address" class="form-control" id="inputAddress" placeholder="1234 Main St" required="" value=<?php echo $Address;?>>
                </div>
                <div class="col-lg-7">
                  <h3>Number</h3>
                  <input type="text" name="Number" class="form-control" id="inputAddress" placeholder="0917985246" required="" value=<?php echo $Number;?>>
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
                    <button name="submit" class="btn1" type="submit">Update</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </body>
</html>