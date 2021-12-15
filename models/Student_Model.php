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
    function getSessions($studentId){
        $result=$this->db->runQuery("SELECT sessions.Session_id,sessions.session_title,sessions.session_date,sessions.session_time,sessions.type FROM sessions INNER join session_student_assigns on session_student_assigns.session_id=sessions.session_id where session_student_assigns.student_id=$studentId");
        return $result;
    }

    function getExams($studentId){
        $result=$this->db->runQuery("SELECT exams.Exam_id,exams.exam_date,exams.exam_time,exams.exam_type FROM exams INNER JOIN exam_student_assigns on exam_student_assigns.exam_id=exams.exam_id where exam_student_assigns.student_id=$studentId");
        return $result;
    }
    function getAllExams($studentId){
        $result=$this->db->runQuery("SELECT exams.Exam_id,exams.exam_date,exams.exam_time,exams.exam_type FROM exams");
        return $result;
    }
    function getAllSessions($studentId){
        $result=$this->db->runQuery("SELECT Session_id,session_title,session_date,session_time,type FROM sessions");
        return $result;
    }
    function getExamDetails($id){
        $id=intval($id);
        $result=$this->db->runQuery("SELECT * FROM exams where Exam_id=$id");
        return $result;
    }
    function loadPreSelectedInstructors($examId){
        $result=$this->db->runQuery("SELECT employee.employee_id,employee.name,employee.job_title from ((((employee 
        INNER JOIN instructor on instructor.employee_id=employee.employee_id) 
        INNER JOIN conductor on conductor.employee_id=instructor.employee_id)
        INNER JOIN exam_conductor_assigns on exam_conductor_assigns.conductor_id=conductor.employee_id)
        INNER JOIN exams on exams.exam_id=exam_conductor_assigns.exam_id)
        where exams.exam_id=$examId");
        return $result;
    }
    function loadPreSelectedVehicles($examId){
        $result=$this->db->runQuery("SELECT vehicle.vehicle_id,vehicle.vehicle_type,vehicle.vehicle_no,vehicle_classes.vehicle_class from (((vehicle INNER JOIN exam_vehicle_assigns on exam_vehicle_assigns.vehicle_id=vehicle.vehicle_id) INNER JOIN exams on exams.exam_id=exam_vehicle_assigns.exam_id) INNER JOIN vehicle_classes on vehicle_classes.vehicle_class_id=vehicle.vehicle_class_id) WHERE exams.exam_id=$examId");
        return $result;
    }

    function loadPreSelectedStudents($examId){
        $result=$this->db->runQuery("SELECT count(exam_student_assigns.student_id) AS total_assigns,exam_student_assigns.student_id,GROUP_CONCAT(exam_student_assigns.exam_id) AS exam_IDs,student.init_name FROM ((exam_student_assigns LEFT JOIN student on student.student_id=exam_student_assigns.student_id) LEFT JOIN exams on exams.exam_id=exam_student_assigns.exam_id) GROUP BY exam_student_assigns.student_id,student.init_name");
        return $result;
    }

    //Sessions
    function getSessionDetails($id){
        $id=intval($id);
        $result=$this->db->runQuery("SELECT * FROM sessions where Session_id=$id");
        return $result;
    }
    function loadPreSelectedInstructorsS($sessionId){
        $result=$this->db->runQuery("SELECT employee.employee_id,employee.name,employee.job_title from ((((employee 
        INNER JOIN instructor on instructor.employee_id=employee.employee_id) 
        INNER JOIN conductor on conductor.employee_id=instructor.employee_id)
        INNER JOIN session_conductor_assigns on session_conductor_assigns.conductor_id=conductor.employee_id)
        INNER JOIN sessions on sessions.session_id=session_conductor_assigns.session_id)
        where sessions.session_id=$sessionId");
        return $result;
    }
    function loadPreSelectedVehiclesS($sessionId){
        $result=$this->db->runQuery("SELECT vehicle.vehicle_id,vehicle.vehicle_type,vehicle.vehicle_no,vehicle_classes.vehicle_class from (((vehicle INNER JOIN session_vehicle_assigns on session_vehicle_assigns.vehicle_id=vehicle.vehicle_id) INNER JOIN sessions on sessions.session_id=session_vehicle_assigns.session_id) INNER JOIN vehicle_classes on vehicle_classes.vehicle_class_id=vehicle.vehicle_class_id)WHERE sessions.session_id=$sessionId");
        return $result;
    }
    function loadPreSelectedStudentsS($sessionId){
        $result=$this->db->runQuery("SELECT count(session_student_assigns.student_id) AS total_assigns,session_student_assigns.student_id,GROUP_CONCAT(session_student_assigns.session_id) AS session_IDs,student.init_name FROM ((session_student_assigns LEFT JOIN student on student.student_id=session_student_assigns.student_id) LEFT JOIN sessions on sessions.session_id=session_student_assigns.session_id) GROUP BY session_student_assigns.student_id,student.init_name");
        return $result;
    }

    //requesting part
    function requestForExam($examId,$studentId){
        date_default_timezone_set('Asia/Colombo');
        $date = date('Y-m-d H:i:s');
        $studentId=intval($studentId);
        $examId=intval($examId);
        $result=$this->db->runQuery("INSERT INTO exam_request (student_id,exam_id,date_time) VALUES ($studentId,$examId,'$date')");
        return $studentId;
    }
    function requestForSession($sessionId,$studentId){
        date_default_timezone_set('Asia/Colombo');
        $date = date('Y-m-d H:i:s');
        $studentId=intval($studentId);
        $sessionId=intval($sessionId);
        $result=$this->db->runQuery("INSERT INTO session_request (student_id,session_id,date_time) VALUES ($studentId,$sessionId,'$date')");
        return $studentId;
    }

}