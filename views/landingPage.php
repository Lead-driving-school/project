<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL?>public/css/landing.css">
    <title>Lead Driving School</title>
</head>
<body>
    <div class="main-page">
        <div class="header">
            <div class="logo-and-others">
                <div class="logo">Logo Here</div>
                <button class="about-us" id="about">About Us</button>
                <button class="contact-us" id="contact">Contact Us</button>
            </div>
            <div class="staff-button-set">
                <a href="<?php echo URL?>Staff/loginpage"><button class="staff-login" id="staffLogin">Log in  as a Staff member</button></a>
                <a href="<?php echo URL?>Staff/signup"><button class="staff-signup" id="staffSignUp" >I'm new to the staff</button></a>
            </div>
        </div>
        <div class="body-container">
            <div class="left">
                <div class="content">
                    <div class="topic">
                        <h1>LEAD Driving School</h1>
                    </div>
                    <div class="sub-content">
                        Here is your web space to continue your learning process.
                    </div>
                    <div class="student-button-set">
                        <a href="<?php echo URL?>User/loginPage"><button class="Student-login" id="stLogin">Log in</button></a>
                        <a href="<?php echo URL?>User/signup"><button class="Student-signup" id="stSignUp">Start now</button></a>
                    </div>
                </div>
                
            </div>
            <div class="right">
                <div class="image" >
                    <img src="<?php echo URL?>public/images/1911.i511.003_driving training flat.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>