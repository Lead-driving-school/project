<?php

class Staff_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }

    function getOTP($nic,$otpcode){
        
        $result=$this->db->runQuery("SELECT employee_private.otp FROM employee_private INNER JOIN employee on employee.employee_id=employee_private.employee_id Where employee.nic = '$nic'");
        if(empty($result)){
            return false;
        }
        if($otpcode==$result[0]['otp']){
            return true;
        }else {
            return false;
        }
    }
    function setPassword($nic,$password){
        
        $result=$this->db->runQuery("UPDATE employee_private INNER JOIN employee on employee.employee_id = employee_private.employee_id SET employee_private.password ='$password' WHERE employee.nic = '$nic'");
        return 1;
    }
    public function login($username, $password) {
        $result=$this->db->runQuery("SELECT employee.nic,employee.job_title,employee.name FROM employee INNER JOIN employee_private ON employee.employee_id=employee_private.employee_id WHERE employee.nic='$username' AND employee_private.password='$password'");
        // $result=$this->db->runQuery("SELECT nic,job_title FROM employee WHERE name='$username'");
        if(!empty($result)){
            return $result;
        }  
    }
    
}