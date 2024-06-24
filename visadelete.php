<?php
include 'connect.php';
if(isset($_GET['deletefull_name'])){
    $full_name=$_GET['deletefull_name'];
    $pass_no=$_GET['pass_no'];
    $sql="DELETE FROM `visa` WHERE `visa`.`full_name` = '".$full_name."' AND `visa`.`pass_no` = '".$pass_no."'";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted Successfull";
        header('location:visa.php');
    }else{
        die(mysqli_error($con));
    }
}
?>