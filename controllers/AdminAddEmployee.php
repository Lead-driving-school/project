<?php

class AdminAddEmployee extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('AdminAddEmployee');
        // $this->model->printSomethis();
    }

    
}