<?php

class Receptionist extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Receptionist'){
                $this->view->render('receptionist/profile');
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
                $this->view->render('receptionist/payments');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    function addResult(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Receptionist'){
                $this->view->render('receptionist/addResult');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    function eventCalendar(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Receptionist'){
                $this->view->render('receptionist/eventCalendar');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    
    function registration(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Receptionist'){
                $this->view->render('receptionist/registration');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    function vehicleClassSelection($data){
        
        $values = explode(",", $data);

        $result=$this->model->getVehicleClasses($values[0],$values[1],$values[2],$values[3]);
        echo $result;
    }
    function packageSelection(){
        $result=$this->model->getPackages();
        $data=$result;
        echo json_encode($data);
    }
    function registerForWritten($data,$vehicleCLasses,$packageId,$classArray){
        $values = explode(",", $data);
        // echo $packageId;
        $result=$this->model->addStudent($values[0],$values[1],$values[2],$values[3],$values[4],$values[5],$values[6],$values[7],$values[8],$values[9],$values[10],$values[11],$values[12],$values[13],$values[14]);
        // echo json_encode($result);
        $receptionistId=$_SESSION['employee_id'];
        $result=$this->model->addInitExpenses($values[0],$vehicleCLasses,$receptionistId);
        $result=$this->model->assignPackages($values[0],$packageId,$receptionistId);
        $result=$this->model->assginVehicleClasses($values[0],$classArray);
        
    }

    function sessions(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Receptionist'){
                $this->view->render('receptionist/sessions');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    function studentList(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Receptionist'){
                $this->view->render('receptionist/studentList');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }    
}