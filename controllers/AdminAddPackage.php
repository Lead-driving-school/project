<?php

class AdminAddPackage extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('AdminAddPackage');
        // $this->model->printSomethis();
    }

    
}