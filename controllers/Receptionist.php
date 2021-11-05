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

        $result=$this->model->getVehicleClasses($values[0],$values[1],$values[2],$values[3],$values[4]);
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
        $result=$this->model->addMedicalDetails($values[0],$values[15],$values[16]);
        echo "nic:".$values[0]." addres:".$values[1]." gender:".$values[2]." dateofBIrth:".$values[3]. " contact:".$values[4]."  init:".$values[5]."  pack:".$values[6]." district:".$values[7]." city:".$values[8]." divsec:".$values[9]." police:".$values[10]." occupation:".$values[11]." type:".$values[12]." initName:".$values[13]." fullName:".$values[14]." medicalNo:".$values[15]." issuedDate:".$values[16];
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
    
    function getStudentDetails(){
        $result=$this->model->getStudentDetails();
        echo json_encode($result);
    }

    function getEmployeeDetailsMore($id){
        $result=$this->model->getEmployeeDetailsMore($id);
        // echo "hi";
        echo json_encode($result);
    }
    function viewExam(){
        $this->view->render('Receptionist/viewExam');
    }
    function viewSession(){
        $this->view->render('Receptionist/viewSession');
    }
    function viewStudent(){
        $this->view->render('Receptionist/viewStudent');
    }
    function viewStudentS(){
        $this->view->render('Receptionist/viewStudentS');
    }
    function viewInstructor(){
        $this->view->render('Receptionist/viewInstructor');
    }
    function viewInstructorS(){
        $this->view->render('Receptionist/viewInstructorS');
    }
    function viewVehicle(){
        $this->view->render('Receptionist/viewVehicle');
    }
    function viewVehicleS(){
        $this->view->render('Receptionist/viewVehicleS');
    }
}