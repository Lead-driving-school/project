<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Signup/Signup.css">
    <title>code</title>
    <div class="fullpage">
        <div class="signup-box">
            <div class="left">
                <div class="content-box">
                    <h2>Verification</h2>
                    <form action="<?php echo URL?>User/signup" method="post">
                    <p>What is your NIC?</p>
                    <input type="text" class="nic-container" name="nic" id="nic">
                    <p>Enter the otp here!</p>
                    <input type="text" class="Otp-code" name="otpcode" id="otpcode">
                    <div class="submit-button-container"><button class="sent-button" name="sent" id="sent">Send</button></div>
                </div>
                
            </div>
            
            <div class="right"></div>
        </div>
    </div>
</head>
<body>
    
</body>
</html>