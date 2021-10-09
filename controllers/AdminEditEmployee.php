<?php

class AdminEditEmployee extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('AdminEditEmployee');
        // $this->model->printSomethis();
    }

    
}