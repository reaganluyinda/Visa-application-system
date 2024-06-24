<?php
include 'connect.php';
if(isset($_POST['updatenin'])){
    $nin=$_GET['updatenin'];
    $sql = "update manager set nin='$nin',surname='$surname',g_name='$g_name',tel_no='$tel_no',password='$password' where nin='$nin'";
    $result=mysqli_query($con,$sql);
    if($result){
      //echo "Data updated successfully";
        header('location:manager.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<! doc type HTML>
<html>
    <head>
        <title> Admin page</title>
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
         <a  href="admin.php"><i class="fa fa-home"></i>&nbsp;Home</a>
         <a href="#Profile"><i class="fa fa-user"></i>&nbsp;Profile</a>
         <a href="manager.php"><i class="fa fa-envelope"></i>&nbsp;Staff</a>
         <a href="visa.php"><i class="fa fa-users"></i>&nbsp;Visas</a>
         <a class="active" href=""><i class="fa fa-cog"></i>&nbsp;Update manager</a>
         <a href=""><i class="fa fa-cog"></i>&nbsp;Update visa</a>
          <a href="#about"><i class="fa fa-sign-out-alt"></i>&nbsp;Sign out</a>
        </div> 
        <!--page content-->
        <div class="content">
            Admin Dashboard
            
         <!--manager update part--> 
            <h4 align="center">Manager Update</h4>
            <div id="managerEntry">
           <div class="container" my=5 >
      <form method="post">
  <div class="form-group">
    <label>NIN</label>
    <input type="text" class="form-control" placeholder="Enter you NIN" name="nin">
  </div>
          <div class="form-group">
    <label>Surname</label>
    <input type="text" class="form-control" placeholder="Enter sur name" name="surname">
  </div>
          <div class="form-group">
    <label>Given Name</label>
    <input type="text" class="form-control" placeholder="Enter given name" name="g_name">
  </div>
          <div class="form-group">
    <label>Telephone</label>
    <input type="text" class="form-control" placeholder="Enter telephone No" name="tel_no">
  </div>
          <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form> 
            </div>
        </div>
            
            <!--end of manager update part-->
          
        </div>
        <!--end page content-->
    </body>
    
    
</html>