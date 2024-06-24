<?php
include 'connect.php';


?>
<! doc type HTML>
<html>
    <head>
        <title> User/profile page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/jpg" href="logo.png"/>
          <!--bootstrap-->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        
        <!--//bootstrap-->
        <!--icon library-->
        <link rel="stylesheet" href="file:///C:/Users/Reagan/Desktop/login%20page/fontawesome-free-5.15.1-web/css/all.min.css">
        <!--//icon library-->
        <link type="text/css" rel="stylesheet" href="styleAdmin.css">
    </head>
    <body>
        <!---the sidebar-->
     <div class="sidebar">
         <a class="active" href="user.php"><i class="fa fa-user"></i>&nbsp;Home</a>
         <a href="status.php"><i class="fa fa-envelope"></i>&nbsp;Visa status</a>
          <a href="#signout"><i class="fa fa-sign-out-alt"></i>&nbsp;Sign out</a>
        </div> 
        <!--page content-->
        <div class="content">
            <h2>Profile</h2>
            <table class="table">
          <thead>
              
    <tr>
      <th scope="col">NIN</th>
      <th scope="col">Surname</th>
      <th scope="col">Given name</th>
      <th scope="col">Telephone</th>
        <th scope="col">date of birth</th>
        <th scope="col">Nationality</th>
         <th scope="col">Marital Status</th>
         <th scope="col">Gender</th>
         <th scope="col">Country of residence</th>
         <th scope="col">City of residence</th>
         <th scope="col">current residential address</th>
         <th scope="col">Email</th>
         <th scope="col">Passport Number</th>
         <th scope="col">Issuing Country</th>
         <th scope="col">Place of Issue</th>
         <th scope="col">Date of expiry</th>
         <th scope="col">Visa type</th>
         <th scope="col">Passport type</th>
         <th scope="col">Destination Address</th>
         <th scope="col">Purpose of Visit</th>
         <th scope="col">Date of Arrival</th>
         <th scope="col">Operation</th>
    </tr>
          </thead>           
          
          <?php
              
          $sql = "SELECT * FROM client";
$result = $con->query($sql);

if ($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["nin"]."</td><td>".$row["surname"]."</td><td>".$row["g_name"]."</td><td>".$row["tel_no"]."</td><td>".$row["dob"]."</td><td>".$row["nationality"]."</td><td>".$row["marital_status"]."</td><td>".$row["gender"]."</td><td>".$row["res_country"]."</td><td>".$row["res_city"]."</td><td>".$row["res_current"]."</td><td>".$row["email"]."</td><td>".$row["pass_no"]."</td><td>".$row["issuing_country"]."</td><td>".$row["place_of_issue"]."</td><td>".$row["date_of_expiry"]."</td><td>".$row["Visa_type"]."</td><td>".$row["passport_type"]."</td><td>".$row["des_address"]."</td><td>".$row["purpose_of_visit"]."</td><td>".$row["date_of_arrival"]."</td></tr>";
        
    
    }
}else {
    echo "0 results";
}
$con->close();
              
        
              ?>
          
          </table>
        </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </body>
</html>