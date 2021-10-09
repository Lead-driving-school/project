<?php

class AdminEmployeeAccounts extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('AdminEmployeeAccounts');
        // $this->model->printSomethis();
    }

    
}