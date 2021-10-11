<?php
class Manager extends Controller{
    function __construct(){
        parent:: __construct();
    }
    function index(){
        
    }
    function addExam(){
        $this->view->render('Manager/addExam');
    }
    function addExpenses(){
        $this->view->render('Manager/addExpenses');
    }
    function addInstructor(){
        $this->view->render('Manager/addInstructor');
    }
    function addSession(){
        $this->view->render('Manager/addSession');
    }
    function addStudent(){
        $this->view->render('Manager/addStudent');
    }
    function addVehicle(){
        $this->view->render('Manager/addVehicle');
    }
    function changeInstructor(){
        $this->view->render('Manager/changeInstructor');
    }
    function changeStudent(){
        $this->view->render('Manager/changeStudent');
    }
    function changeVehicle(){
        $this->view->render('Manager/changeVehicle');
    }
    function editExam(){
        $this->view->render('Manager/editExam');
    }
    function editSession(){
        $this->view->render('Manager/editSession');
    }
    function eventCalendar(){
        $this->view->render('Manager/eventCalendar');
    }
    function request(){
        $this->view->render('Manager/request');
    }
}