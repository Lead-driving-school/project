<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="<?php echo URL?>public/css/IncomeExpenses/incomeGraphic/structure.css">
    <title>Expenses charts</title>
</head>
<body>
    <div class="body-container">
        <div class="heading"><h1>Expenses</h1></div>
        <div class="selectors">
            <div class="method-selector">
                <label for="method-selector-button" class="method-selector-label" >Select method:</label>
                <select class="method-selector-select" name="method-selector" id="methodSelector" onclick="inputSelector()">
                    
                    
                </select>
            </div>
            <div class="date-selector" id="dateSelector">

            </div>
            <div class="go-button-container">
                <button class="go-button" id="go" onclick="loadGraph()">Go</button>
            </div>
        </div>
        
        <div class="chart-n-values">
            <div class="income-chart">
                <canvas  id="expenseChart"></canvas>
            </div>
            <div class="containers">
                <div class="container1">
                    <div class="max-container">
                        <div class="topic"><h2>Maximum Total Expenses</h2></div>
                        <div class="details"><div class="day"><h3>Thursday</h3></div><div class="amount"><h3>10000.00</h3></div></div>
                        <div class="details"><div class="day"><h3>Friday</h3></div><div class="amount"><h3>10000.00</h3></div></div>
                    </div>
                    <div class="min-container">
                        <div class="topic"><h2>Minimum Total Expenses</h2></div>
                        <div class="details"><div class="day"><h3>Saturday</h3></div><div class="amount"><h3>3000.00</h3></div></div>
                        
                    </div>
                </div>
                <div class="container2">
                    <div class="max-container">
                        <div class="topic"><h2>Expenses Average</h2></div>
                        <div class="details"><div class="amount"><h3>6642.85</h3></div></div>
                    </div>
                    <div class="min-container">
                        <div class="topic"><h2>No of Expenses captured</h2></div>
                        <div class="details"><div class="amount"><h3>43</h3></div></div> 
                    </div>
                </div>
                <div class="container3">
                    <div class="max-container">
                        <div class="topic"><h2>Maximum No of Expenses</h2></div>
                        <div class="details"><div class="day"><h3>Thursday</h3></div><div class="amount"><h3>19</h3></div></div>
                    </div>
                    <div class="min-container">
                        <div class="topic"><h2>Minimum No of payments</h2></div>
                        <div class="details"><div class="day"><h3>Saturday</h3></div><div class="amount"><h3>2</h3></div></div>
                    </div>
                </div>
                <div class="container4">
                    <div class="max-container">
                        <div class="topic"><h2>Total Initial Expenses</h2></div>
                        <div class="details"><div class="amount"><h3>2000.00</h3></div></div>
                    </div>
                    <div class="min-container">
                        <div class="topic"><h2>Total Other Expenses</h2></div>
                        <div class="details"><div class="amount"><h3>5300.00</h3></div></div>
                    </div>
                </div>
            </div>
            
           
        </div>
        <div class="button-set">
            <a href="<?php echo URL?>IncomeExpenses/studentExpenses"><button class="back-button" id="back" name="back">Back</button></a>
        </div>
    </div>
    
    <script src="<?php echo URL?>public/js/IncomeExpenses/ExpenseGraphScript.js"></script>
    

</body>
</html>