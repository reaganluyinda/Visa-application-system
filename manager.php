<?php
include 'connect.php';

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
         <a class="" href="admin.php"><i class="fa fa-home"></i>&nbsp;Home</a>
         <a href="#Profile"><i class="fa fa-user"></i>&nbsp;Profile</a>
         <a class="active" href="manager.php"><i class="fa fa-envelope"></i>&nbsp;Staff</a>
         <a href="visa.php"><i class="fa fa-users"></i>&nbsp;Visas</a>
          <a href=""><i class="fa fa-cog"></i>&nbsp;Update manager</a>
         <a href=""><i class="fa fa-cog"></i>&nbsp;Update visa</a>
          <a href="#about"><i class="fa fa-sign-out-alt"></i>&nbsp;Sign out</a>
        </div> 
        <!--page content-->
        <div class="content">
            <h3> Company Staff</h3><br>
            <div class="container">
            <button class="btn btn-primary"><a href="admin.php" class="text-light">Add staff</a> </button><br><br>
      <table class="table">
          <thead>
    <tr>
      <th scope="col">NIN</th>
      <th scope="col">Sur name</th>
      <th scope="col">Given name</th>
      <th scope="col">Telephone</th>
        <th scope="col">Password</th>
        <th scope="col">Operation</th>
    </tr>
          </thead>           
          
          <?php
              
          $sql = "SELECT nin, surname, g_name,tel_no, password FROM manager";
$result = $con->query($sql);

if ($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["nin"]."</td><td>".$row["surname"]."</td><td>".$row["g_name"]."</td><td>".$row["tel_no"]."</td><td>".$row["password"]."</td>";
        echo "<td><button class='btn btn-primary'><a href='update.php?updatenin=".$row["nin"].
            "' class='text-light'>Update</a></button><button class='btn btn-danger'><a href='delete.php?deletenin=".$row["nin"]."' class='text-light'>Delete</a></button></td>";
        echo "</tr>";
    
    }
}else {
    echo "0 results";
}
$con->close();
              
        
              ?>
          
          </table>
            </div>
        </div>
    </body>
</html>