<!doc type html>
<html>
    <head>
        <title>Client Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/jpg" href="logo.png"/>
        <link type="text/css" rel="stylesheet" href="clientstyle.css">
        
    </head>
    <body class="body1">
        <div class="form-box">
        <div>
            <h1 class="header" align="center"><strong><span style="color:cadetblue">E-VISA</span></strong></h1>
            </div>
            <form id="login" action=user.php method="Post"  class="input-group"><br>  
            <input type="email" class="input-field" placeholder="email" required name="email" >
                <input type="text" class="input-field"placeholder="surname" required name="surname">
                <input type="text" class="input-field" placeholder="pass_no" required name="pass_no">
            
                <input type="checkbox" class="checkbox"> <span>Remember Passport No</span><br><br>
                <button type="submit" class="submit-btn" name=""><b>Log in </b></button>
            </form>
            
            </div>

    </body>
</html>