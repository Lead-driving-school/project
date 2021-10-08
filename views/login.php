<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL?>public/css/common/login.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?php echo URL?>public/js/common/login.js"></script>
    <title>Lead driving school</title>
</head>
<body>
    <div class="main-container">
        <div class="container">
            <div class="left">
                <div class="left-column">
                <h1>
                    <div class="lead">LEAD</div>
                    <div class="driving">DRIVING</div> 
                    <div class="school">SCHOOL</div> 
                </h1>
            </div>
            </div>
                <div class="login-box">
                    <div class="form-header" id="formHeader">
                        <h1 class="form-heder-h1">User Login</h1>
                    </div>
                    
                    
                    <form name="loginForm" onsubmit="return check_empty_field()" action="<?php echo URL?>Login" method="POST">
                        <div class="invalid-login<?php echo $invalid; ?>" id="invalid-login">
                            Invalid username or password, please try again.
                        </div>
                        <div class="input-container">
                            <input class="text-input" id="username" name="username" type="text" placeholder='&#xf007; Username'>
                            <input class="text-input" id="password" name="password" type="password" style="font-family: FontAwesome;" placeholder='&#xf023;  password'>
                        </div>
                        <div class="buttons">
                            <a class="forgot-password"  href="https://www.w3schools.com">
                               Forgot your password?
                            </a>
                            <button type="submit"  class="login-btn" id="submit" name="submit">Log In</button>

                        </div>
                    </form>
    
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>