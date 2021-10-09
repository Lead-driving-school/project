<?php

class AdminAddVehicle extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('AdminAddVehicle');
        // $this->model->printSomethis();
    }

    
}