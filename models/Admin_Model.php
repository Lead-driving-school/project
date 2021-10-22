<?php

class Admin_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }
    //return truth value and usertype
    public function registerEmployee($name, $empAddress, $NIC, $Dob, $gender, $telNo, $empType,$licen,$licenseNumber) {
        $hired_date = date('Y-m-d');
        $this->db->runQuery("INSERT INTO employee (name, address, gender, dob ,hired_date, contact_no, nic, job_title) VALUES ('$name','$empAddress', '$gender', '$Dob','$hired_date','$telNo', '$NIC', '$empType')");
        
        return "New Record created successfully";
    }

    public function getEmployeeDetails(){
        $result=$this->db->runQuery("SELECT employee_id,name,job_title,contact_no FROM employee");
        return $result;
    }
}

                                      