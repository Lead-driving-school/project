<?php

class Report extends Controller{

    function __construct(){
        parent:: __construct();
    }

    function report(){
          $this->view->render('Report/reports');
    }

    function attendanceSession(){
        $this->view->render('Report/attendanceSession');
    }

    function attendanceStudent(){
        //gbutton remove
        $this->view->render('Report/attendanceStudent');
    }

    function attendanceGraphic(){
        
        $this->view->render('Report/attendence_sessions');
    }

    function examParticipationDay(){

        $this->view->render('Report/examParticipationDays');
    }

    function examParticipationStudents(){
        
        $this->view->render('Report/examParticipationStudents');
    }

    function examParticipationGraphic(){
        $this->view->render('Report/exam_participation');
    }

    function conductorParticipation(){
        $this->view->render('Report/ConductorParticipation');
    }
    function conductorGraphic(){
        $this->view->render('Report/conductorGraphic');
    }

    function customerGrowing(){
        $this->view->render('Report/customerGrowing');
    }
    function customerGraphic(){
        $this->view->render('Report/customerGraphic');
    }

    function sessionReport(){
        $this->view->render('Report/sessionReport');
    }

    function sessionGraphic(){
        $this->view->render('Report/sessionGraph');
    }
}

