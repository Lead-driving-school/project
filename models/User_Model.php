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

        $result=$this->db->runQuery("SELECT username,nic FROM admin WHERE username='$username' AND passwordhash='$password'");
        if(!empty($result)){
            $data['job_title']="Admin";
            $data['name']=$result[0]['username'];
            $data['nic']=$result[0]['nic'];
            return $data;      
        }
        else{
            unset($result);
            $result=$this->db->runQuery("SELECT employee.employee_id,employee.nic,employee.job_title,employee.name FROM employee INNER JOIN employee_private ON employee.employee_id=employee_private.employee_id WHERE employee.nic='$username' AND employee_private.password='$password'");
            if(!empty($result)){
                $data['job_title']=$result[0]['job_title'];;
                $data['name']=$result[0]['name'];
                $data['nic']=$result[0]['nic'];
                return $data;
            }
            else{
                unset($result);
                $result=$this->db->runQuery("SELECT student.nic,student.init_name FROM student INNER JOIN student_private ON student.student_id=student_private.student_id WHERE student.nic='$username' AND student_private.password='$password'");
                
                if(!empty($result)){
                    $data['job_title']="student";
                    $data['name']=$result[0]['init_name'];
                    $data['nic']=$result[0]['nic'];
                    return $data;
                }
                
            } 
        }
        
        
        
        
    }
    public function forgotPassword($nic, $contact){

        $result=$this->db->runQuery("SELECT nic,contact FROM admin WHERE nic='$nic' AND contact='$contact'");
        if(!empty($result)){
            $_SESSION['NIC']=$result[0]['nic'];
            $_SESSION['user']="Admin";
            return $result;
        }
        else{
            $result=$this->db->runQuery("SELECT nic,contact_no FROM employee WHERE nic='$nic' AND contact_no='$contact'");
            if(!empty($result)){
                $_SESSION['NIC']=$result[0]['nic'];
                $_SESSION['user']="employee";
                return $result;
            }
            else{
                $result=$this->db->runQuery("SELECT NIC,contact FROM student WHERE NIC='$nic' AND contact='$contact'");
                if(!empty($result)){
                    $_SESSION['NIC']=$result[0]['NIC'];
                    $_SESSION['user']="student";
                    return $result;
                }
            }
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
    public function passwordReset($password){//select ekak gahala pennanna insert una kyla
        $nic=$_SESSION['NIC'];
        if($_SESSION['user']=="Admin"){
            $result=$this->db->runQuery("UPDATE admin SET  passwordhash='$password' WHERE nic = '$nic'");
            unset($_SESSION['otp']);
            return "success";
            // echo "from otp";
        }
        else if($_SESSION['user']=="employee"){
            $result=$this->db->runQuery("UPDATE employee_private INNER JOIN employee on employee.employee_id = employee_private.employee_id SET employee_private.password ='$password' WHERE employee.nic = '$nic'");
            unset($_SESSION['otp']);
            return "success";
            // echo "from otp";
        }
        else if($_SESSION['user']=="student"){
            
            $result=$this->db->runQuery("UPDATE student_private INNER JOIN student on student.student_id = student_private.student_id SET student_private.password ='$password' WHERE student.NIC = '$nic'");
            unset($_SESSION['otp']);
            return "success";
            // echo "from otp";
        }
        
    }

    
}