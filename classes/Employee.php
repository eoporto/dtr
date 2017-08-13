<?php

/**
* Employee class.
*/
class Employee implements IEmployee
{
    private $salary_rate;
    private $employee_id;
    private $total_salary;

    /**
     * Set employee ID.
     *
     * @param integer $employee_id the employeeyee ID
     *
     * @return null
     */
    public function setEmployeeId($employee_id)
    {
        $this->employee_id = $employee_id;
    }

    /**
     * Get employee ID.
     *
     * @return integer
     */
    public function getEmployeeId()
    {
        return $this->employee_id;
    }

    /**
     * Set salary rate.
     *
     * @param integer $salary_rate the salary rate 
     *
     * @return null
     */
    public function setSalaryRate($salary_rate)
    {
        $this->salary_rate = $salary_rate;
    }

    /**
     * Get salary rate.
     *
     * @return integer
     */
    public function getSalaryRate()
    {
        return $this->salary_rate;
    }

    /**
     * Calculate salary.
     * @param integer $work_done number of hour work or number of clothes finish
     *
     * @return integer
     */
    public function calculateSalary($work_done)
    {
        $this->total_salary =  $this->salary_rate * $work_done;
    }

    /**
     * Get Total salary.
     *
     * @return integer
     */
    public function getTotalSalary()
    {
        return $this->total_salary;
    }
}
?>
