<?php

class AdminStudentAccounts extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('AdminStudentAccounts');
        // $this->model->printSomethis();
    }

    
}