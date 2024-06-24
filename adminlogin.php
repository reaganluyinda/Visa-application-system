<!doc type html>
<html>
    <head>
        <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/jpg" href="logo.png"/>
        <link type="text/css" rel="stylesheet" href="style.css">
        
    </head>
    <body>
         
        
        <div class="form-box">
            <br>
            <div>
            <h1 class="header" align="center"><strong><span style="color:cadetblue">E-VISA</span></strong></h1>
            </div>
            
        <!--start of login form-->
            <form id="login" action="admin.php" method="Post"  class="input-group">  
            <input type="text" class="input-field" placeholder="Staff ID"  name="staff_id" required>
                <input type="text" class="input-field"placeholder="Surname" name="surname" required>
                <input type="password" class="input-field" placeholder="Password"  name="password" required>
                
                <input type="checkbox" class="checkbox"> <span>Remember Password</span>
                <button type="save" class="submit-btn">Log in</button><br><br>
                <p>Don't have an account?&nbsp; <a href="adminregister.php"> Sign up now</a></p>
            </form>
            <!--end of login form-->
                
            </div>
        
    </body>
</html>