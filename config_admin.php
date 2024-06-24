<?php
include 'connect.php';
$staff_id = $_POST['staff_id'];  
    $surname = $_POST['surname'];  
          $password = $_POST['password']; 
      
        //to prevent from mysqli injection  
        $staff_id = stripcslashes($staff_id);  
        $surname = stripcslashes($surname);  
        $password = stripcslashes($password);  
        $staff_id = mysqli_real_escape_string($con, $staff_id);  
        $surname = mysqli_real_escape_string($con, $surname);  
        $password = mysqli_real_escape_string($con, $password); 
        $sql = "select *from admin where staff_id = '$staff_id' and surname = '$surname' and password ='$password'";  
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