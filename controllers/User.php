<?php
class User extends Controller{
    function __construct(){
        parent:: __construct();
    }
    function index(){
        
    }
    function signup(){
        $this->view->render('studentSignup');
        
    }
    public function loginPage(){
        $this->view->render('studentLogin');
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
        $this->view->render('studentSignupPassword'); 
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
            echo "success,";
            // $this->startSession($loginData);
        }   
    }

    
    public function startSession($loginData){
        $_SESSION['username'] = $loginData[0]['NIC'];
        $_SESSION['student']='student';
        echo "success,";    
    }
    public function logout(){
        unset($_SESSION['student']);
        unset($_SESSION['username']);
        session_destroy();
        redirect('/');
    }
    public function isLoggedIn(){
        if(isset($_SESSION['user_id'])){
            return true;
        } else {
            return false;
        }
    }

    public function forgotPassword(){
        $this->view->render('Student/forgotPassword');
    }

    public function forgotPasswordLogic($data){
        $user = explode(",", $data);
        echo $user[0]."student";
    }
}