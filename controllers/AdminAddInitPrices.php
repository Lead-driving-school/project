<?php

class AdminAddInitPrices extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('AdminAddInitPrices');
        // $this->model->printSomethis();
    }

    
}