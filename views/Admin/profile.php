<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL?>public/css/common/profileRecipient.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Lead driving school</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="images/IMG-20210823-WA0007.jpg" alt="logo" width="125" height="55">
            </div>
            <div class="prof">
                <div class="pic">
                    <img src="images/profpic.png" alt="prof-pic" width="50" height="50">
                </div>
                <div class="opt">
                    <select name="opt" class="opt">
                        <option value="name">L.P.Tharaka</option>
                        <option value="profile">My Profile</option>
                        <option value="logout">Logout</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="main">
            
            <?php require_once APPROOT."/../views/common/AdminSidebar.php"; ?>
            <div class="view">
                <div class="left">
                    <div class="big-picture">
                        <img src="<?php echo URL?>public/css/images/profpic.png" alt="big-pic" width="250" height="250">
                    </div>
                    <button class="upload-pic">
                        <img src="<?php echo URL?>public/css/images/camera.png" alt="cam" width="35" height="35">
                    </button>
                </div>
                <div class="right">
                    <div class="holder">
                        <div class="topic"><h2>Profile</h2></div>
                        <div class="details">
                            <div class="row-1">
                                <div class="zero"></div>
                                <div class="col-1">Name</div>
                                <div class="col-2">:</div>
                                <div class="col-3">K.P.Sampath</div>
                            </div>
                            <div class="row-1">
                                <div class="zero"></div>
                                <div class="col-1">Title</div>
                                <div class="col-2">:</div>
                                <div class="col-3">Manager</div>
                            </div>
                            <div class="row-1">
                                <div class="zero"></div>
                                <div class="col-1">Address</div>
                                <div class="col-2">:</div>
                                <div class="col-3">No. 5/65,Uyanwatta,Matara</div>
                            </div>
                            <div class="row-1">
                                <div class="zero"></div>
                                <div class="col-1">Tel-No</div>
                                <div class="col-2">:</div>
                                <div class="col-3">077 9345288</div>
                            </div>
                        </div>
                        <div class="edit-profile">
                            <button class="butt">Edit profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>