<?php
class Manager_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }
    function utilityExpenses(){
        $cost['PetrolCost']='Petrol Cost';
        $cost['ElectricityBill']='Electricity Bill';
        $cost['WaterBill']='Water Bill';
        $cost['Tyre']='Tyre Replacement';
        $cost['Other']='Other Expenses';
        return $cost;
    }
    function checkPassword($managerId,$password){
        $result=$this->db->runQuery("SELECT employee_private.password FROM employee_private INNER JOIN employee on employee.employee_id=employee_private.employee_id Where employee.employee_id = '$managerId'");
        if(!empty($result)){
            if(password_verify($password,
            $result[0]['password'] )){
                return true;
            }else{
                return false;
            }

        // if(empty($result)){
        //     return false;
        // }else if($password!=$result[0]['password']){
        //     return false;
        // }else{
        //     return true;
        // }
        }else{
            return false;
        }
    }
    function setExpenses($title,$discription,$amount,$managerId){
        date_default_timezone_set('Asia/Colombo');
        $date = date('Y-m-d H:i:s');
        
        $result=$this->db->runQuery("INSERT INTO other_expenses(title,description,recorded_date_time,amount,employee_id) VALUES('$title','$discription','$date',$amount,$managerId)");
        
    }

    function getVehiclesForSessions(){
        $result=$this->db->runQuery("SELECT vehicle.vehicle_id,vehicle.vehicle_no,vehicle_classes.vehicle_class,vehicle.vehicle_type FROM vehicle INNER JOIN vehicle_classes ON vehicle_classes.vehicle_class_id=vehicle.vehicle_class_id");
        return $result;
    }
    function getVehiclesForExams(){
        $result=$this->db->runQuery("SELECT vehicle.vehicle_id,vehicle.vehicle_no,vehicle_classes.vehicle_class,vehicle.vehicle_type FROM vehicle INNER JOIN vehicle_classes ON vehicle_classes.vehicle_class_id=vehicle.vehicle_class_id");
        return $result;
    }

    function getInstructorsForSessions($type){
        if($type=="Theory"){
            $role="Teacher";
        }else if($type=="Practical"){
            $role="Instructor";
        }
        $result=$this->db->runQuery("SELECT employee_id,name,job_title FROM employee where job_title='$role'");
        return $result;
    }
    function getInstructorsForExams(){
        $result=$this->db->runQuery("SELECT employee_id,name,job_title FROM employee where job_title='Instructor' OR job_title='Teacher'");
        return $result;
    }
    function addSession($data,$instructors,$vehicles,$managerId){
        $values=explode(",",$data);
        $instructorsList=explode(",",$instructors);
        $vehiclesList=explode(",",$vehicles);
        $result=$this->db->runQuery("INSERT INTO sessions(session_title,session_date,session_time,type,employee_id) VALUES('$values[0]','$values[1]','$values[2]','$values[3]',$managerId)");
        $sessionId=$this->db->runQuery("SELECT session_id FROM sessions ORDER BY session_id DESC LIMIT 1");
        $sessionId=intval($sessionId[0]['session_id']);
        for($i=0;$i<count($instructorsList);$i++){
            $result=$this->db->runQuery("INSERT INTO session_conductor_assigns VALUES($managerId,$sessionId,$instructorsList[$i])");
        }
        for($i=0;$i<count($vehiclesList);$i++){
            $result=$this->db->runQuery("INSERT INTO session_vehicle_assigns VALUES($managerId,$sessionId,$vehiclesList[$i])");
        }
        return $instructors;
    }
    function addExam($data,$instructors,$vehicles,$managerId){
        $values=explode(",",$data);
        $instructorsList=explode(",",$instructors);
        $vehiclesList=explode(",",$vehicles);
        $result=$this->db->runQuery("INSERT INTO exams(exam_type,exam_date,exam_time,employee_id) VALUES('$values[0]','$values[1]','$values[2]',$managerId)");
        $examId=$this->db->runQuery("SELECT exam_id FROM exams ORDER BY exam_id DESC LIMIT 1");
        $examId=intval($examId[0]['exam_id']);
        for($i=0;$i<count($instructorsList);$i++){
            $result=$this->db->runQuery("INSERT INTO exam_conductor_assigns VALUES($managerId,$examId,$instructorsList[$i])");
        }
        for($i=0;$i<count($vehiclesList);$i++){
            $result=$this->db->runQuery("INSERT INTO exam_vehicle_assigns VALUES($managerId,$examId,$vehiclesList[$i])");
        }
        return $data;
    }

}