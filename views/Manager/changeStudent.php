<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/changeConductorVehicleStudent/structure.css"> 
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/changeConductorVehicleStudent/tablestyle.css">
    <title>Lead driving school</title>
</head>
<body>
<div class="main-page">
        <div class="topic">
            <h1>Change Assigned Students</h1>
        </div>
        <input type="hidden" id="idContainer" value="<?php echo isset( $_SESSION['editExamId'])? $_SESSION['editExamId']:"";?>">
        <div class="body-content">
            <div class="left-side">
                <div class="heading">
                    <div class="heading-row">
                      <div class="heading-cell">
                        <h2>Currently selected</h2>
                      </div>
                    </div>
                </div>
                <div class="table-topic">
                    <div class="topic-row">
                        <div class="topic-cell">
                            <div class="topic-information">
                                <div class="topic-one">ID</div>
                                <div class="topic-two">Name</div>
                                <div class="three">current Allocation</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="table" id="tableRows1">

                </div>
            </div>
            <div class="right-side">
                <div class="heading">
                    <div class="heading-row">
                      <div class="heading-cell">
                        
                        <h2>Currently unselected</h2>
                      </div>
                    </div>
                </div>
                <div class="table-topic">
                    <div class="topic-row">
                        <div class="topic-cell">
                            <div class="topic-information">
                                <div class="one">ID</div>
                                <div class="two">Name</div>
                                <div class="three">current Allocation</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="table" id="tableRows2">

                </div>
            </div>
        </div>
        <div class="button-set">
        <a href="<?php echo URL?>Manager/editExam"><button class="session-buttons" name="back" id="back" >Back</button></a>
            <button class="session-buttons"name="save" id="save">Save changes</button>
        </div>    
    </div>
<script src="<?php echo URL?>public/js/manager/changeStudent.js"></script>
</body>
</html>