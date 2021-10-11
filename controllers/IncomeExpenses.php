<?php

class IncomeExpenses extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('IncomeExpenses/income&Expenses');
    }
    function viewExpenses(){
        $this->view->render('IncomeExpenses/viewExpences');
    }
    function viewIncome(){
        $this->view->render('IncomeExpenses/viewIncome');
    }
    function incomeGraphic(){
        $this->view->render('IncomeExpenses/incomeGraphic');
    }
    function expensesGraphic(){
        $this->view->render('IncomeExpenses/expensesGraphic');
    }
}