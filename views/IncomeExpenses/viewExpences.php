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
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/main/sidebar.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/main/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/main/Horizontaltab.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/IncomeExpenses/viewExpences&income/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/IncomeExpenses/viewExpences&income/tableStyle.css">
    <title>Expences</title>
</head>
<body>
    <div class="header">

        <img src="../image/IMG-20210823-WA0007.jpg" class="logo"alt="">
        <!--this is the side bar content--> 
    </div>
    
    <!--body content of the page starts here-->
    <div class="main-container">
        
        <div class="container">
            <!--Header-->
            <h1>Expences</h1>
            <div class="tabs">
                <div class="Horizontal-tab">
                    <div class="tabContainer">
                    <button class="page-change-button" onclick="changeFilter(event,'All')">All</button>
                    <button class="page-change-button" onclick="changeFilter(event,'Ssessions')">Expenses of Students</button>
                    <button class="page-change-button" onclick="changeFilter(event,'Exams')">Other Expenses</button>
                    </div>
                    
                </div>
            </div>
            
            <div class="heading">
                <div class="heading-row">
                    <div class="cell">
                    <div class="headingDetails">
                        <div class="one">Expense ID</div>
                        <div class="two">Expense</div>
                        <div class="three">Accepted Manager</div>
                        <div class="four">Date</div>
                        <div class="five">Time</div>
                        <div class="six">Amount</div>
                    </div>
                    </div>
                </div>
            </div>
            <div id = "tablerows" class="table" onload="loadTable()">
                
            </div>
            <div class="button-container">
                <button class="income-graph-button" id="incomeGraph" name="incomeGraph">Graphical view</button>
                <button class="back-button" id="back" name="back">Back</button>
            </div>
        </div>
    </div>
    <script src="<?php echo URL?>public/js/IncomeExpenses/viewExpenses.js"></script>
</body>
</html>