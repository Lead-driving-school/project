<?php

class Admin extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('Admin/AdminStaff');
    }

    function addEmployee(){
        $this->view->render('Admin/AdminAddEmployee');
    }

    function addExtraPrices(){
        $this->view->render('Admin/AdminAddExtraPrices');
    }

    function addInitPrices(){
        $this->view->render('Admin/AdminAddInitPrices');
    }

    function addPackage(){
        $this->view->render('Admin/AdminAddPackage');
    }

    function editEmployee(){
        $this->view->render('Admin/AdminEditEmployee');
    }
    
    function editPackages(){
        $this->view->render('Admin/AdminEditPackages');
    }

    function employeeAccounts(){
        $this->view->render('Admin/AdminEmployeeAccounts');
    }

    function employeeDetails(){
        $this->view->render('Admin/AdminEmployeeDetails');
    }

    function packages(){
        $this->view->render('Admin/AdminPackages');
    }

    function initExpences(){
        $this->view->render('Admin/AdminInitExpences');
    }

    function staff(){
        $this->view->render('Admin/AdminStaff');
    }

    function studentAccounts(){
        $this->view->render('Admin/AdminStudentAccounts');
    }

    function vehicles(){
        $this->view->render('Admin/AdminVehicles');
    }

    function viewMoreEmployee(){
        $this->view->render('Admin/AdminViewMoreEmployee');
    }

    function addVehicle(){
        $this->view->render('Admin/AdminAddVehicle');
    }

    function viewComlain(){
        $this->view->render('Admin/AdminViewComplain');
    }

    function viewReview(){
        $this->view->render('Admin/AdminViewReview');
    }

    

    function registerEmployee($data){
        $user = explode(",", $data);
        $result=$this->model->registerEmployee($user[0], $user[1], $user[2], $user[3], $user[4], $user[5], $user[6], $user[7]);
        echo $result;
    }

    function getEmployeeDetails(){
        $result=$this->model->getEmployeeDetails();
        echo json_encode($result);
    }

    function getEmployeeDetailsMore($id){
        $result=$this->model->getEmployeeDetailsMore($id);
        echo json_encode($result);
    }
}