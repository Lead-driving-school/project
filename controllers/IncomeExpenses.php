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


    function otherExpensesview(){
        
        $result=$this->model->getOtherExpenses();
        $data=$result;
        echo json_encode($data);
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