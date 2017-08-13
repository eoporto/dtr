<?php

/**
* Artis class.
*/

class Artist extends Employee implements IArtist
{
    private $number_of_hours;

    /**
     * Set number of hours.
     *
     * @param integer $number_of_hours number of hour work
     *
     * @return null
     */
    public function setNumberOfHours($number_of_hours)
    {
        $this->number_of_hours = $number_of_hours;
    }

    /**
     * Get number of hours.
     *
     * @return integer
     */
    public function getNumberOfHours()
    {
        return $this->number_of_hours;
    }
}
?>
