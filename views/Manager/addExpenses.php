<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/main/header.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/main/sidebar.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/main/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/addExpences/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/addExpences/bodyContainer.css">
    <script src="<?php echo URL?>public/js/manager/addExpenses.js"></script>
    <title>Expenses Recording</title>
</head>
<body>
    <div class="confirmation-box" id="confirmation">
        <div class="box-body">
            <div class="popup-content-box">
                <p>Are you sure about entered records?</p>
                <div class="manager-password-class">
                    <label for="manager-password">Password:</label>
                    <input class="manager-password" type="password" name="mngPassword" id="mngPassword" >
                </div>
                
                    <div class="popup-button-set">
                        <button class="popup-confirm" name="confirm" id="confirm" onclick="passwordCheck()">I'm sure</button>
                        <button class="popup-cancel" name="cancel" id="cancel" onclick="closeConfirm()">I have to recheck</button>   
                    </div>
            </div>
        </div>
    </div>
    <div class="header">

    <img src="../image/IMG-20210823-WA0007.jpg" class="logo"alt="">


    </div>

    <!--body content of the page starts here-->
    <div class="main-container">
    <?php require_once APPROOT."/../views/common/ManagerSidebar.php"; ?>
        <div class="all-container">
            <div class="container">
                
                <!--Header-->
                <h2>Add Expenses</h2>
                <div class="body-container">
                        <div class="form-part">
                                <div class="expense-name-class">
                                    <label for="Expense-name">Expense:</label>
                                    <input type="text" class="Expense-name-input" name="expense" id="expense" style="white-space: pre"> 
                                </div>
                                <div class="discription-class">
                                    <label for="Discription">Discription:<br>(optional)</label>
                                    <textarea class="Discription-input" name="discription" id="discription" style="white-space: pre"></textarea>
                                </div>
                                <div class="amount-class">
                                    <label for="Amount">Amount:</label>
                                    <input type="text" class="Amount-input" name="amount" id="amount"> 
                                </div>
                                <div class="confirm-class">
                                    <label for="Confirm-amount">Confirm:<br>amount</label>
                                    <input type="text" class="Confirm-amount-input" name="confirm-amount" id="Confirm-amount">
                                </div>
                                <div id="password-mismatch"></div>
                                <div class="button-set">
                                    <button class="cancel" name="cancel" id="cancel" onclick="cancel()">Cancel</button>
                                    <button class="submit-finish"  name="finish" id="finish" onclick="showConfirm()">Submit & finish</button>
                                    
                                </div>        
                        </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>