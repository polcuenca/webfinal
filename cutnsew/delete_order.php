<?php
include 'connect.php';
$Order_id = $_GET['Order_id'];
    $sql="delete from `book_order` where Order_id=$Order_id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted Successfully";
        header('location:display_order.php');
    }else{
        die(mysqli_error($con));
    }
?>