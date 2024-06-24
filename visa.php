<?php
include 'connect.php';
if(isset($_POST['save'])){
     $full_name = $_POST['full_name'];
	 $pass_no = $_POST['pass_no'];
	 $type = $_POST['type'];
    $visa_status = $_POST['visa_status'];
	 
    $sql = "INSERT INTO visa VALUES ('$full_name','$pass_no','$type','$visa_status')";
    $result=mysqli_query($con,$sql);
    if($result){
       //echo "Data inserted successfully";
        header('location:visa.php');
    }else{
        die(mysqli_error($con));
    }
}
?>
<! doc type HTML>
<html>
    <head>
        <title> Visa</title>
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
         <a href="admin.php"><i class="fa fa-home"></i>&nbsp;Home</a>
         <a href="#Profile"><i class="fa fa-user"></i>&nbsp;Profile</a>
         <a  href="manager.php"><i class="fa fa-envelope"></i>&nbsp;Staff</a>
         <a class="active" href="visa.php"><i class="fa fa-users"></i>&nbsp;Visas</a>
          <a href=""><i class="fa fa-cog"></i>&nbsp;Update Manager</a>
          <a href=""><i class="fa fa-cog"></i>&nbsp;Update Visa</a>
          <a href="#about"><i class="fa fa-sign-out-alt"></i>&nbsp;Sign out</a>
        </div> 
        
        <!--page content-->
        <div class="content">
            <h3> VISA</h3><br>
            <div class="container">
                
                  <!--visa entry part-->
            <h3 align="center">Visa Entry</h3>
        <div id="visaEntry">
           <div class="container" my=5 >
      <form method="post">
  <div class="form-group">
    <label>FULL NAME</label>
    <input type="text" class="form-control" placeholder="Enter the full name" name="full_name">
  </div>
          <div class="form-group">
    <label>Passport No</label>
    <input type="text" class="form-control" placeholder="Enter passport no" name="pass_no">
  </div>
          <div class="form-group">
    <label>Visa Type</label>
<select name="type" class="form-control">
        <option selected>Choose...</option>
        <option value="Family-visit Visa">Family-visit Visa</option>
          <option value="Student Visa">Student Visa</option>
          <option value="Work/business Visa">Work/business Visa</option>
          <option value="Tourist Visa">Tourist Visa</option>
      </select>
              <label>Visa Status</label>
<select name="visa_status" class="form-control">
        <option selected>Choose...</option>
        <option value="Awarded">Awarded</option>
          <option value="Rejected">Rejected</option>
          <option value="Pending">Pending</option>
      </select>
  </div>
          
  <button type="submit" class="btn btn-primary" name="save">Submit</button>
</form> 
            </div>
        </div> 
                
           <!--end of visa entry part--> 
      <table class="table">
          <thead>
    <tr>
      <th scope="col">FULL NAME</th>
      <th scope="col">Passport No.</th>
      <th scope="col">Visa type</th>
        <th scope="col">Visa Status</th>
        <th scope="col">Operation</th>
    </tr>
          </thead>
          <tbody>
            <?php
                 $sql = "SELECT full_name, pass_no,type,visa_status FROM visa";
$result = $con->query($sql);

if ($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["full_name"]."</td><td>".$row["pass_no"]."</td><td>".$row["type"]."</td><td>".$row["visa_status"]."</td>";
        echo "<td><button class='btn btn-primary'><a href='visaupdate.php?updatefullname=".$row["full_name"].
            "&&updatepass_no=".$row["pass_no"]."&&updatetype=".$row["type"]."&&updatevisa_status=".$row["visa_status"]."' class='text-light'>Update</a></button><button class='btn btn-danger'><a href='visadelete.php?deletefull_name=".$row["full_name"]."&&pass_no=".$row["pass_no"]."' class='text-light'>Delete</a></button></td>";
        echo "</tr>";
    
    }
}else {
    echo "0 results";
}
$con->close();
              
              
              ?> 
              
          </tbody>
          </table>
            </div>
        </div>
    </body>
</html>