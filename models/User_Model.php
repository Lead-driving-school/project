<?php

class User_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }

    function getOTP($nic,$otpcode){
        
        $result=$this->db->runQuery("SELECT student_private.otp FROM student_private INNER JOIN student on student.student_id=student_private.student_id Where student.nic = '$nic'");
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
        
        $result=$this->db->runQuery("UPDATE student_private INNER JOIN student on student.student_id = student_private.student_id SET student_private.password ='$password' WHERE student.nic = '$nic'");
        return 1;
    }
    
}