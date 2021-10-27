<?php

class Student_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function setComplaints($description,$suggestion,$studentId)
    {
        $date = date('Y-m-d H:i:s');  
        $result=$this->db->runQuery("INSERT INTO complaints(submitted_date_time,description,suggestions,student_id) VALUES('$date','$description','$suggestion',$studentId)");
    
    }

    function setReview($idea,$satisfy,$improvement,$studentId){
        $date = date('Y-m-d H:i:s');
        $result=$this->db->runQuery("INSERT INTO reviews(submitted_date_time,idea,improvements,student_id,satisfaction) VALUES('$date','$idea','$improvement',$studentId,'$satisfy')");
    
    }

}