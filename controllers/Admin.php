<?php

class Admin extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){
        
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
}