<?php
class Student extends Controller{
    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('landingPage');
    }
}