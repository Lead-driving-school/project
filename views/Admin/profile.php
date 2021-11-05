<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Receptionist/profile.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/common/sidebar.css">
    <title>Reciptionist</title>
</head>
<body>
    <div class="container">
        <div class="header">
        <?php require_once APPROOT."/../views/common/header.php"; ?>
        </div>
        <div class="main">
        <?php require_once APPROOT."/../views/common/AdminSidebar.php"; ?>
            <div class="view">
                <div class="left">
                    <div class="big-pic"></div>
                </div>
                <div class="right">
                    <div class="title"><h2>Profile</h2></div>
                    <div class="details">
                        <div class="row">
                            <div class="col-1">Name</div>
                            <div class="col-2">:</div>
                            <div class="col-3">Kovinda Kaluarachchi</div>
                        </div>
                        <div class="row">
                            <div class="col-1">Title</div>
                            <div class="col-2">:</div>
                            <div class="col-3">Reciptionist</div>
                        </div>
                        <div class="row">
                            <div class="col-1">Address</div>
                            <div class="col-2">:</div>
                            <div class="col-3">No. 2/67, Galle Road, Kalutara</div>
                        </div>
                        <div class="row">
                            <div class="col-1">Tel No.</div>
                            <div class="col-2">:</div>
                            <div class="col-3">0773746911</div>
                        </div>
                    </div>
                    <div class="edit-profile">
                        <button class="edit">Edit Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>