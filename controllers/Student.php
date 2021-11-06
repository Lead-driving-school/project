<?php

class Student extends Controller{

    function __construct(){
        parent:: __construct();
    }

    function index(){
        if($_SESSION['job_title']=='student'){
            if(isset($_SESSION['job_title'])){
                if($_SESSION['job_title']=='Receptionist'){
                    $this->view->render('Student/profile');
                }else{
                    $this->view->render('error');
                }
            }
            else{
                $this->view->render('error');
            }
            // redirect('Receptionist');
        }
    }

    function complaints(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Receptionist'){
                $this->view->render('Student/complaints');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }

    function complaintLogic($data){
        $value=explode(",",$data);
        $studentId=6;
        $this->model->setComplaints($value[0],$value[1],$studentId);

        // echo $value[0];
        // echo $value[1];
    }

    function reviewLogic($data){
        $value=explode(",",$data);
        $studentId=6;
        $this->model->setReview($value[0],$value[1],$value[2],$studentId);
        //methanin nawettuwe

    }
    function editprofile(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Receptionist'){
                $this->view->render('Student/editprofile');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }

    function makepayments(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Receptionist'){
                $this->view->render('Student/makepayments');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }

    function markGoingNotGoing(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Receptionist'){
                $this->view->render('Student/markGoingNotGoing');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }

    function payments(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Receptionist'){
                $this->view->render('Student/payments');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    function examDetails(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Receptionist'){
                $this->view->render('Student/examdetails');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }

    function requestexams(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Receptionist'){
                $this->view->render('Student/requestexam');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }

    function requestsession(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Receptionist'){
                $this->view->render('Student/requestsession');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }

    function review(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Receptionist'){
                $this->view->render('Student/review');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }


}