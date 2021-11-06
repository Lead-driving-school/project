<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/addSession&Exam/structure.css">
    <title>Lead driving school</title>
</head>
<body>
    <div class="main">
        <div class="form-box">
            <h1>Add Session</h1>
            <div class="body-content">
                <div class="form-content">
                    <div class="id-class">
                        <label for="idNo">ID:</label>
                        <input type="text" class="session-text" name="idNo" id="idNo"> 
                    </div>
                    <div class="title-class">
                        <label for="title">Title:</label>
                        <input type="text" class="session-text" name="title" id="title"> 
                    </div>
                    <div class="type-class">
                        <label for="type">Type:</label>
                        <select name="type" id="type">
                            <optgroup>
                                <option value="noValue">Type</option>
                                <option value="Theory">Theory</option>
                                <option value="Practical">Practical</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="add-instructor-class">
                        <label for="add-instructor">Instructor:</label>
                        <a href="<?php echo URL?>Manager/addInstructorS"><button class="session-buttons" name="add-instructor" id="add-instructor">ADD INSTRUCTOR</button></a>
                    </div>
                    <div class="add-vehicle-class">
                        <label for="add-vehicle">Vehicle:</label>
                        <a href="<?php echo URL?>Manager/addVehicleS"><button class="session-buttons"name="add-vehicle" id="add-vehicle">ADD VEHICLE</button></a>
                    </div>
                    <div class="date-class">
                        <label for="date">Date:</label>
                        <input type="date" name="date" id="date">
                    </div>
                    <div class="time-class">
                        <label for="time">Time:</label>
                        <input type="time" name="time" id="time">
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