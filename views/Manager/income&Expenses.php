<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <?php require_once APPROOT."/../views/common/header.php"; ?>
        <!--this is the side bar content--> 
        
    </div>
    
    <!--body content of the page starts here-->
    <div class="main-container">
    <?php require_once APPROOT."/../views/common/ManagerSidebar.php"; ?>
    <?php require_once APPROOT."/../views/IncomeExpenses/income&ex.php"; ?>  
    </div>
</body>
</html>