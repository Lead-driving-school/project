<?php

class Student extends Controller{

    function __construct(){
        parent:: __construct();
    }

    function index(){
    
    }

    function complaints(){

        $this->view->render('Student/complaints');
    
    }

    function complaintLogic($data){
        $value=explode(",",$data);
        $studentId=1;
        $this->model->setComplaints($value[0],$value[1],$studentId);

        // echo $value[0];
        // echo $value[1];
    }

    function reviewLogic($data){
        $value=explode(",",$data);
        $studentId=1;
        $this->model->setReview($value[0],$value[1],$value[2],$studentId);
        //methanin nawettuwe

    }



    function editprofile(){
        $this->view->render('Student/editprofile');
    }

    function makepayments(){
        $this->view->render('Student/makepayments');
    }

    function markGoingNotGoing(){
        $this->view->render('Student/markGoingNotGoing');
    }

    function payments(){
        $this->view->render('Student/payments');
    }

    function profile(){
        $this->view->render('Student/profile');
    }
    function examDetails(){
        $this->view->render('Student/examdetails');
    }

    function requestexams(){
        $this->view->render('Student/requestexam');
    }

    function requestsession(){
        $this->view->render('Student/requestsession');
    }

    function review(){
        $this->view->render('Student/review');
    }


}