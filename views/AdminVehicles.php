<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="layOut_common.css">
    <link rel="stylesheet" href="Screen_fit_ui.css">
    <link rel="stylesheet" href="popup.css">
    
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/Admin_tabel_Styling.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/tabStyling.css">
    <link  rel="stylesheet" href="<?php echo URL?>public/css/admin/layOut_common.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/Screen_fit_ui.css">
    <link  rel="stylesheet" href="<?php echo URL?>public/css/admin/popup.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/admin/buttons.css">
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
                deleting a package will permenently remove it from your system 
            </div>
            <div class="btn-container">
                <button onclick="cancel()">
                    No, keep package 
                </button >
                    
                <button onclick="yesDelete()">
                    Yes, Delete package
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
            <sidebar-component></sidebar-component>
            <div class="container-1">
                <div class="title-container">
                   Vehicles
                </div>

                <div class="add-new-search-container">
                    <button class="add-Employee">Add Employee</button>
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