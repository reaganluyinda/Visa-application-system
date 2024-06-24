<!doc type html>
<html>
    <head>
        <title>Staff Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/jpg" href="logo.png"/>
        <link type="text/css" rel="stylesheet" href="clientstyle.css">
        
    </head>
    <body>
        
        <div class="form-box">
        <div>
            <h1 class="header" align="center"><strong><span style="color:cadetblue">E-VISA</span></strong></h1>
            </div>
            <form id="login" action=config_staff.php method="Post"  class="input-group"><br>   
            <input type="text" class="input-field" placeholder="NIN" name="nin" required>
                <input type="text" class="input-field"placeholder="Surname" name="surname" required>
                <input type="password" class="input-field" placeholder="Password" name="password" required>
                
                <input type="checkbox" class="checkbox"> <span>Remember Password</span>
                <button type="submit" class="submit-btn" name="">Log in</button>
            </form>
            
            </div>
        
    </body>
</html>