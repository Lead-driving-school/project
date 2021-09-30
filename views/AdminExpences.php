<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/tabStyling.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/buttons.css">
    <link  rel="stylesheet" href="<?php echo URL?>public/css/admin/Admin_packages.css">
    <link  rel="stylesheet" href="<?php echo URL?>public/css/admin/layOut_common.css">
    <script  src="<?php echo URL?>public/js/common/header.js"></script>
    <script src="<?php echo URL?>public/js/common/sidebar.js"></script>
    <title>Lead</title>
</head>
<body>
    <div class="box-1">
        <header-component></header-component>
        <div class="box-2">
            <sidebar-component></sidebar-component>
            <div class="container-1">
                
                
                <div class="title-container">
                    <h1>Packages & Prices</h1>
                </div>
                
                
                <div class="tab-container">
                    <a href="<?php echo URL?>AdminPackages"> <div class="tab-1">Packages & Prices</div></a>
                    <a href="<?php echo URL?>AdminExpences"><div class="tab-2">Service Charges for RMV <hr class="tab-line"></div></a>
                </div>
                

                <div class="info-container">
                    <div class="topic-container">
                        <h2>Initial Charges</h2>
                    </div>
                    <hr class="topic-line">
                    <!-- <div class="addnew-btn-container">
                        <button class="add-new">Add New</button>
                    </div> -->
                    <div class="row-container">
                        <div class="row">
                            <div class="col-1">One Vehicle</div>
                            <div class="col-2"></div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        <div class="row">
                            <div class="col-1">Two Vehicles</div>
                            <div class="col-2"></div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        <div class="row">
                            <div class="col-1">Three Vehicles</div>
                            <div class="col-2"></div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                    </div>
                </div>

                <div class="info-container">
                    <div class="topic-container">
                        <h2>L- board charges</h2>
                    </div>
                    <hr class="topic-line">
                    <!-- <div class="addnew-btn-container">
                        <button class="add-new">Add New</button>
                    </div> -->
                    <div class="row-container">
                        <div class="row">
                            <div class="col-1">Morter bicycle</div>
                            <div class="col-2"></div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        <div class="row">
                            <div class="col-1">Other vehicles</div>
                            <div class="col-2"></div>
                            <div class="col-3">Rs 3500.00</div>
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
                    <div class="row-container">
                        <div class="row">
                            <div class="column-1">Reapplying for written test</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><button class="edit">Edit</button></div>
                        </div>

                        <div class="row">
                            <div class="column-1">Reapplying for Practical test</div>
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