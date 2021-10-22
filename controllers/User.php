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
}