<?php
include 'connect.php';
if(isset($_GET['updatefull_name'])){
    $full_name=$_GET['updatefull_name'];
    $pass_no=$_GET['updatepass_no'];
    $type=$_GET['updatetype'];
    $visa_status=$_GET['updatevisa_status'];
    
    #$sql = "update visa set full_name='$full_name',pass_no='$pass_no',type='$type',visa_status='$visa_status' where pass_no='$pass_no'";
    #$result=mysqli_query($con,$sql);
    #if($result){
      #echo "Data updated successfully";
        //header('location:manager.php');
    #}else{
     #   die(mysqli_error($con));
    }
#}
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
          <a href=""><i class="fa fa-cog"></i>&nbsp;Update manager</a>
         <a class="active" href=""><i class="fa fa-cog"></i>&nbsp;Update visa</a>
          <a href="#about"><i class="fa fa-sign-out-alt"></i>&nbsp;Sign out</a>
        </div> 
        <!--page content-->
        <div class="content">
            Admin Dashboard
            
         <!--manager update part--> 
            <h4 align="center">Visa Update</h4>
            <div id="managerEntry">
           <div class="container" my=5 >
      <form method="post">
  <div class="form-group">
    <label>FULL NAME</label>
    <input type="text" class="form-control" name="full_name" value=<?php echo $full_name ; ?>>
  </div>
          <div class="form-group">
    <label>Passport No</label>
    <input type="text" class="form-control" name="pass_no" value=<?php echo $pass_no; ?>>
  </div>
          <div class="form-group">
    <label>Visa Type</label>
<select name="type" class="form-control" value=<?php echo $type; ?>>
        <option>Choose...</option>
        <option value="Family-visit Visa">Family-visit Visa</option>
          <option value="Student Visa">Student Visa</option>
          <option value="Work/business Visa">Work/business Visa</option>
          <option value="Tourist Visa">Tourist Visa</option>
      </select>
  </div>
          <div class="form-group">
               <label>Visa Status</label>
<select name="visa_status" class="form-control">
        <option selected>Choose...</option>
        <option value="Awarded">Awarded</option>
          <option value="Rejected">Rejected</option>
          <option value="Pending">Pending</option>
      </select>
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