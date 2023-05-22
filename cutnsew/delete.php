<?php
include 'connect.php';
if(isset($_GET['deleteCustomer_id'])){
    $Customer_id=$_GET['deleteCustomer_id'];

    $sql="delete from `customer` where Customer_id=$Customer_id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted Successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
    
}
?>