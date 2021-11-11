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

}