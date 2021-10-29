<?php

class User_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }

    function getOTP($nic,$otpcode){
        
        $result=$this->db->runQuery("SELECT student_key.otp FROM student_key INNER JOIN student on student.student_id=student_key.student_id Where student.nic = '$nic'");
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

    public function login($username, $password) {
        $result=$this->db->runQuery("SELECT student.NIC,student.init_name FROM student INNER JOIN student_private ON student.student_id=student_private.student_id WHERE student.nic='$username' AND student_private.password='$password'");
        // $result=$this->db->runQuery("SELECT nic,job_title FROM employee WHERE name='$username'");
        if(!empty($result)){
            return $result;
        }  
    }
    public function forgotPassword($nic, $contact){
        $result=$this->db->runQuery("SELECT NIC,contact FROM student WHERE NIC='$nic' AND contact='$contact'");
        // echo $result[0]['NIC']."SDJKFNVJKDSNFVKJNDKJNVNJDVFKNJDKFVN";
        $_SESSION['NIC']=$result[0]['NIC'];
        if(!empty($result)){
            return $result;
        }
        // echo "from forgot";
        
    }

    public function otp(){
        $_SESSION['otp']=rand(100000,999999);
        echo $_SESSION['otp'].",".$_SESSION['NIC']; 

        // echo "from otp";
    }

    public function compareOTP($otp){
        if($otp==$_SESSION['otp']){
            echo 'success';
        }

        // echo "from cm otp";
    }
    public function passwordReset($password){
        $nic=$_SESSION['NIC'];
        $result=$this->db->runQuery("UPDATE student_private INNER JOIN student on student.student_id = student_private.student_id SET student_private.password ='$password' WHERE student.NIC = '$nic'");
        unset($_SESSION['otp']);
        return "success";
        // echo "from otp";
    }

    
}