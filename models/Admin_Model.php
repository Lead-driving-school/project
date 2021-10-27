<?php

class Admin_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }
    //return truth value and usertype
    public function registerEmployee($name, $empAddress, $NIC, $Dob, $gender, $telNo, $empType,$licenseNumber) {
        $hired_date = date('Y-m-d');
        $OTP=rand(100000,999999);
        $initPassword=rand(100000,999999);
        $contact=$this->db->runQuery("SELECT contact_no FROM employee WHERE contact_no='$telNo'");
        $nic=$this->db->runQuery("SELECT nic FROM employee WHERE nic='$NIC'");

        if(empty($contact)&&empty($nic)){
            $this->db->runQuery("INSERT INTO employee (name, address, gender, dob ,hired_date, contact_no, nic, job_title) VALUES ('$name','$empAddress', '$gender', '$Dob','$hired_date','$telNo', '$NIC', '$empType')");

            $emp_Id=$this->db->runQuery("SELECT employee_id FROM employee WHERE nic='$NIC'");
            $Emp_Id=$emp_Id[0]['employee_id'];

            $this->db->runQuery("INSERT INTO employee_key (otp, employee_id) VALUES ('$OTP', '$Emp_Id')");
            $this->db->runQuery("INSERT INTO employee_private (password, employee_id) VALUES ('$initPassword', '$Emp_Id')");

            if($empType=='Manager'){
                $this->db->runQuery("INSERT INTO manager (employee_id) VALUES ('$Emp_Id')");
            }
            if($empType=='Receptionist'){
                $this->db->runQuery("INSERT INTO receptionist (employee_id) VALUES ('$Emp_Id')");
            }
            if($empType=='Instructor'){
                $this->db->runQuery("INSERT INTO instructor (employee_id , instructor_license_id) VALUES ('$Emp_Id', '$licenseNumber')");
            }
            if($empType=='Teacher'){
                $this->db->runQuery("INSERT INTO teacher (employee_id) VALUES ('$Emp_Id')");
            }

            // $this->sendOtp($OTP);
            return "successfull";
        }
        else if(!empty($contact)&&empty($nic)){
            return "contact exist";
        }
        else if(empty($contact)&&!empty($nic)){
            return "nic exist";
        }
        else{
            return "nic contact exist";
        }
    }

    public function getEmployeeDetails(){
        $result=$this->db->runQuery("SELECT employee_id,name,job_title,contact_no FROM employee");
        return $result;
    }

    public function getEmployeeDetailsMore($id){
        $result=$this->db->runQuery("SELECT employee_id,name,job_title,nic,contact_no,address,dob,gender,hired_date FROM employee WHERE employee_id='$id'");
        $license=[];
        if($result[0]['job_title']=='Instructor'){
            $license=$this->db->runQuery("SELECT instructor_license_id FROM instructor WHERE employee_id='$id'");
        }

        return array_merge($result, $license);
    }

    public function sendOtp($otp){
        $user = "94771845973";
        $password = "7243";
        $text = urlencode("hi roshan your otp is: ".$otp);
        $to = "94771845973";

        $baseurl ="http://www.textit.biz/sendmsg";
        $url = "$baseurl/?id=$user&pw=$password&to=$to&text=$text";
        $ret = file($url);

        $res= explode(":",$ret[0]);

        if (trim($res[0])=="OK")
        {
        echo "Message Sent - ID : ".$res[1];
        }
        else
        {
        echo "Sent Failed - Error : ".$res[1];
        }
    }
}

                                      