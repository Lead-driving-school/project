<?php

class AdminViewMoreEmployee extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('AdminViewMoreEmployee');
        // $this->model->printSomethis();
    }

    
}