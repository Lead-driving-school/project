<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/Mid_Box_Layout.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/buttons.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/Add_Emoloyee.css">
    <title>Document</title>
</head>
<body>
    <div class="container-1">
        <div class="container-2">
            <div class="title-container">
                <h1>Add New Vehicle</h1>
            </div>
            <div class="field-container">
               <div class="input-container">
                   <label for="Name">First Name :</label>
                   <input type="text" class="Name">
               </div>
                <div class="input-container">
                    <label for="emp-address">Address :</label>
                    <input type="text" class="emp-address">
                </div>
                <div class="input-container">
                    <label for="NIC">NIC :</label>
                    <input type="text" class="NIC">
                </div>
                <div class="input-container">
                    <label for="Dob">Date of Birth :</label>
                    <input type="date" class="Dob">
                </div>
                <div class="input-container" id="gender">
                    <label>Gender :</label><br>
                    <input class="radio" type="radio" name="gender"  id="male" value="male">
                    <label for="male">Male</label> <br>
                    <input class="radio" type="radio" name="gender" id="female" value="female">
                    <label for="female">Female</label> 
                </div>
                <div class="input-container">
                    <label for="tel-no">Contact Number :</label>
                    <input type="tel" class="tel-no">
                </div>
                <div class="input-container">
                    <label for="vehicle-class-type">Job Title :</label>
                    <select class="vehicle-class-type" id="">
                        <option value="LightVehicles">Manager</option>
                        <option value="HeavyVehecles">Receptionist</option>
                        <option value="HeavyVehecles">Instructo</option>
                        <option value="HeavyVehecles">Teacher</option>
                    </select>
                </div> 

                <div class="input-container">
                    <label for="license-Number">license Number :</label>
                    <input type="text" class="license-Number">
                </div>
                     
            </div>
            <div class="button-container">
                <a href="<?php echo URL?>Admin/staff">
                <button class="cancel">
                    Cancel
                </button></a>
                <button class="confirm">
                   Register
                </button>
                
            </div>
        </div>
    </div>
</body>
</html>