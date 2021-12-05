<?php

class Student_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function getProfileDetails(){
        $result=$this->db->runQuery("");
        return $result;
    }

    function setComplaints($description,$suggestion,$studentId)
    {
        date_default_timezone_set('Asia/Colombo');
        $date = date('Y-m-d H:i:s');  
        $result=$this->db->runQuery("INSERT INTO complaints(submitted_date_time,description,suggestions,student_id) VALUES('$date','$description','$suggestion',$studentId)");
    
    }

    function setReview($idea,$satisfy,$improvement,$studentId){
        date_default_timezone_set('Asia/Colombo');
        $date = date('Y-m-d H:i:s');
        $result=$this->db->runQuery("INSERT INTO reviews(submitted_date_time,idea,improvements,student_id,satisfaction) VALUES('$date','$idea','$improvement',$studentId,'$satisfy')");
    
    }
    function getTodaySession(){
        $date=date("Y-m-d");
        $result=$this->db->runQuery("SELECT session_id , session_title, session_date, session_time FROM sessions WHERE session_date='2021-11-18'");
        return $result;

    }

}