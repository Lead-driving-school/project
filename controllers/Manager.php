<?php
// session_start();

class Manager extends Controller{
    
    function __construct(){
        parent:: __construct();
    }
    function index(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/profile');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    function utilityExpenses(){
        $cost=$this->model->utilityExpenses();
        echo json_encode($cost);
    }
    function addExam(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/addExam');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    function addExpenses(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/addExpenses');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }

    function addExpensesLogic($data){
        $values = explode(",", $data);

        $managerId=$_SESSION['employee_id'];
        $result=$this->model->setExpenses($values[0],$values[1],doubleval($values[2]),$managerId);
        echo "inserted";
    }
    
    function validate($password){
        // echo $password;
        $managerId=$_SESSION['employee_id'];
        $result=$this->model->checkPassword($managerId,$password);
        if($result==true){
            echo "success";
        }
    }

    function addInstructor($type,$date,$time){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $_SESSION['type']=$type;
                $_SESSION['date']=$date;
                $_SESSION['time']=$time;
                $this->view->render('Manager/addInstructor');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }
    function addInstructorS($type,$title,$date,$time){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $_SESSION['type']=$type;
                $_SESSION['title']=$title;
                $_SESSION['date']=$date;
                $_SESSION['time']=$time;
                $this->view->render('Manager/addInstructorS');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }

    function addSession(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/addSession');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }
    
    function addStudent(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/addStudent');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function addStudentS(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/addStudentS');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }

    function addVehicle($type,$date,$time){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $_SESSION['type']=$type;
                $_SESSION['date']=$date;
                $_SESSION['time']=$time;
                $this->view->render('Manager/addVehicle');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }

    function addVehicleS($type,$title,$date,$time){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $_SESSION['type']=$type;
                $_SESSION['title']=$title;
                $_SESSION['date']=$date;
                $_SESSION['time']=$time;
                $this->view->render('Manager/addVehicleS');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }


    function changeInstructor(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/changeInstructor');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }

        
    }
    function changeStudent(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/changeStudent');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    function changeVehicle(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/changeVehicle');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }

    function changeInstructorS(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/changeInstructorS');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    function changeStudentS(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/changeStudentS');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }
    function changeVehicleS(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/changeVehicleS');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
        
    }
    function editExam(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/editExam');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }

    function editSession(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/editSession');
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
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/studentList');
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
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/eventCalendar');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    function request(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/request');
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
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/payments');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }
    function incomeExpenses(){
        if(isset($_SESSION['job_title'])){
            if($_SESSION['job_title']=='Manager'){
                $this->view->render('Manager/income&Expenses');
            }else if($_SESSION['job_title']=='Admin'){
                $this->view->render('Admin/income&Expenses');
            }else{
                $this->view->render('error');
            }
        }
        else{
            $this->view->render('error');
        }
    }


    function addVehiclesForSessions(){
        $result=$this->model->getVehiclesForSessions();
        echo json_encode($result);
    }

    function addInstructorsForSessions(){
        $result=$this->model->getInstructorsForSessions($_SESSION['type']);
        echo json_encode($result);
    }

    function addVehiclesForExams(){
        $result=$this->model->getVehiclesForExams();
        echo json_encode($result);
    }

    function addInstructorsForExams(){
        $result=$this->model->getInstructorsForExams();
        echo json_encode($result);
    }

    function selectedInstructorsForSessions($selectedList){
        $_SESSION['selectedInstructorList']=$selectedList;
        echo "saved";
    }
    
    function selectedVehiclesForSessions($selectedList){
        $_SESSION['selectedVehicleList']=$selectedList;
        echo "saved";
    }
    function addSessionLogic($data){
        $result=$this->model->addSession($data,$_SESSION['selectedInstructorList'],$_SESSION['selectedVehicleList'],$_SESSION['employee_id']);
        $_SESSION['type']="noValue";
        $_SESSION['title']="";
        $_SESSION['date']="";
        $_SESSION['time']="";
        $_SESSION['selectedInstructorList']="";
        $_SESSION['selectedVehicleList']="";
        echo $result;
    }

    function selectedInstructorsForExams($selectedList){
        $_SESSION['selectedInstructorList']=$selectedList;
        echo "saved";
    }
    
    function selectedVehiclesForExams($selectedList){
        $_SESSION['selectedVehicleList']=$selectedList;
        echo "saved";
    }
    function addExamLogic($data){
        $result=$this->model->addExam($data,$_SESSION['selectedInstructorList'],$_SESSION['selectedVehicleList'],$_SESSION['employee_id']);
        $_SESSION['type']="noValue";
        
        $_SESSION['date']="";
        $_SESSION['time']="";
        $_SESSION['selectedInstructorList']="";
        $_SESSION['selectedVehicleList']="";
        echo $result;
    }
}