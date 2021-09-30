<?php

class AdminExpences extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){

        $this->view->render('AdminExpences');
        // $this->model->printSomethis();
    }
}