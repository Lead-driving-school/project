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
    <link rel="stylesheet" href="<?php echo URL?>public/css/main/calendarStyle.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/main/header.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/main/sidebar.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/EventCalendar/tablestyle.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/EventCalendar/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/main/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/EventCalendar/buttons.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/main/Horizontaltab.css">
    

    <title>Event Calendar</title>
</head>
<body>
    <div class="header">
        <img src="../image/IMG-20210823-WA0007.jpg" class="logo"alt="">
        <!--this is the side bar content--> 
    </div>
    <!--body content of the page starts here-->
    <div class="main-container" id="main">
      <div class="sidebar" id="sidebar">
        <div class="elements"><a href="#">Profile</a></div>
        <div class="elements"><a href="#">Event Calendar</a></div>
        <div class="elements"><a href="#">Requests</a></div>
        <div class="elements"><a href="#">List Of Students</a></div>  
        <div class="elements"><a href="#">Income & Expences</a></div>
        <div class="elements"><a href="#">View Reports</a></div>
        <div class="elements"><a href="#">Expense Recording</a></div>
        <div class="elements"><a href="#">Log out</a></div>
      </div>
        <div class="container1">
          <div class="calender-buttons">
            <div class="calender">
              <div class="month">
                  <i class="fas fa-angle-left prev"></i>
                  <div class="date">
                      <h2></h2>
                      <p></p>
                  </div>
                  <i class="fas fa-angle-right next"></i>
              </div>
              <div class="weekdays">
                  <div>Sun</div><div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div>
              </div>  
              <div class="days">
              </div> 
            </div>
            <div class="buttons">
              <button id="addSession">Add new Session</button>
              <button id="addExam">Set Exam</button>
            </div>
          </div>
        </div>
        <div class="container2">
            <!--Header-->
            <h1>Event Calendar</h1>
            <div class="Horizontal-tab">
              <div class="tabContainer">
                <button class="page-change-button" >All</button>
                <button class="page-change-button" >Sessions</button>
                <button class="page-change-button" >Exams</button>
              </div>
            </div>
            <!--Here we are creating the table-->
            <div class="heading">
              <div class="heading-row">
                <div class="cell">
                  <div class="headingDetails">
                    <div class="one">Session Id</div>
                    <div class="two">Title</div>
                    <div class="three">Type</div>
                    <div class="four">Time</div>
                  </div>
                </div>
                <hr>
              </div>
            </div>
            <div class="tableFixHead">
                <div class="row">
                  <div class="cell">
                    <div class="information">
                      <div class="one">SE01</div>
                      <div class="two">Road Sign</div>
                      <div class="three">Session</div>
                      <div class="four">8.15</div>
                    </div>
                    <div class="viewButton">
                      <button id="View">View</button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="cell">
                    <div class="information">
                      <div class="one">SE02</div>
                      <div class="two">Road Sign Session2</div>
                      <div class="three">Session</div>
                      <div class="four">8.15</div>
                    </div>
                    <div class="viewButton">
                      <button id="View">View</button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="cell">
                    <div class="information">
                      <div class="one">SE01</div>
                      <div class="two">Road Sign</div>
                      <div class="three">Session</div>
                      <div class="four">8.15</div>
                    </div>
                    <div class="viewButton">
                      <button id="View">View</button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="cell">
                    <div class="information">
                      <div class="one">SE01</div>
                      <div class="two">Road Sign</div>
                      <div class="three">Session</div>
                      <div class="four">8.15</div>
                    </div>
                    <div class="viewButton">
                      <button id="View">View</button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="cell">
                    <div class="information">
                      <div class="one">SE01</div>
                      <div class="two">Road Sign</div>
                      <div class="three">Session</div>
                      <div class="four">8.15</div>
                    </div>
                    <div class="viewButton">
                      <button id="View">View</button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="cell">
                    <div class="information">
                      <div class="one">SE01</div>
                      <div class="two">Road Sign</div>
                      <div class="three">Session</div>
                      <div class="four">8.15</div>
                    </div>
                    <div class="viewButton">
                      <button id="View">View</button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="cell">
                    <div class="information">
                      <div class="one">SE01</div>
                      <div class="two">Road Sign</div>
                      <div class="three">Session</div>
                      <div class="four">8.15</div>
                    </div>
                    <div class="viewButton">
                      <button id="View">View</button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="cell">
                    <div class="information">
                      <div class="one">SE01</div>
                      <div class="two">Road Sign</div>
                      <div class="three">Session</div>
                      <div class="four">8.15</div>
                    </div>
                    <div class="viewButton">
                      <button id="View">View</button>
                    </div>
                  </div>
                </div>
                
            </div>
        </div>
    </div>
    <script src="<?php echo URL?>public/js/common/calendarUtil.js"></script>
    <script src="<?php echo URL?>public/js/common/calendarscript.js"></script> 
</body>
</html>