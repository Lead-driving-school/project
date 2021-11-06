<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/editSession&Exam/structure.css">
    <title>Lead driving school</title>
</head>
<body>
    <div class="main">
        <div class="form-box">
            <h1>Session</h1>
            <div class="body-content">
                <div class="form-content">
                    <div class="id-class">
                        <label for="idNo">ID:</label>
                        <p class="text-class">SE0001</p>
                        <div class="edit-button"><button  name="edit" id="edit">Edit</button></div>
                    </div>
                    <div class="title-class">
                        <label for="title">Title</label>
                        <p class="text-class">Road Signs</p>
                        <div class="edit-button"><button  name="edit" id="edit">Edit</button></div>
                    </div>
                    <div class="type-class">
                        <label for="type">Type:</label>
                        <p class="text-class">Theory</p>
                        <div class="edit-button"><button  name="edit" id="edit">Edit</button></div>
                    </div>
                    <div class="add-instructor-class">
                        <label for="add-instructor">Instructor:</label>
                        <a href="<?php echo URL?>Manager/changeInstructorS"><button class="session-buttons" name="add-instructor" id="add-instructor">ADD INSTRUCTOR</button></a>
                        <div class="blank"></div>
                    </div>
                    <div class="add-vehicle-class">
                        <label for="add-vehicle">Vehicle:</label>
                        <a href="<?php echo URL?>Manager/changeVehicleS"><button class="session-buttons" name="add-vehicle" id="add-vehicle">ADD VEHICLE</button></a>
                        <div class="blank"></div>
                    </div>
                    <div class="date-class">
                        <label for="date">Date:</label>
                        <p class="text-class">2021/10/10</p>
                        <div class="edit-button"><button  name="edit" id="edit">Edit</button></div>
                    </div>
                    <div class="time-class">
                        <label for="time">Time:</label>
                        <p class="text-class">8:15AM</p>
                        <div class="edit-button"><button  name="edit" id="edit">Edit</button></div>
                    </div>
                    <div class="add-student-class">
                        <label for="add-participant">Add Students:</label>
                        <a href="<?php echo URL?>Manager/changeStudentS"><button class="session-buttons" name="add-participants" id="add-participants">ADD STUDENTS</button></a>
                        <div class="blank"></div>
                    </div>
                </div>
                <div class="button-set">
                    <a href="<?php echo URL?>Manager/eventCalendar"><button class="session-buttons" name="cancel" id="cancel" >CANCEL</button></a>
                    <button class="session-buttons"name="confirm" id="confirm">CONFIRM</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>