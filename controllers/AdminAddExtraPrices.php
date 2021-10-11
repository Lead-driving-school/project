<?php

class AdminAddExtraPrices extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('AdminAddExtraPrices');
        // $this->model->printSomethis();
    }

    
}