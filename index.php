
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/484fbcb614.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat'>
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="css/login page.css">
        <link rel="icon" type="image/x-icon" href="css/system images/favicon.ico">
        <title>Login Page</title>
    </head>
    
    <body>
        <div id="company-logo">
            Basta may menu dito <br>
            Burgers <br>
            Fries <br>
            Wings <br>
            Sides <br>
        </div>
        
        <div class="center">
            <div>
                <form>
                    <center><div class="logocontainer">
                        <img src="css/system images/company logo.png" alt="1975 Old-Fashioned Burgers logo" class="logo">
                    </div></center>
                    <h1>WELCOME</h1>
                    <div class="text_field">
                        <i class="fa-solid fa-circle-user"></i>
                        <input type="text" required>
                        <span></span>
                        <label>Username</label>    
                    </div>

                    <div class="text_field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" required>
                        <span></span>
                        <label>Password</label>
                    </div>

                    <div class="pass">Forgot Password?</div>
                    <input type="submit" value="LOGIN" onclick="location.href='menu.php'">
                </form>
                <center>
                    <div>
                        <hr style='display:inline-block; width:30%;'> OR <hr style='display:inline-block; width:30%;'>
                    </div>
                </center>
                <input type="submit" value="EPBI">
                <input type="submit" value="Login as Guest">
            </div>
        </div>
    
    </body>
</html>