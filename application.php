<?php
include_once 'connect.php';
if(isset($_POST['submit']))
{	 
	 $nin = $_POST['nin'];
	 $surname = $_POST['surname'];
	 $g_name = $_POST['g_name'];
	 $tel_no = $_POST['tel_no'];
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];
    $marital_status = $_POST['marital_status'];
    $gender = $_POST['gender'];
    $res_country = $_POST['res_country'];
    $res_city = $_POST['res_city'];
    $res_current = $_POST['res_current'];
    $email = $_POST['email'];
    $pass_no = $_POST['pass_no'];
    $issuing_country = $_POST['issuing_country'];
    $place_of_issue = $_POST['place_of_issue'];
    $date_of_issue = $_POST['date_of_issue'];
    $date_of_expiry = $_POST['date_of_expiry'];
    $Visa_type = $_POST['Visa_type'];
    $passport_type = $_POST['passport_type'];
    $des_address = $_POST['des_address'];
    $purpose_of_visit = $_POST['purpose_of_visit'];
    $date_of_arrival = $_POST['date_of_arrival'];
    
	 $sql = "INSERT INTO client VALUES ('$nin','$surname','$g_name','$dob','$nationality','$tel_no','$gender','$marital_status','$res_country','$res_city','$res_current','$email','$pass_no','$issuing_country','$place_of_issue','$date_of_issue','$date_of_expiry','$Visa_type','$passport_type','$des_address','$purpose_of_visit','$date_of_arrival')";
    $result=mysqli_query($con,$sql);
    if($result){
        
        //echo "new record created successfully";
        header('location:clientlogin.php');
    }
    else{
        die(mysqli_error($con));
    }

}
?>

