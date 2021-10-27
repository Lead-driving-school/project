<?php

class AdminAuth_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }

    public function login($username, $password) {
        $result=$this->db->runQuery("SELECT username FROM admin WHERE username='$username' AND passwordhash='$password'");
        // $result=$this->db->runQuery("SELECT nic,job_title FROM employee WHERE name='$username'");
        if(!empty($result)){
            return $result;
        }  
    }
    
}