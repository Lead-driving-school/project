<?php
    // session_start();
class Staff extends Controller{
    
    function __construct(){
        parent:: __construct();
    }
    function index(){
        
    }
    function signup(){
        $this->view->render('signup');
        
    }
    function signupLogic($data){
        $values = explode(",", $data);
        $result= $this->model->getOTP($values[0],$values[1]);

        echo $result;
        if($result==true){
            $_SESSION['nic']=$values[0];
        }
    }
    function signupPassword(){
        $this->view->render('signupPassword'); 
    }
    public function loginPage(){
        $this->view->render('Login');
    }

    function signupPasswordLogic($data){
        $values = explode(",", $data);
        if($values[0]==$values[1]){
            $this->model->setPassword($_SESSION['nic'],$values[0]);
            echo "completed";
        }
    }
    public function login($data){
        
        $user = explode(",", $data);
        $loginData = $this->model->login($user[0], $user[1]);
        if($loginData){
            // $_SESSION['userType'] = "Admin";
            $this->startSession($loginData);
        }   
    }

    public function startSession($loginData){
        $_SESSION['username'] = $loginData[0]['nic'];
        $_SESSION['job_title'] = $loginData[0]['job_title'];
        $_SESSION['employee_id'] = $loginData[0]['employee_id'];
        echo "success,".$_SESSION['job_title'].",";    
    }
    public function logout(){
        unset($_SESSION['username']);
        unset($_SESSION['job_title']);
        unset($_SESSION['employee_id']);
        session_destroy();
        redirect('/');
    }
    public function isLoggedIn(){
        if(isset($_SESSION['username'])){
            return true;
        } else {
            return false;
        }
    }
    public function forgotPassword(){
        $this->view->render('forgotPassword');
    }
    public function forgotPasswordLogic($data){
        $user = explode(",", $data);
        echo $user[0].'EMP';
    }
}