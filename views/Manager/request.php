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
    <link rel="stylesheet" href="<?php echo URL?>public/css/requests/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/requests/containers.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/requests/tableStyle.css">
    <title>Requests</title>
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
            <div class="elements"><a href="#">Requests</a></div>
            <div class="elements"><a href="#">List Of Students</a></div>  
            <div class="elements"><a href="#">Income & Expences</a></div>
            <div class="elements"><a href="#">View Reports</a></div>
            <div class="elements"><a href="#">Expense Recording</a></div>
            <div class="elements"><a href="#">Log out</a></div>
        </div>
        <div class="container">
            <!--Header-->
            <h1>Requests</h1>
            <div class="body-container">
                <div class="request-container">
                    <div class="table">
                        <div class="row">
                            <div class="cell">
                                <div class="information">
                                    <h2>Gihan Weerasinghe has sent a request</h2>
                                </div>
                                <div class="viewButton">
                                    <button id="View">View</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="cell">
                                <div class="information">
                                    <h2>Jithru Silva has sent a request</h2>
                                </div>
                                <div class="viewButton">
                                    <button id="View">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="details-container">
                    <div class="details">
                        <div class="record"><p>Session Title</p><p>XXXXX</p></div>
                        <div class="record"><p>Sender</p><p>XXXXX</p></div>
                        <div class="record"><p>Sending Date</p><p>XXXXX</p></div>
                        <div class="record"><p>Sending Time</p><p>XXXXXXX</p></div>
                        <div class="record"><p>Session type</p><p>XXXXXX</p></div>
                        <div class="record"><p>Current Allocation</p><p>XXXXX</p></div>
                    </div>
                    <div class="button-container">
                        <button name="Accept" id="Accept">Accept</button>
                        <button name="Reject" id="Reject">Reject</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>