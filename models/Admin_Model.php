<?php

class Admin_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }
    //return truth value and usertype
    public function registerEmployee($name, $empAddress, $NIC, $Dob, $gender, $telNo, $empType,$licenseNumber) {
        $hired_date = date('Y-m-d');
        $this->db->runQuery("INSERT INTO employee (name, address, gender, dob ,hired_date, contact_no, nic, job_title) VALUES ('$name','$empAddress', '$gender', '$Dob','$hired_date','$telNo', '$NIC', '$empType')");
        
        return "New Record created successfully";
        $OTP=rand(100000,999999);
        $initPassword=rand(100000,999999);
        $contact=$this->db->runQuery("SELECT contact_no FROM employee WHERE contact_no='$telNo'");
        $nic=$this->db->runQuery("SELECT nic FROM employee WHERE nic='$NIC'");

        if(empty($contact)&&empty($nic)){
            $this->db->runQuery("INSERT INTO employee (name, address, gender, dob ,hired_date, contact_no, nic, job_title) VALUES ('$name','$empAddress', '$gender', '$Dob','$hired_date','$telNo', '$NIC', '$empType')");

            $emp_Id=$this->db->runQuery("SELECT employee_id FROM employee WHERE nic='$NIC'");
            $Emp_Id=$emp_Id[0]['employee_id'];

            $this->db->runQuery("INSERT INTO employee_private (password, otp, employee_id) VALUES ('$initPassword','$OTP', '$Emp_Id')");

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
}

                                      