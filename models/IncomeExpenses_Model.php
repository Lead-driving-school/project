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
}