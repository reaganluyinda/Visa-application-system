<?php
include 'connect.php';
if(isset($_GET['deletenin'])){
    $nin=$_GET['deletenin'];
    $sql="DELETE FROM `manager` WHERE `manager`.`nin` = '".$nin."'";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted Successfull";
        header('location:manager.php');
    }else{
        die(mysqli_error($con));
    }
}
?>