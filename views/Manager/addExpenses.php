<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL?>public/css/main/header.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/main/sidebar.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/main/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/addExpences/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/addExpences/bodyContainer.css">
    <title>Expenses Recording</title>
</head>
<body>
    <div class="header">

        <img src="../image/IMG-20210823-WA0007.jpg" class="logo"alt="">
       
        
    </div>
    
    <!--body content of the page starts here-->
    <div class="main-container">
         <!--this is the side bar content--> 
        <div class="sidebar" id="sidebar">
            <div class="elements"><a href="#">Profile</a></div>
            <div class="elements"><a href="#">Event Calendar</a></div>
            <div class="elements"><a href="#">Requests</a></div>
            <div class="elements"><a href="#">List Of Students</a></div>  
            <div class="elements"><a href="#">Income & Expences</a></div>
            <div class="elements"><a href="#">View Reports</a></div>
            <div class="elements"><a href="#">Expense Recording</a></div>
            <div class="elements"><a href="#">Log out</a></div>
        </div>
        <div class="container">
            <!--Header-->
            <h2>Add Expenses</h2>
            <div class="body-container">
                <div class="form-part">
                    <div class="label-field">
                        <label for="Expense-name">Expense:</label>
                        <label for="Discription">Discription:<br>(optional)</label>
                        <label for="Amount">Amount:</label>
                        <label for="Confirm-amount">Confirm:<br>amount</label>
                    </div>
                    <div class="input-field">
                        <input type="text" class="Expense-name-input" name="expense" id="expense"> 
                        <textarea class="Discription-input" name="discription" id="discription"></textarea>
                        <input type="text" class="Amount-input" name="amount" id="amount"> 
                        <input type="text" class="Confirm-amount-input" name="confirm-amount" id="Confirm-amount"> 
                    </div>
                </div>
                
                <div class="button-set">
                    <button class="submit-next" name="next" id="next">Submit & finish</button>
                    <button class="submit-finish" name="finish" id="finish">Submit & next</button>
                    <button class="cancel" name="cancel" id="cancel">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>