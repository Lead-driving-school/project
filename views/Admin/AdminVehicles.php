<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/Admin_tabel_Styling.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/tabStyling.css">
    <link  rel="stylesheet" href="<?php echo URL?>public/css/admin/layOut_common.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/Screen_fit_ui.css">
    <link  rel="stylesheet" href="<?php echo URL?>public/css/admin/popup.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/buttons.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/common/sidebar.css">
    <script  src="<?php echo URL?>public/js/common/header.js"></script>
    <script src="<?php echo URL?>public/js/common/sidebar.js"></script>
    <script src="<?php echo URL?>public/js/admin/popup.js"></script>
    <script src="popup.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="pop-div" class="popup-container">
        <div class="conf-box">
            <div class="msg-container">
                <h2>Delete Package?</h2>
                deleting a Vehicles will permenently remove it from your system 
            </div>
            <div class="btn-container">
                <button onclick="cancel()">
                    No, keep Vehicles 
                </button >
                    
                <button onclick="yesDelete()">
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
                <button onclick="cancel2()">
                    Cancel 
                </button >
                    
                <button>
                    Confirm
                </button>
            </div>
        </div>
     </div>
    <div class="box-1">
        <header-component></header-component>
        <div class="box-2">
            <div class="sidebar">
                
                <div class="nav-list">
                    <a class="list-item" href="#">
                        <span class="link-icon">&#xf012</span>
                        <span class="link-name">Profile</span>
                    </a>
                    
                    <a class="list-item" href="<?php echo URL?>Admin/staff">
                        <span class="link-icon">&#xf013</span>
                        <span class="link-name">Staff</span>
                    </a>
                    <a class="list-item" href="<?php echo URL?>Admin/packages">
                        <span class="link-icon">&#xf007</span>
                        <span class="link-name">Packages & prices</span>
                    </a>
                    
                    <a class="list-item" href="<?php echo URL?>Admin/employeeAccounts">
                        <span class="link-icon">&#xf009</span>
                        <span class="link-name">Accounts</span>
                    </a>
                    <a class="list-item" href="<?php echo URL?>Admin/ehicles">
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
                   Vehicles
                </div>

                <div class="add-new-search-container">
                    <button class="add-new">Add Vehicle</button>
                    <button class="search">Search</button>
                </div>

                <div class="row-container">
                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>

                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>
                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>

                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>
                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>

                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>
                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>

                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>
                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>

                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>
                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>

                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>
                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>

                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>
                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>

                    <div class="row">
                        <div class="col-1">V001</div>
                        <div class="col-2">Dual purpose</div>
                        <div class="col-3">van</div>
                        <div class="col-4">58-1234</div>
                        <div class="col-5"><button class="row-delete" onclick ="deletex()">Delete</button></div>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
    
    

    
</body>


</html>