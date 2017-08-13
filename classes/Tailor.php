<?php

/**
* Tailor class.
*/
class Tailor extends Employee implements ITailor
{
    private $number_of_clothes;

    /**
     * Set number of clothes finish.
     *
     * @param integer $number_of_clothes number of clothes finish 
     *
     * @return null
     */
    public function setNumberOfClothes($number_of_clothes)
    {
        $this->number_of_clothes = $number_of_clothes;
    }

    /**
     * Get number of clothes finish.
     *
     * @return integer
     */
    public function getNumberOfClothes()
    {
        return $this->number_of_clothes;
    }
}
?>