<!Doc type html>
<html>
    <head>
        <meta charset="UTF-8">
    <title>Application</title>
       <link rel="icon" type="image/jpg" href="logo.png"/> 
        <link type="text/css" rel="stylesheet" href="stylenav.css">
        <!--bootstrap-->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        
        <!--//bootstrap-->
        <!--icon library-->
        <link rel="stylesheet" href="file:///C:/Users/Reagan/Desktop/login%20page/fontawesome-free-5.15.1-web/css/all.min.css">
        <!--//icon library-->
    </head>
    <body class="body1">
        <header>
            <div class="logo">E-VISA</div>
        
            <nav>
                <ul>
                    <li><a href="index.php" class="active"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                    <li> <a href=""><i class="fa fa-sign-in-alt"></i>&nbsp;Login</a>
                        <ol>
                            <li><a href="clientlogin.php">Client</a></li>
                            <li><a href="managerlogin.php">Staff</a></li>
                        </ol>
                    </li>
                    <li> <a href="index.php"><i class="fa fa-desktop"></i>&nbsp;Application</a></li>
                    <li><a href="contact.php"><i class="fa fa-info"></i>&nbsp;Contact</a></li>
                </ul>
            </nav>
            <div class="menu-toggle"><i class="fa fa-bars"></i></div>
        </header>
    
        <br>
        <br>
        <br>
        
          <div class="container" my=1>

        <form method="post">
            <!--type of application-->
            <fieldset>
                <legend>Select type of application</legend>
            <div class="form-group col-md-5">
      <label>Visa type</label>
      <select name="Visa_type" class="form-control">
        <option selected>Choose...</option>
        <option value="Family-visit Visa">Family-visit Visa</option>
          <option value="Student Visa">Student Visa</option>
          <option value="Work/business Visa">Work/business Visa</option>
          <option value="Tourist Visa">Tourist Visa</option>
      </select>
    </div>
        </fieldset>
              
            <!--end of type of application-->
            
            <!--personal data-->
                    <br>
                    <fieldset>
                        <legend>Personal data</legend>
                        
                
  <div class="form-row">
    <div class="form-group col-md-5">
      <label>Given Name</label>
      <input type="text" class="form-control" name="g_name">
    </div>
    <div class="form-group col-md-5">
      <label>Surname</label>
      <input type="text" class="form-control" name="surname">
    </div>
  </div>
 <div class="form-row">
    <div class="form-group col-md-5">
      <label>Date of Birth</label>
      <input type="date" class="form-control" name="dob">
    </div>
    <div class="form-group col-md-5">
      <label>Gender</label>
      <select name="gender" class="form-control">
        <option selected>Choose...</option>
        <option value="Male">Male</option>
          <option value="Female">Female</option>
      </select>
    </div>
  </div>
  <div class="form-group col-md-5">
    <label>Marital Status</label>
    <select name="marital status" class="form-control">
        <option selected>Choose...</option>
        <option value="Divorced">Divorced</option>
        <option value="Married">Married</option>
        <option value="other">other</option>
        <option value="Separated">Separated</option>
        <option value="Single">Single</option>
        <option value="Widowed">Widowed</option>
      </select>
  </div>
  <div class="form-group col-md-5">
    <label>Current Nationality</label>
    <input type="text" class="form-control" name="nationality" placeholder="Enter your nationality">
  </div>
  <div class="form-row">
    <div class="form-group col-md-5">
      <label>Country of residence</label>
      <input type="text" class="form-control" name="res_country">
    </div>
    <div class="form-group col-md-4">
      <label>City of residence</label>
      <input type="text" class="form-control" name="res_city">
    </div>
    <div class="form-group col-md-3">
      <label>Current residential address</label>
      <input type="text" class="form-control" name="res_current">
    </div>
  </div>
     <div class="form-row">
    <div class="form-group col-md-5">
      <label>Telephone Number</label>
      <input type="text" class="form-control" name="tel_no">
    </div>
    <div class="form-group col-md-4">
      <label>Email</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group col-md-3">
      <label>Confirm Email</label>
      <input type="email" class="form-control" name="email">
    </div>
  </div>                
        
    </fieldset>
            
             <!--end of personal data-->
            
            
            <!--passport data-->
              <fieldset>
                 <legend>Passport Data</legend>
                            
       <div class="form-group col-md-5">
      <label>Passport Type</label>
      <select name="passport_type" class="form-control">
        <option selected>Choose...</option>
        <option value="Diplomatic passport">Diplomatic passport</option>
          <option value="Offical passport">Offical passport</option>
          <option value="ordinary passport">Ordinary passport</option>
      </select>
    </div>
           <div class="form-row">
    <div class="form-group col-md-5">
      <label>Passport Number</label>
      <input type="text" class="form-control" name="pass_no">
    </div>
    <div class="form-group col-md-4">
      <label>Issuing Country</label>
      <input type="text" class="form-control" name="issuing_country">
    </div>
    <div class="form-group col-md-3">
      <label>Place of Issue</label>
      <input type="text" class="form-control" name="place_of_issue">
    </div>
  </div>  
            <div class="form-row">
    <div class="form-group col-md-5">
      <label>nin</label>
      <input type="text" class="form-control" name="nin">
    </div>
    <div class="form-group col-md-4">
      <label>Date of issue</label>
      <input type="date" class="form-control" name="date_of_issue">
    </div>
    <div class="form-group col-md-3">
      <label>Date of expiry</label>
      <input type="date" class="form-control" name="date_of_expiry">
    </div>
  </div>  
                         
            </fieldset>
            <!--end of passport data-->
            
            <!--other data-->
            <fieldset>
            <legend>Other Data</legend>
            <div class="form-group col-md-5">
    <label>Destination Address(person, organization, hotel, travel agency…)</label>
    <input type="text" class="form-control" name="des_address" placeholder="Enter your destination address">
  </div>
            <div class="form-group col-md-5">
      <label>Purpose of visit</label>
      <select name="purpose_of_visit" class="form-control">
        <option selected>Choose...</option>
        <option value="Conference">Conference</option>
          <option value="Family visit">Family visit</option>
          <option value="Medical">Medical</option>
          <option value="returning resident">returning resident</option>
          <option value="Tourism">Tourism</option>
          <option value="Transit">Transit</option>
          <option value="other">other</option>
      </select>
    </div>
            <div class="form-group col-md-5">
    <label>Date of arrival</label>
    <input type="date" class="form-control" name="date_of_arrival" placeholder="Enter date of arrival">
  </div>
            <div class="form-group col-md-5">
    <label>Duration of stay requested</label>
    <input type="text" class="form-control" name="duration" placeholder="Enter your number of days your staying">
  </div>
            <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I confirm that all information provided in this form is accurate and valid
      </label>
    </div>
  </div> 
        </fieldset>
            <button type="submit" class="btn btn-primary" name="submit">Register</button>  
            <!--end of data-->
            </div>
        </form>
        <br>
        <br>
         
    </body>
</html>