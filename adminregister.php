<?php
include 'connect.php';
if(isset($_POST['submit'])){
     $staff_id = $_POST['staff_id'];
	 $surname = $_POST['surname'];
	 $g_name = $_POST['g_name'];
	 $dob = $_POST['dob'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO admin VALUES ('$staff_id','$surname','$g_name','$dob','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
     echo "registered successfully";
        
    }else{
        die(mysqli_error($con));
    }
}
?>

<!doc type html>
<html>
    <head>
        <title>Admin Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/jpg" href="logo.png"/>
        <!-- <link type="text/css" rel="stylesheet" href="style.css"> -->
        
    </head>
    <body>
        
        <div class="form-box">
            <br>
            <div>
            <h1 class="header" align="center"><strong><span style="color:cadetblue">E-VISA</span></strong></h1>
            </div>
                
            <!--start registration form-->
            <form id="register"  method="POST"  class="input-group">  
            <input type="text" class="input-field" placeholder="Staff ID"  name="staff_id" required>
                <input type="text" class="input-field"placeholder="Surname" name="surname" required>
                <input type="text" class="input-field"placeholder="Given Name" name="g_name" required>
                <input type="date" class="input-field"placeholder="Date of Birth" name="dob" required>
                <input type="password" class="input-field" placeholder="Password"  name="password" required>
                
                <input type="checkbox" class="checkbox"> <span> I agree to the terms & conditions.</span>
                <button type="submit" class="submit-btn" name="submit">Register</button><br>
                <p align="center">Have an account?&nbsp; <a href="adminlogin.php"> Sign in now</a></p>
            </form>
            <!--end of registration form-->
            
            </div>
        
    </body>
</html>