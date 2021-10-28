<?php

class Receptionist extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('receptionist/profile');
    }
    function payments(){
        $this->view->render('receptionist/payments');
    }
    function addResult(){
        $this->view->render('receptionist/addResult');
    }
    function eventCalendar(){
        $this->view->render('receptionist/eventCalendar');
    }
    function profile(){
        $this->view->render('receptionist/profile');
    }
    function registration(){
        $this->view->render('receptionist/registration');
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
        $receptionistId=2;
        $result=$this->model->addInitExpenses($values[0],$vehicleCLasses,$receptionistId);
        $result=$this->model->assignPackages($values[0],$packageId,$receptionistId);
        $result=$this->model->assginVehicleClasses($values[0],$classArray);
        
    }

    function sessions(){
        $this->view->render('receptionist/sessions');
    }
    function studentList(){
        $this->view->render('receptionist/studentList');
    }    
}