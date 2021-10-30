<?php

class Admin extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/profile');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    
    function incomeExpenses(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/income&Expenses');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function addEmployee(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminAddEmployee');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function addExtraPrices(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminAddExtraPrices');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function addInitPrices(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminAddInitPrices');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function addPackage(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminAddPackage');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function editEmployee(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminEditEmployee');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }
    
    function editPackages(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminEditPackages');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function employeeAccounts(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminEmployeeAccounts');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function employeeDetails(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminEmployeeDetails');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function packages(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminPackages');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function initExpences(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminInitExpences');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function staff(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminStaff');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function studentAccounts(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminStudentAccounts');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function vehicles(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminVehicles');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function viewMoreEmployee(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminViewMoreEmployee');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function addVehicle(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminAddVehicle');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function viewComlain(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminViewComplain');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }
    function complaintLogic(){
        $value=$this->model->getcomplaints();
        echo json_encode($value);
    }

    function viewReview(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/AdminViewReview');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }
    function reviewLogic(){
        $value=$this->model->getreviews();
        echo json_encode($value);
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