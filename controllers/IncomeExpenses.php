<?php

class IncomeExpenses extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager' || $_SESSION['job_title']=='Admin'){
                $this->view->render('IncomeExpenses/income&Expenses');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
        
    function viewExpenses(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager' || $_SESSION['job_title']=='Admin'){
                $this->view->render('IncomeExpenses/viewExpences');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    function studentExpenses(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager' || $_SESSION['job_title']=='Admin'){
                $this->view->render('IncomeExpenses/viewExpenses-Student');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }


    function otherExpensesview(){
        
        $result=$this->model->getOtherExpenses();
        $data=$result;
        echo json_encode($data);
    }


    function viewIncome(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager' || $_SESSION['job_title']=='Admin'){
                $this->view->render('IncomeExpenses/viewIncome');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    function incomeGraphic(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager' || $_SESSION['job_title']=='Admin'){
                $this->view->render('IncomeExpenses/incomeGraphic');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    function expenseGraphic(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager' || $_SESSION['job_title']=='Admin'){
                $this->view->render('IncomeExpenses/expensesGraphic');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    function getStudentExpenses(){
        $result=$this->model->getStudentExpenses();
        echo json_encode($result);
    }
    function acceptExpense($studentId){
        $result=$this->model->acceptExpense($studentId);
        echo $result;
    }
}