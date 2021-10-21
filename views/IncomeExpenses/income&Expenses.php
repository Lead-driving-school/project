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
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/main/header.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/main/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/IncomeExpenses/income&Expenses/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/main/Horizontaltab.css">
    <title>Income & Expenses</title>
</head>
<body>
    <div class="header">

        <img src="../image/IMG-20210823-WA0007.jpg" class="logo"alt="">
        <!--this is the side bar content--> 
        
    </div>
    
    <!--body content of the page starts here-->
    <div class="main-container">
    <?php require_once APPROOT."/../views/common/ManagerSidebar.php"; ?>
        <div class="container">
            <!--Header-->
            <h1>Income & Expenses</h1>
            <div class="Horizontal-tab">
                <div class="tabContainer">
                  <button class="page-change-button" onclick="changeFilter(event,'All')">Day</button>
                  <button class="page-change-button" onclick="changeFilter(event,'Ssessions')">Month</button>
                  <button class="page-change-button" onclick="changeFilter(event,'Exams')">Year</button>
                </div>
                <div class="date-container">
                    <Label for="date-container"class="date-label">Date</Label><input type="date" name="date" id="date">
                </div>
            </div>
            <div class="body-container">
                <div class="income-expense-box"> 
                    <div class="income-row">
                        <div class="name-field">Income</div>
                        <div class="value-field">15,000LKR</div>
                        <div class="view-more"><button id="viewIncome" name="viewIncome">View more</button></div>
                    </div>
                    <div class="expense-row">
                        <div class="name-field">Expenses</div>
                        <div class="value-field">10,000LKR</div>
                        <div class="view-more"><button id="viewExpenses" name="viewExpenses">View more</button></div>
                    </div>
                    <div class="profit-row">
                        <div class="name-field">Profit</div>
                        <div class="value-field">5,000LKR</div>
                        <div class="view-more"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>