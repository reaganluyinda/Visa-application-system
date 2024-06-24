<?php
$con= new mysqli('localhost','root','','visadb');
if(!$con){
    die(mysqli_error($con));
}
?>