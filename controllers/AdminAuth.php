<?php
class AdminAuth extends Controller{
    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('adminLogin');
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
        $_SESSION['username'] = $loginData[0]['username'];
        $_SESSION['job_title'] = "Admin";
        echo "success,";    
    }
    public function logout(){
        unset($_SESSION['username']);
        unset($_SESSION['job_title']);
        session_destroy();
        redirect('AdminAuth');
    }
    public function isLoggedIn(){
        if(isset($_SESSION['username'])){
            return true;
        } else {
            return false;
        }
    }
}