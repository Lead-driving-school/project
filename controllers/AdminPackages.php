<?php

class AdminPackages extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){

        $this->view->render('AdminPackages');
        // $this->model->printSomethis();
    }
}