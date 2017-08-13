<?php

/**
* Logger class.
*/
class Logger
{
    private $log_data;

    public function __construct() {
        $log_data = [];
    }

    /**
     * Save data to log_data.
     *
     * @param Employee $emplooyee object employee
     *
     * @return null
     */
    public function writeToLog(Employee $employee)
    {
        $this->log_data[] = [$employee->getEmployeeId(), $employee->getTotalSalary()];
    }

    /**
     * Dump Log.
     *
     * @return array
     */
    public function dumpLog()
    {
        var_dump($this->log_data);
    }
}
?>
