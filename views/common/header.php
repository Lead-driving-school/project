<link rel="stylesheet" href="<?php echo URL?>public/css/common/header.css">
<div class="abc-header">
        <div class="header-container">
            <div class="sidebar-button">
                
            </div>
            <div class="header-logo">
            <img src="<?php echo URL?>public/images/logo.png" alt="">
            </div>
            <div class="header-com-name">
                <h1></h1>
            </div>
            
               <div class="username"><?php echo isset($_SESSION['name'])?$_SESSION['name']:"";?></div> 
               
            <div class="header-profile">
                <img src="<?php echo URL?>public/images/profpic.png" alt="">
            </div>
        </div>
</div>