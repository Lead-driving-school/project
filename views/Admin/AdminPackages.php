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
                    <a href="<?php echo URL?>Admin/packages"> <div class="tab-1">Packages & Prices<hr class="tab-line"></div></a>
                    <a href="<?php echo URL?>Admin/initExpences"><div class="tab-2">Service Charges for RMV </div></a>
                </div>
                

                <div class="info-container">
                    <div class="topic-container">
                        <h2>Initial Prices (Without training)</h2>
                    </div>
                    <hr class="topic-line">
                    <div class="addnew-btn-container">
                        <a href="<?php echo URL?>Admin/addInitPrices"><button class="add-new">Add New</button></a>
                    </div>
                    <div class="table-heading-container">
                        <div class="heading-row">
                            <div class="col-1">Vehicle Type</div>
                            <div class="col-2">Vehicle class</div>
                            <div class="col-3">Price</div>
                            <div class="col-4"></div>
                            
                        </div> 
                    </div>
                    <div class="row-container">
                        <div class="row">
                            <div class="col-1">Dual purpose vehicle</div>
                            <div class="col-2">B</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        <div class="row">
                            <div class="col-1">Dual purpose vehicle (Auto)</div>
                            <div class="col-2">B (Auto)</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        <div class="row">
                            <div class="col-1">Mortor Tricycle</div>
                            <div class="col-2">B1</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        <div class="row">
                            <div class="col-1">Morter Bicycle</div>
                            <div class="col-2">A</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        <div class="row">
                            <div class="col-1">Light Morter Bicycle</div>
                            <div class="col-2">A1</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>
                    </div>
                </div>

                <div class="info-container">
                    <div class="topic-container">
                        <h2>Training Packages</h2>
                    </div>
                    <hr class="topic-line">

                    <div class="addnew-btn-container">
                        <a href="<?php echo URL?>Admin/addPackage"><button class="add-new">Add New</button></a>
                    </div>
                    <div class="table-heading-container">
                        <div class="heading-row">
                            <div class="column-1">Package Name</div>
                            <div class="col-3">Price</div>
                            <div class="col-4"></div>
                            
                        </div> 
                    </div>
                    <div class="row-container">
                        <div class="row">
                            <div class="column-1">Package 1</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><a href="<?php echo URL?>Admin/editPackages"><button class="edit">Edit</button></a></div>
                        </div>

                        <div class="row">
                            <div class="column-1">Package 2</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><a href="<?php echo URL?>Admin/editPackages"><button class="edit">Edit</button></a></div>
                        </div>

                        <div class="row">
                            <div class="column-1">Package 3</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><a href="<?php echo URL?>Admin/editPackages"><button class="edit">Edit</button></a></div>
                        </div>

                        <div class="row">
                            <div class="column-1">Package 4</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><a href="<?php echo URL?>Admin/editPackages"><button class="edit">Edit</button></a></div>
                        </div>
                    </div>
                </div>

                <div class="info-container">
                    <div class="topic-container">
                        <h2>Extra Prices(per day)</h2>
                    </div>
                    <hr class="topic-line">
                    <div class="addnew-btn-container">
                        <a href="<?php echo URL?>Admin/addExtraPrices"><button class="add-new">Add New</button></a>
                    </div>

                    <div class="table-heading-container">
                        <div class="heading-row">
                            <div class="col-1">Vehicle Type</div>
                            <div class="col-2">Vehicle class</div>
                            <div class="col-3">Price</div>
                            <div class="col-4"></div>
                            
                        </div> 
                    </div>
                    <div class="row-container">
                        <div class="row">
                            <div class="col-1">Dual purpose vehicle</div>
                            <div class="col-2">B</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        <div class="row">
                            <div class="col-1">Dual purpose vehicle (Auto)</div>
                            <div class="col-2">B (Auto)</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        <div class="row">
                            <div class="col-1">Mortor Tricycle</div>
                            <div class="col-2">B1</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        <div class="row">
                            <div class="col-1">Morter Bicycle</div>
                            <div class="col-2">A</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        <div class="row">
                            <div class="col-1">Light Morter Bicycle</div>
                            <div class="col-2">A1</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>