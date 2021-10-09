<?php

class AdminEditPackages extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('AdminEditPackages');
        // $this->model->printSomethis();
    }

    
}