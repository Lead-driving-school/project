<?php
session_start();
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
            $_SESSION['userType'] = "Admin";
            echo "success,".$_SESSION['userType'].",";
            $this->startSession($loginData);
        }   
    }

    public function startSession($loginData){
        $_SESSION['username'] = $loginData[0]['nic'];
        $_SESSION['job_title'] = $loginData[0]['job_title'];    
    }
    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('login');
    }
    public function isLoggedIn(){
        if(isset($_SESSION['user_id'])){
            return true;
        } else {
            return false;
        }
    }
}