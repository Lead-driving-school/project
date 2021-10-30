<?php

class Report extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
    }
    function attendance(){
        $this->view->render('Report/attendence_sessions');
    }

    function examParticipation(){
        $this->view->render('Report/exam_participation');
    }

    function conductorGraphic(){
        $this->view->render('Report/conductorGraphic');
    }
    function customerGraphic(){
        $this->view->render('Report/customerGraphic');
    }

    function sessionGraphic(){
        $this->view->render('Report/sessionGraph');
    }
}

