<?php

class Instructor extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('Conductor/profile');
    }
    function eventCalendar(){
        $this->view->render('Conductor/eventCalendar');
    }
    function markAttendance(){
        $this->view->render('Conductor/markAttendance');
    }
    function sessions(){
        $this->view->render('Conductor/markGoingNotGoing');
    }
    function viewExam(){
        $this->view->render('Conductor/viewExam');
    }
    function viewSession(){
        $this->view->render('Conductor/viewSession');
    }
    function viewStudent(){
        $this->view->render('Conductor/viewStudent');
    }
    function viewStudentS(){
        $this->view->render('Conductor/viewStudentS');
    }
    function viewInstructor(){
        $this->view->render('Conductor/viewInstructor');
    }
    function viewInstructorS(){
        $this->view->render('Conductor/viewInstructorS');
    }
    function viewVehicle(){
        $this->view->render('Conductor/viewVehicle');
    }
    function viewVehicleS(){
        $this->view->render('Conductor/viewVehicleS');
    }
}