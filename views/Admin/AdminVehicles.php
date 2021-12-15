<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL?>public/css/common/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL?>public/css/common/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/Admin_tabel_Styling.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/tabStyling.css">
    <link  rel="stylesheet" href="<?php echo URL?>public/css/admin/layOut_common.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/Screen_fit_ui.css">
    <link  rel="stylesheet" href="<?php echo URL?>public/css/admin/popup.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/buttons.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/common/sidebar.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/common/header.css">
    <script  src="<?php echo URL?>public/js/common/header.js"></script>
    <script src="<?php echo URL?>public/js/common/sidebar.js"></script>
    <script src="<?php echo URL?>public/js/admin/popup.js"></script>
    <script src="popup.js"></script>
    <title>Lead driving school</title>
</head>
<body>
    <div id="pop-div" class="popup-container">
        <div class="conf-box">
            <div class="msg-container">
                <h2>Delete Package?</h2>
                deleting a Vehicles will permenently remove it from your system 
            </div>
            <div class="btn-container">
                <button class="yess" onclick="cancel()">
                    No, keep Vehicles 
                </button >
                    
                <button class="no" onclick="yesDelete()">
                    Yes, Delete Vehicles
                </button>
            </div>
        </div>
     </div>
     <div id="pop-div2" class="popup-container2">
        <div class="conf-box2">
            <div class="input-container">
                <label for="">Password :</label>
                <input type="text"> 
            </div>
            <div class="btn-container2">
                <button class="yess" onclick="cancel2()">
                    Cancel 
                </button >
                    
                <button class="no">
                    Confirm
                </button>
            </div>
        </div>
     </div>
    <div class="box-1">
    <?php require_once APPROOT."/../views/common/header.php"; ?>
        <div class="box-2">
          <?php require_once APPROOT."/../views/common/AdminSidebar.php"; ?>
            <div class="container-1">
                <div class="title-container">
                   Vehicles
                </div>

                <div class="add-new-search-container">
                   <a href="<?php echo URL?>Admin/addVehicle"><button class="add-new">Add Vehicle</button></a> 
                   <input type="search" placeholder='&#xf002; Search'>
                </div>

                <div class="table-heading-container">
                    <div class="heading-row">
                        <div class="col-1">Vehicle ID</div>
                        <div class="col-2">Vehicle Type</div>
                        <div class="col-3">Vehicle class</div>
                        <div class="col-4">Vehicle Number</div>
                        <div class="col-5"></div>
                    </div> 
                </div>


                <div class="row-container">
                    <div class="row">
                        <div class="col-1"><b class="bold-name-2">Vehicle ID</b><b class="bold">: </b>V_1</div>
                        <div class="col-2"><b class="bold-name-2">Vehicle Type</b><b class="bold">: </b>Dual purpose</div>
                        <div class="col-3"><b class="bold-name-2">Vehicle class</b><b class="bold">: </b>B</div>
                        <div class="col-4"><b class="bold-name-2">Vehicle Number</b><b class="bold">: </b>58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>

                    <div class="row">
                        <div class="col-1">V_2</div>
                        <div class="col-2">Mortor Tricycle</div>
                        <div class="col-3">B1</div>
                        <div class="col-4">QA-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>
                    <div class="row">
                        <div class="col-1">V_3</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">B (Auto)</div>
                        <div class="col-4">KA-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>

                    <div class="row">
                        <div class="col-1">V_4</div>
                        <div class="col-2">Morter Bicycle</div>
                        <div class="col-3">A</div>
                        <div class="col-4">TU-3879</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>
                    <div class="row">
                        <div class="col-1">V_5</div>
                        <div class="col-2">Morter Bicycle</div>
                        <div class="col-3">A(Auto)</div>
                        <div class="col-4">JJ-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>

                    <div class="row">
                        <div class="col-1">V_6</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">B</div>
                        <div class="col-4">62-1254</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>
                    <div class="row">
                        <div class="col-1">V_7</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">B</div>
                        <div class="col-4">252-8534</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>

                </div>

                

            </div>
        </div>
    </div>
    
    

    
</body>


</html>