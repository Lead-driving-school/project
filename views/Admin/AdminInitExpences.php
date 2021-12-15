<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL?>public/css/common/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/tabStyling.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/buttons.css">
    <link  rel="stylesheet" href="<?php echo URL?>public/css/admin/Admin_packages.css">
    <link  rel="stylesheet" href="<?php echo URL?>public/css/admin/layOut_common.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/common/sidebar.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/common/header.css">
    <link  rel="stylesheet" href="<?php echo URL?>public/css/admin/responsive_pack.css">
    
    <script  src="<?php echo URL?>public/js/common/header.js"></script>
    <script src="<?php echo URL?>public/js/common/sidebar.js"></script>
    <title>Lead driving school</title>
</head>
<body>
    <div class="box-1">
    <?php require_once APPROOT."/../views/common/header.php"; ?>
        <div class="box-2">
          <?php require_once APPROOT."/../views/common/AdminSidebar.php"; ?>
          
            <div class="container-1">
                
                
                <div class="title-container">
                    <h1>Packages & Prices</h1>
                </div>
                
                
                <div class="tab-container">
                    <a href="<?php echo URL?>Admin/packages"> <div class="tab-1">Packages & Prices</div></a>
                    <a href="<?php echo URL?>Admin/initExpences"><div class="tab-2">Service Charges for RMV <hr class="tab-line"></div></a>
                </div>
                

                <div class="info-container">
                    <div class="topic-container">
                        <h2>Initial Charges</h2>
                    </div>
                    <hr class="topic-line">
                    <!-- <div class="addnew-btn-container">
                        <button class="add-new">Add New</button>
                    </div> -->

                    <div class="table-heading-container">
                        <div class="heading-row">
                            <div class="col-1">Number of Vehicles</div>
                            <div class="col-2"></div>
                            <div class="col-3">Price (LKR)</div>
                            <div class="col-4"></div>
                            
                        </div> 
                    </div>
                    <div class="row-container">
                        <div class="row">
                            <div class="col-1"><b class="bold-name-4">Number of Vehicles</b><b class="bold">: </b>One class of vehicles</div>
                            <div class="col-2"></div>
                            <div class="col-3"><b class="bold-name-4">Price (LKR)</b><b class="bold">: </b>1700.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        <div class="row">
                            <div class="col-1"><b class="bold-name-4">Number of Vehicles</b><b class="bold">: </b>Two classes of vehicles</div>
                            <div class="col-2"></div>
                            <div class="col-3"><b class="bold-name-4">Price (LKR)</b><b class="bold">: </b>2000.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        <div class="row">
                            <div class="col-1"><b class="bold-name-4">Number of Vehicles</b><b class="bold">: </b>Three classes of vehicles</div>
                            <div class="col-2"></div>
                            <div class="col-3"><b class="bold-name-4">Price (LKR)</b><b class="bold">: </b>2250.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                    </div>
                </div>

                <div class="info-container">
                    <div class="topic-container">
                        <h2>Other charges</h2>
                    </div>
                    <hr class="topic-line">
                    <!-- <div class="addnew-btn-container">
                        <button class="add-new">Add New</button>
                    </div> -->
                    <div class="table-heading-container">
                        <div class="heading-row">
                            <div class="column-1">Task</div>
                            <div class="col-3">Price (LKR)</div>
                            <div class="col-4"></div>
                            
                        </div> 
                    </div>
                    <div class="row-container">
                        <div class="row">
                            <div class="column-1"><b class="bold-name-2">Task</b><b class="bold">: </b>Reapplying for written test</div>
                            <div class="col-3"><b class="bold-name-2">Price (LKR)</b><b class="bold">: </b>250.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        <div class="row">
                            <div class="column-1"><b class="bold-name-2">Task</b><b class="bold">: </b>Reapplying for Practical test</div>
                            <div class="col-3"><b class="bold-name-2">Price (LKR)</b><b class="bold">: </b>500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        
                    </div>
                </div>

                

            </div>
        </div>
    </div>
</body>
</html>