<?php
include 'connect.php';
$nin = $_POST['nin'];  
    $surname = $_POST['surname'];  
          $password = $_POST['password']; 
      
        //to prevent from mysqli injection  
        $nin = stripcslashes($nin);  
        $surname = stripcslashes($surname);  
        $password = stripcslashes($password);  
        $nin = mysqli_real_escape_string($con, $nin);  
        $surname = mysqli_real_escape_string($con, $surname);  
        $password = mysqli_real_escape_string($con, $password); 
        $sql = "select *from manager where nin = '$nin' and surname = '$surname' and password ='$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid information.</h1>";  
        }     
?>