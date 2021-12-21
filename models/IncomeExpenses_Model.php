<?php

class IncomeExpenses_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }

    function getOtherExpenses(){
        $result=$this->db->runQuery("SELECT other_expenses.oexpense_id,other_expenses.title,other_expenses.description,other_expenses.recorded_date_time,other_expenses.amount,employee.name from ((other_expenses INNER JOIN manager on manager.employee_id=other_expenses.employee_id) INNER JOIN employee on employee.employee_id=manager.employee_id)");
        return $result;
    }

    function getStudentExpenses(){
        $result=$this->db->runQuery("SELECT initial_service_expenses_submits.student_id,student.init_name,initial_service_expenses_submits.date_time,initial_service_expenses_submits.status,initial_service_expenses.amount from((student INNER JOIN initial_service_expenses_submits on initial_service_expenses_submits.student_id=student.student_id) INNER JOIN initial_service_expenses on initial_service_expenses.ischarge_id=initial_service_expenses_submits.ischarge_id) order by initial_service_expenses_submits.student_id");
        return $result;
    }
    function acceptExpense($studentId){
        $studentId=intval($studentId);
        $result=$this->db->runQuery("UPDATE initial_service_expenses_submits SET status='accepted' WHERE student_id=$studentId");
        return $studentId;
    }
}