<?php

class Receptionist_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }
    function registerWritten(){
        
    }
    function registerTrail(){

    }
    function registerLicense(){
        
    }
    function getVehicleClasses($classA1,$classA,$classB1,$classB){
        $total=0;
        if($classA1=="true"){
            $result=$this->db->runQuery("SELECT initial_charge FROM vehicle_classes WHERE vehicle_class='A1'");
            $total=$total+doubleval($result[0]['initial_charge']);
        }
        if($classA=="true"){
            $result=$this->db->runQuery("SELECT initial_charge FROM vehicle_classes WHERE vehicle_class='A'");
            $total=$total+doubleval($result[0]['initial_charge']);
        }
        if($classB1=="true"){
            $result=$this->db->runQuery("SELECT initial_charge FROM vehicle_classes WHERE vehicle_class='B1'");
            $total=$total+doubleval($result[0]['initial_charge']);
        }
        if($classB=="true"){
            $result=$this->db->runQuery("SELECT initial_charge FROM vehicle_classes WHERE vehicle_class='B'");
            $total=$total+doubleval($result[0]['initial_charge']);
        }
            
        return $total;
    }
    function getPackages(){
        $result=$this->db->runQuery("SELECT packages.package_id,GROUP_CONCAT(vehicle_classes.vehicle_class) as classes,packages.amount from ((package_n_vehicles inner join packages on package_n_vehicles.package_id=packages.package_id) inner join vehicle_classes on package_n_vehicles.vehicle_class_id=vehicle_classes.vehicle_class_id) group by package_id");
        return $result;
    }
    function addStudent($nic,$address,$gender,$dob,$contact,$initPrice,$packagePrice,$district,$city,$div_sec,$police,$occupation,$type,$initName,$fullName){
        $totalAmount=doubleval($initPrice)+doubleval($packagePrice);
        $message='hiiiiiiii';
        $date=date('Y-m-d');
        $OTP=rand(100000,999999);
        $initPassword=rand(100000,999999);
        $result=$this->db->runQuery("SELECT(student_id) from student where nic='$nic'");
        if(empty($result[0]['student_id'])){
            $result=$this->db->runQuery("SELECT(student_id) from student where contact='$contact'");
            if(empty($result[0]['contact'])){
                $result=$this->db->runQuery("INSERT INTO student(nic,address,arival_date,gender,dob,contact,total_amount,district,city,div_sec,police_station,occupation,type,init_name,full_name) values('$nic','$address','$date','$gender','$dob','$contact',$totalAmount,'$district','$city','$div_sec','$police','$occupation','$type','$initName','$fullName')");

                $studentId=$this->db->runQuery("SELECT(student_id) from student where nic='$nic'");
                $student_Id=$studentId[0]['student_id'];

                $this->db->runQuery("INSERT INTO student_key (otp, student_id) VALUES ('$OTP', '$student_Id')");
                $this->db->runQuery("INSERT INTO student_private (password, student_id) VALUES ('$initPassword', '$student_Id')");
            }else{
                $message="Contact Exist";
            }  
        }else{
            $message="NIC Exist";
        }
        return $message;
    }


    function addInitExpenses($nic,$vehicleClasses,$receptionistId){
        $vehicleClassesArray=explode(',',$vehicleClasses);
        $count=0;
        for($i=0;$i<count($vehicleClassesArray);$i++){
            if($vehicleClassesArray[$i]=="true"){
                $count++;
            }
        }
        $st_id=$this->db->runQuery("SELECT(student_id) from student where nic='$nic'");
        $studentId=intval($st_id[0]['student_id']);
        $result=$this->db->runQuery("INSERT INTO initial_service_expenses_submits VALUES($studentId,$count,$receptionistId)");
    }


    function assignPackages($nic,$packageId,$receptionistId){
        $st_id=$this->db->runQuery("SELECT(student_id) from student where nic='$nic'");
        $studentId=intval($st_id[0]['student_id']);
        $packageId=intval($packageId);
        $result=$this->db->runQuery("INSERT INTO package_assigning VALUES($studentId,$packageId,$receptionistId)");
    }
    function assginVehicleClasses($nic,$classArray){
        $st_id=$this->db->runQuery("SELECT(student_id) from student where nic='$nic'");
        $studentId=intval($st_id[0]['student_id']);
        $assignedClassesArray=explode(',',$classArray);
        for($i=0;$i<count($assignedClassesArray);$i++){
            $vc_id=$this->db->runQuery("SELECT vehicle_class_id FROM vehicle_classes WHERE vehicle_class='$assignedClassesArray[$i]'"); 
            $vehicleClassId=intval($vc_id[0]['vehicle_class_id']);
            $result=$this->db->runQuery("INSERT INTO requested_vehicle_classes VALUES($studentId,$vehicleClassId)");
        }
        
    }

    function getStudentDetails(){
        $result=$this->db->runQuery("SELECT student_id,full_name,contact FROM student");
        return $result;
    }

    public function getEmployeeDetailsMore($id){
        $result=$this->db->runQuery("SELECT student_id,init_name,full_name,address,NIC,gender,district,city,div_sec,police_station,dob,contact,occupation,type,arival_date FROM student WHERE student_id='$id'");
        return $result;
    }
    
}