<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Receptionist/studentList.css">
    <title>List of Students</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="images/logo.jpg" alt="logo" width="110" height="40">
            </div>
            <div class="prof">
                <div class="pic">
                    <img src="images/profpic.png" alt="profpic" width="45" height="45">
                </div>
                <div class="more">
                    <select name="more" id="more">
                        <option value="name">K. Kovinda</option>
                        <option value="profile">My Profile</option>
                        <option value="logout">Logout</option>
                    </select>
                </div>
            </div>
            
        </div>

        <div class="main">
            <?php require_once APPROOT."/../views/common/ManagerSidebar.php"; ?>
            <div class="view">
                <div class="part-1">
                    <div class="topic"><b>List of Student</b></div>
                </div>
                <div class="part-2">
                    <div class="choise">
                        <div class="cl1">
                            <button class="all">All</button>
                            <button class="exam">Exam passed</button>
                            <button class="trial">Trial passed</button>
                            <button class="fail">Exam Falied</button>
                        </div>
                        <div class="cl2">
                            <input type="text" name="search" class="search" placeholder="Search">
                        </div>
                    </div>
                </div>
                
                <div class="part-3">
                    <div class="head-cover">
                        <div class="table-head">
                            <div class="one"><h4>ID</h4></div>
                            <div class="two"><h4>Name</h4></div>
                            <div class="three"><h4>Tel. No</h4></div>
                            <div class="four"></div>
                            <div class="five"></div>
                            
                        </div>
                    </div>
                    
                    <div class="table-body">
                        <div class="scroll">
                            <div class="row-1">
                                <div class="col-1"><p>16204</p></div>
                                <div class="col-2"><p>Saman Disanayake</p></div>
                                <div class="col-3"><p>0779368122</p></div>
                                <div class="col-4"><a href="#"><button class="payments">Payments</button></a></div>
                                <div class="col-5"><a href="#"><button class="details">View Details</button></a></div>
                            </div>
                            <div class="row-1">
                                <div class="col-1"><p>16204</p></div>
                                <div class="col-2"><p>Saman Disanayake</p></div>
                                <div class="col-3"><p>0779368122</p></div>
                                <div class="col-4"><a href="#"><button class="payments">Payments</button></a></div>
                                <div class="col-5"><a href="#"><button class="details">View Details</button></a></div>
                            </div>
                            <div class="row-1">
                                <div class="col-1"><p>16204</p></div>
                                <div class="col-2"><p>Saman</p></div>
                                <div class="col-3"><p>0779368122</p></div>
                                <div class="col-4"><a href="#"><button class="payments">Payments</button></a></div>
                                <div class="col-5"><a href="#"><button class="details">View Details</button></a></div>
                            </div>
                            <div class="row-1">
                                <div class="col-1"><p>16204</p></div>
                                <div class="col-2"><p>Saman</p></div>
                                <div class="col-3"><p>0779368122</p></div>
                                <div class="col-4"><a href="#"><button class="payments">Payments</button></a></div>
                                <div class="col-5"><a href="#"><button class="details">View Details</button></a></div>
                            </div>
                            <div class="row-1">
                                <div class="col-1"><p>16204</p></div>
                                <div class="col-2"><p>Saman Disanayake</p></div>
                                <div class="col-3"><p>0779368122</p></div>
                                <div class="col-4"><a href="#"><button class="payments">Payments</button></a></div>
                                <div class="col-5"><a href="#"><button class="details">View Details</button></a></div>
                            </div>
                            <div class="row-1">
                                <div class="col-1"><p>16204</p></div>
                                <div class="col-2"><p>Saman Disanayake</p></div>
                                <div class="col-3"><p>0779368122</p></div>
                                <div class="col-4"><a href="#"><button class="payments">Payments</button></a></div>
                                <div class="col-5"><a href="#"><button class="details">View Details</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="part-4">
                    <button class="sort">Sort by</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>