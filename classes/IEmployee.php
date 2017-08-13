<?php
// Declare the interface 'IEmployee'
interface IEmployee
{
    public function setSalaryRate($salary_rate);

    public function getSalaryRate();

    public function calculateSalary($work_done);

    public function setEmployeeId($employee_id);

    public function getEmployeeId();

    public function getTotalSalary();
}
?>
