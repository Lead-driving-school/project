<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Receptionist/addResult.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Results</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="images/IMG-20210823-WA0007.jpg" alt="logo" width="120" height="50">
            </div>
            <div class="prof">
                <div class="prf-pic">
                    <img src="images/profpic.png" alt="prof" width="50" height="50">
                </div>
                <div class="prf-log">
                    <select name="logout" id="logout">
                        <option value="name">S. Lakmal</option>
                        <option value="myprofile">My Profile</option>
                        <option value="logout">Logout</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="my-content">
            <!-- <div class="side-bar">
                <ul>
                    <li><a href="http://localhost/project/receptionist/profile">Profile</a></li>
                    <li><a href="#">Event Calendar</a></li>
                    <li><a href="http://localhost/project/receptionist/sessions">Sessions</a></li>
                    <li><a href="http://localhost/project/receptionist/payments">Payments</a></li>
                    <li><a href="http://localhost/project/receptionist/studentList">Student List</a></li>
                    <li><a href="http://localhost/project/receptionist/registration">Registration</a></li>
                    <li><a href="http://localhost/project/receptionist/addResult">Results Adding</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div> -->
            <?php require_once APPROOT."/../views/common/ReceptionistSidebar.php"; ?>
            <div class="view">
                <div class="part-1">
                    <div class="topic"><h2>Add Results</h2></div>
                </div>
                <div class="part-2">
                    <div class="dateofExam">
                        <div class="ex-date">Date:</div>
                        <div class="date"></div>
                    </div>
                    <div class="exm-type">
                        <div class="exam-type">Exam:</div>
                        <div class="exam"></div>
                    </div>
                </div>
                <div class="part-3">
                    <div class="table-head">
                        <div class="z-row"></div>
                        <div class="one"><h4>ID</h4></div>
                        <div class="two"><h4>Name</h4></div>
                        <div class="three"><h4>Status</h4></div>
                        <div class="four"></div>
                        <div class="five"></div>
                    </div>
                    <div class="table-body">
                        <div class="scroll">
                            <div class="row-1">
                                <div class="zero"></div>
                                <div class="col-1"><p>St201</p></div>
                                <div class="col-2"><p>K.M.Ranaweera</p></div>
                                <div class="col-3"><p>Attempt</p></div>
                                <div class="col-4"><button class="pass">Passed</button></div>
                                <div class="col-5"><button class="fail">Failed</button></div>
                            </div>
                            <div class="row-1">
                                <div class="zero"></div>
                                <div class="col-1"><p>St201</p></div>
                                <div class="col-2"><p>K.M.Ranaweera</p></div>
                                <div class="col-3"><p>Attempt</p></div>
                                <div class="col-4"><button class="pass">Passed</button></div>
                                <div class="col-5"><button class="fail">Failed</button></div>
                            </div>
                            <div class="row-1">
                                <div class="zero"></div>
                                <div class="col-1"><p>St201</p></div>
                                <div class="col-2"><p>K.M.Ranaweera</p></div>
                                <div class="col-3"><p>Attempt</p></div>
                                <div class="col-4"><button class="pass">Passed</button></div>
                                <div class="col-5"><button class="fail">Failed</button></div>
                            </div>
                            <div class="row-1">
                                <div class="zero"></div>
                                <div class="col-1"><p>St201</p></div>
                                <div class="col-2"><p>K.M.Ranaweera</p></div>
                                <div class="col-3"><p>Attempt</p></div>
                                <div class="col-4"><button class="pass">Passed</button></div>
                                <div class="col-5"><button class="fail">Failed</button></div>
                            </div>
                            <div class="row-1">
                                <div class="zero"></div>
                                <div class="col-1"><p>St201</p></div>
                                <div class="col-2"><p>K.M.Ranaweera</p></div>
                                <div class="col-3"><p>Attempt</p></div>
                                <div class="col-4"><button class="pass">Passed</button></div>
                                <div class="col-5"><button class="fail">Failed</button></div>
                            </div>
                            <div class="row-1">
                                <div class="zero"></div>
                                <div class="col-1"><p>St201</p></div>
                                <div class="col-2"><p>K.M.Ranaweera</p></div>
                                <div class="col-3"><p>Attempt</p></div>
                                <div class="col-4"><button class="pass">Passed</button></div>
                                <div class="col-5"><button class="fail">Failed</button></div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</body>
</html>