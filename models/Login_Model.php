<?php

class Login_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }
    //return truth value and usertype
    public function login($username, $password) {
        if($username=='gihan' && $password=='12345') {
            return true;
        }else {
            return false;
        }
    }
}