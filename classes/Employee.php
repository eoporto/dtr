<?php

/**
* Employee class.
*/
class Employee implements IEmployee
{
    private $salary_rate;

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
        return $this->salary_rate * $work_done;
    }
}
?>
