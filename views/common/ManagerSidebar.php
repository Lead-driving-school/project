<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo URL?>public/css/common/sidebar.css"> 
<div class="sidebar"  id="sidebar">
    <div class="nav-list">
        <a href="#" class="list-item">
            <div class="link-icon">
            &#xf2bd
            </div>
            <div class="link-name">
            Profile
            </div>
        </a>
        <a href="<?php echo URL?>Manager/eventCalendar" class="<?php echo (getLink()=="http://localhost/project/Manager/eventCalendar")?"list-item-active":"list-item";?>" >
            <div class="link-icon">
            &#xf2bd
            </div>
            <div class="link-name">
            Event Calendar
            </div>
        </a>
        <a href="<?php echo URL?>Manager/request" class="<?php echo (getLink()=="http://localhost/project/Manager/request")?"list-item-active":"list-item";?>" >
            <div class="link-icon">
            &#xf2bd
            </div>
            <div class="link-name">
            Requests
            </div>
        </a>
        <a href="#" class="list-item">
            <div class="link-icon">
            &#xf2bd
            </div>
            <div class="link-name">
            List Of Students
            </div>
        </a>
        <a href="<?php echo URL?>IncomeExpenses" class="<?php echo (getLink()=="http://localhost/project/IncomeExpenses")?"list-item-active":"list-item";?>">
            <div class="link-icon">
            &#xf2bd
            </div>
            <div class="link-name">
            Income & Expences
            </div>
        </a>
        <a href="#" class="list-item">
            <div class="link-icon">
            &#xf2bd
            </div>
            <div class="link-name">
            View Reports
            </div>
        </a>
        <a href="<?php echo URL?>Manager/addExpenses" class="<?php echo (getLink()=="http://localhost/project/Manager/addExpenses")?"list-item-active":"list-item";?>">
            <div class="link-icon">
            &#xf2bd
            </div>
            <div class="link-name">
            Expense Recording
            </div>
        </a>
        <a href="#" class="list-item">
            <div class="link-icon">
            &#xf2bd
            </div>
            <div class="link-name">
            Log out
            </div>
        </a>
    </div>
    
</div>
