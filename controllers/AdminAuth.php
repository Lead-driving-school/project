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
        echo "success,";    
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