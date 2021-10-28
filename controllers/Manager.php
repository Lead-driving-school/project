<?php
class Manager extends Controller{
    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('Manager/profile');
    }
    function addExam(){
        $this->view->render('Manager/addExam');
    }
    function addExpenses(){
        $this->view->render('Manager/addExpenses');
    }

    function addExpensesLogic($data){
        $values = explode(",", $data);

        $managerId=1;
        $result=$this->model->setExpenses($values[0],$values[1],doubleval($values[2]),$managerId);
        echo "inserted";
    }
    
    function validate($password){
        // echo $password;
        $managerId=1;
        $result=$this->model->checkPassword($managerId,$password);
        if($result==true){
            echo "success";
        }
    }

    function addInstructor(){
        $this->view->render('Manager/addInstructor');
    }

    function addInstructorS(){
        $this->view->render('Manager/addInstructorS');
    }

    function addSession(){
        $this->view->render('Manager/addSession');
    }
    
    function addStudent(){
        $this->view->render('Manager/addStudent');
    }

    function addStudentS(){
        $this->view->render('Manager/addStudentS');
    }

    function addVehicle(){
        $this->view->render('Manager/addVehicle');
    }

    function addVehicleS(){
        $this->view->render('Manager/addVehicleS');
    }

    function changeInstructor(){
        $this->view->render('Manager/changeInstructor');
    }
    function changeStudent(){
        $this->view->render('Manager/changeStudent');
    }
    function changeVehicle(){
        $this->view->render('Manager/changeVehicle');
    }

    function changeInstructorS(){
        $this->view->render('Manager/changeInstructorS');
    }
    function changeStudentS(){
        $this->view->render('Manager/changeStudentS');
    }
    function changeVehicleS(){
        $this->view->render('Manager/changeVehicleS');
    }

    function editExam(){
        $this->view->render('Manager/editExam');
    }
    function editSession(){
        $this->view->render('Manager/editSession');
    }
    function studentList(){
        $this->view->render('Manager/studentList');
    }
    function eventCalendar(){
        $this->view->render('Manager/eventCalendar');
    }
    function request(){
        $this->view->render('Manager/request');
    }
}