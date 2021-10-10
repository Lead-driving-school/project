<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/tabStyling.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/buttons.css">
    <link  rel="stylesheet" href="<?php echo URL?>public/css/admin/Admin_packages.css">
    <link  rel="stylesheet" href="<?php echo URL?>public/css/admin/layOut_common.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/common/sidebar.css">
    <script  src="<?php echo URL?>public/js/common/header.js"></script>
    <script src="<?php echo URL?>public/js/common/sidebar.js"></script>
    <title>Lead</title>
</head>
<body>
    <div class="box-1">
        <header-component></header-component>
        <div class="box-2">
        <div class="sidebar">
        
        <div class="nav-list">
            <a class="list-item" href="#">
                <span class="link-icon">&#xf012</span>
                <span class="link-name">Profile</span>
            </a>
            
            <a class="list-item" href="<?php echo URL?>AdminStaff">
                <span class="link-icon">&#xf013</span>
                <span class="link-name">Staff</span>
            </a>
            <a class="list-item" href="<?php echo URL?>AdminPackages">
                <span class="link-icon">&#xf007</span>
                <span class="link-name">Packages & prices</span>
            </a>
            
            <a class="list-item" href="<?php echo URL?>AdminEmployeeAccounts">
                <span class="link-icon">&#xf009</span>
                <span class="link-name">Accounts</span>
            </a>
            <a class="list-item" href="<?php echo URL?>AdminVehicles">
                <span class="link-icon">&#xf010</span>
                <span class="link-name">Vehicles</span>
            </a>
            
            <a class="list-item" href="#">
                <span class="link-icon">&#xf011</span>
                <span class="link-name">Reports</span>
            </a>

            <a class="list-item" href="#">
                <span class="link-icon">&#xf011</span>
                <span class="link-name">Income & Expences</span>
            </a>
        </div>
    </div>
            <div class="container-1">
                
                
                <div class="title-container">
                    <h1>Packages & Prices</h1>
                </div>
                
                
                <div class="tab-container">
                    <a href="<?php echo URL?>AdminPackages"> <div class="tab-1">Packages & Prices<hr class="tab-line"></div></a>
                    <a href="<?php echo URL?>AdminExpences"><div class="tab-2">Service Charges for RMV </div></a>
                </div>
                

                <div class="info-container">
                    <div class="topic-container">
                        <h2>Initial Prices (Without training)</h2>
                    </div>
                    <hr class="topic-line">
                    <div class="addnew-btn-container">
                        <button class="add-new">Add New</button>
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
                        <a href="<?php echo URL?>AdminAddPackage"><button class="add-new">Add New</button></a>
                       
                    </div>
                    <div class="row-container">
                        <div class="row">
                            <div class="column-1">Package 1</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><a href="<?php echo URL?>AdminEditPackages"><button class="edit">Edit</button></a></div>
                        </div>

                        <div class="row">
                            <div class="column-1">Package 2</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><a href="<?php echo URL?>AdminEditPackages"><button class="edit">Edit</button></a></div>
                        </div>

                        <div class="row">
                            <div class="column-1">Package 3</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><a href="<?php echo URL?>AdminEditPackages"><button class="edit">Edit</button></a></div>
                        </div>

                        <div class="row">
                            <div class="column-1">Package 4</div>
                            <div class="col-3">Rs 3500.00</div>
                            <div class="col-4"><a href="<?php echo URL?>AdminEditPackages"><button class="edit">Edit</button></a></div>
                        </div>
                    </div>
                </div>

                <div class="info-container">
                    <div class="topic-container">
                        <h2>Extra Prices(per day)</h2>
                    </div>
                    <hr class="topic-line">
                    <div class="addnew-btn-container">
                        <button class="add-new">Add New</button>
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