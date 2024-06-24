<?php
include 'connect.php';
$email = $_POST['email'];  
    $surname = $_POST['surname'];  
          $pass_no = $_POST['pass_no']; 
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $surname = stripcslashes($surname);  
        $pass_no = stripcslashes($pass_no);  
        $email = mysqli_real_escape_string($con, $email);  
        $surname = mysqli_real_escape_string($con, $surname);  
        $pass_no = mysqli_real_escape_string($con, $pass_no); 
        $sql = "select *from client where email = '$email' and surname = '$surname' and pass_no ='$pass_no'";  
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