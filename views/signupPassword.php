<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Signup/Signup.css">
    <title>Sign up</title>
    <div class="fullpage">
        <div class="signup-box">
            <div class="left">
                <div class="content-box">
                    <h2>Sign Up</h2>
                    <form action="<?php echo URL?>User/signupPassword" method="post">
                        <p>hello roshan</p>
                        <p>Enter Your Password:</p>
                        <input type="text" class="enter-password" name="enterPassword" id="enterPassword">
                        <p>Confirm Password:</p>
                        <input type="text" class="confirm-password" name="confirmPassword" id="confirmPassword">
                        <div class="submit-button-container"><button class="confirm-button" name="confirm" id="confirm">Send</button></div>
                    </form>
                </div>
            </div>
            
            <div class="right"></div>
        </div>
    </div>
</head>
<body>
    
</body>
</html>