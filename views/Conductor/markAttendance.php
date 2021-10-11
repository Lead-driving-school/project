<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL?>public/css/main/header.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/main/sidebar.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/main/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/markAttendance/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/markAttendance/tableStyle.css">
    <title>Attendance</title>
</head>
<body>
    <div class="header">

        <img src="../image/IMG-20210823-WA0007.jpg" class="logo"alt="">
        <!--this is the side bar content--> 
    </div>
    
    <!--body content of the page starts here-->
    <div class="main-container">
        <div class="sidebar" id="sidebar">
            <div class="elements"><a href="#">Profile</a></div>
            <div class="elements"><a href="#">Event Calendar</a></div>
            <div class="elements"><a href="#">Attendance</a></div>
            <div class="elements"><a href="#">Sessions</a></div>  
            <div class="elements"><a href="#"></a></div>
            <div class="elements"><a href="#"></a></div>
            <div class="elements"><a href="#"></a></div>
            <div class="elements"><a href="#">Log out</a></div>
        </div>
        <div class="container">
            <!--Header-->
            <h1>Attendance<hr></h1>
            <div class="date-viewer">
                <p>16th Aug 2021</p>
            </div>
            <div class="table">
                <div class="row">
                    <div class="cell">
                        <div class="information">
                            <div class="one">Image</div>
                            <div class="two">N.R.Senevirathne</div>
                            <div class="three">ST1001</div>
                        </div>
                        <div class="Attendance-Button-set">
                            <button class="present" id="present">Present</button>
                            <button class="absent" id="absent">Absent</button>
                            <button class="view" id="view">View</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="cell">
                        <div class="information">
                            <div class="one">Image</div>
                            <div class="two">N.R.Senevirathne</div>
                            <div class="three">ST1001</div>
                        </div>
                        <div class="Attendance-Button-set">
                            <button class="present" id="present">Present</button>
                            <button class="absent" id="absent">Absent</button>
                            <button class="view" id="view">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>