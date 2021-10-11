<?php
session_start();
class User extends Controller{

    function __construct(){
        parent:: __construct();
    }
    
    function index(){
        //session_start();
    }
    function signup(){
        $this->view->render('signup');
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['sent'])){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $formData = [
                    'nic' => trim($_POST['nic']),
                    'otpcode' => trim($_POST['otpcode'])
                ];
                $_SESSION["nic"]=$formData['nic'];
                if($this->model->getOTP($formData['nic'],$formData['otpcode'])){
                    redirect('User/signupPassword');
                }
            }
            
        }
    }
    function signupPassword(){
        $this->view->render('signupPassword');
       //echo $_SESSION["nic"];
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['confirm'])){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $formData = [
                    'password' => trim($_POST['enterPassword']),
                    'confirmPassword' => trim($_POST['confirmPassword'])
                ];
                if($formData['password']==$formData['confirmPassword']){
                    $this->model->setPassword($formData['passoword'],$_SESSION["nic"]);
                    redirect('ViewExpenses');
                }
            } 
       } 
    }
}