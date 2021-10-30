<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL?>public/css/student/payments.css">
    <title>Payments</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="IMG-20210823-WA0007.jpg" alt="logo">
            </div>
        </div>
        <div class="main">
             <?php require_once APPROOT."/../views/common/StudentSidebar.php"; ?>
           
            <div class="view">
                <div class="profile">
                    <div class="pic">
                        <div class="pic-div-1">
                            <img src="<?php echo URL?>public/images/profpic.png" class="ppic" alt="profpic">
                        </div>
                        <div class="pic-div-2">
                            <h4>K.K Saman Perera</h4>
                        </div>
                    </div>
                    <div class="title">
                        <div class="ti-name">
                            <h1>Payments</h1>
                        </div>
                    </div>
                </div>
                <div class="summary">
                    <div class="paid">
                        <div class="paid-col-1">
                            <h3>Paid (LKR)</h3>
                            <h3>:</h3>
                        </div>
                        <div class="paid-col-2">
                            <div class="paid-val">18,500.00</div>
                        </div>
                    
                    </div>
                    <div class="remaining">
                        <div class="remaining-col-1">
                            <h3>Remaining (LKR)</h3>
                            <h3>:</h3>
                        </div>
                        <div class="remaining-col-2">
                            <div class="paid-val">7,000.00</div>
                        </div>
                    </div>

                </div>
                <div class="table-container">
                    <div class="table-part">
                        <div class="aaa">
                        <div class="table-tiltle">
                                <div class="cel-1">Date</div>
                                <div class="cel-2">Time</div>
                                <div class="cel-3">Method</div>
                                <div class="cel-4">Amount (LKR)</div>
                        </div>
                        </div>
    
                        <div class="table">

                            <div class="data">
                                <div class="row">
                                    <div class="col-1">2019/10/20</div>
                                    <div class="col-2">10.00</div>
                                    <div class="col-3">Cash</div>
                                    <div class="col-4">5000.00</div>
                                </div>

                                <div class="row">
                                    <div class="col-1">2019/11/01</div>
                                    <div class="col-2">10.20</div>
                                    <div class="col-3">Online</div>
                                    <div class="col-4">2000.00</div>
                                </div>

                                <div class="row">
                                    <div class="col-1">2019/11/22</div>
                                    <div class="col-2">20.02</div>
                                    <div class="col-3">Online</div>
                                    <div class="col-4">4500.00</div>
                                </div>
    
                            </div>
                        </div>
                    
                    </div>
                    <div class="button-part">
                      <a href="<?php echo URL?>Student/makepayments"> <button class="pay-online">Pay online</button> </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>