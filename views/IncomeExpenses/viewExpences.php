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
    <link rel="stylesheet" href="<?php echo URL?>public/css/main/Horizontaltab.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/viewExpences&income/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/viewExpences&income/tableStyle.css">
    <title>Expences</title>
</head>
<body>
    <div class="header">

        <img src="../image/IMG-20210823-WA0007.jpg" class="logo"alt="">
        <!--this is the side bar content--> 
    </div>
    
    <!--body content of the page starts here-->
    <div class="main-container">
        <div class="sidebar" id="sidebar">
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
        </div>
        <div class="container">
            <!--Header-->
            <h1>Expences<hr></h1>
            <div class="tabs">
                <div class="Horizontal-tab">
                    <div class="tabContainer">
                    <button class="page-change-button" onclick="changeFilter(event,'All')">All</button>
                    <button class="page-change-button" onclick="changeFilter(event,'Ssessions')">Expenses of Students</button>
                    <button class="page-change-button" onclick="changeFilter(event,'Exams')">Other Expenses</button>
                    </div>
                    
                </div>
            </div>
            
            <div class="heading">
                <div class="heading-row">
                    <div class="cell">
                    <div class="headingDetails">
                        <div class="one">Expense ID</div>
                        <div class="two">Expense</div>
                        <div class="three">Accepted Manager</div>
                        <div class="four">Date</div>
                        <div class="five">Time</div>
                        <div class="six">Amount</div>
                    </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="table">
                <div class="row">
                    <div class="cell">
                        <div class="information">
                            <div class="one">10001</div>
                            <div class="two">Spent on petrol</div>
                            <div class="three">Roshan Senevirathne</div>
                            <div class="four">02/10/2021</div>
                            <div class="five">8:15</div>
                            <div class="six">1000</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="cell">
                        <div class="information">
                            <div class="one">10001</div>
                            <div class="two">Spent on petrol</div>
                            <div class="three">Roshan Senevirathne</div>
                            <div class="four">02/10/2021</div>
                            <div class="five">8:15</div>
                            <div class="six">1000</div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="button-container">
                <button class="income-graph-button" id="incomeGraph" name="incomeGraph">Graphical view</button>
                <button class="back-button" id="back" name="back">Back</button>
            </div>
        </div>
    </div>
</body>
</html>