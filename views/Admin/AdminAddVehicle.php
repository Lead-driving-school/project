<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/Mid_Box_Layout.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/Add_vehicle.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/buttons.css">
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
                    <label for="vehicle-num">Vehicle Number :</label>
                    <input type="text" class="vehicle-num">
               </div>
                <div class="input-container">
                    <label for="vehicle-type">Vehicle Type :</label>
                    <input type="text" class="vehicle-type">
                </div>
               <div class="input-container">
                    <label for="vehicle-class">Vehicle class :</label>
                    <select class="vehicle-class" id="">
                        <option value="A">A</option>
                        <option value="A">A(Auto)</option>
                        <option value="B">B</option>
                    </select>
                </div> 
                     
            </div>
            <div class="button-container">
                <a href="<?php echo URL?>Admin/vehicles">
                    <button class="cancel">
                        Cancel
                    </button>
                </a>
                <button class="confirm">
                    Confirm
                </button>
                
            </div>
        </div>
    </div>
</body>
</html>