<?php

class Login extends Controller{

    function __construct(){
        parent:: __construct();
    }
    function index(){

        
        $invalid='';
        
        // $this->model->printSomethis();
        if(isset($_POST['submit'])){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $user = ['username'=> trim($_POST['username']),'password' => trim($_POST['password'])];
                $loginData = $this->model->login($user['username'], $user['password']);
                // _startSession($loginData);
                if($loginData){
                    $this->view->render("AdminPackages",$invalid);
                }
                else{
                    $invalid="-true";
                    $this->view->render('Login',$invalid); 
                    
                }
            }  
        }
        else{
            $this->view->render('Login',$invalid);
        }
        
    }

    // public function _startSession($loginData){
    //     $_SESSION['username'] = $loginData[0]['username'];
    //     $_SESSION['userType'] = $loginData[0]['userType'];
    //     redirect($_SESSION['userType']);       
    // }

    // private function redirect($_SESSION){
    //     if($_SESSION['userType']=='Admin'){
    //         $this->view->render("AdminPackages");
    //     }
    //     else{
    //         $this->view->render("AdminPackages");
    //     }
    // }

    
        
    
}


