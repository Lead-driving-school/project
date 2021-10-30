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
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/main/header.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/main/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/requests/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/requests/containers.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/requests/tableStyle.css">
    <title>Requests</title>
</head>
<body>
    <div class="header">

        <?php require_once APPROOT."/../views/common/header.php"; ?>
        
        
    </div>
    
    <!--body content of the page starts here-->
    <div class="main-container">
    <?php require_once APPROOT."/../views/common/ManagerSidebar.php"; ?>
        <div class="container">
            <!--Header-->
            <h1>Requests</h1>
            <h3>3 Unread Requests</h3>
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
                        <div class="record"><p>Session Title</p><p>Road Signs</p></div>
                        <div class="record"><p>Sender</p><p>G. Weerasinghe</p></div>
                        <div class="record"><p>Sending Date</p><p>2021-10-07</p></div>
                        <div class="record"><p>Sending Time</p><p>14:10</p></div>
                        <div class="record"><p>Session type</p><p>Theory</p></div>
                        <div class="record"><p>Current Allocation</p><p>10/20</p></div>
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