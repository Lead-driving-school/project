<?php

class AdminEmployeeDetails extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('AdminEmployeeDetails');
        // $this->model->printSomethis();
    }

    
}