<?php

class User_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }

    function getOTP($nic,$otpcode){
        $result=$this->db->runQuery("SELECT passwordhash FROM employee Where nic LIKE '$nic'");
        if(empty($result)){
            return false;
        }
        if($otpcode==$result[0]['passwordhash']){
            return true;
        }else {
            return false;
        }
    }
    function setPassword($password,$nic){
        $result=$this->db->runQuery("UPDATE employee SET passwordhash=$password WHERE nic ='$nic'");
        
    }
    
}