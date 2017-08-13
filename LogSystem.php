<?php
function __autoload($className)
{
    $className = str_replace('..', '', $className);
    require_once("classes/$className.php");
}


$artist = new Artist();
$artist->setNumberOfHours(8);
$artist->setSalaryRate(200);
echo 'Artis salarary is: ' . $artist->calculateSalary($artist->getNumberOfHours()) .PHP_EOL;

$tailor = new Tailor();
$tailor->setNumberOfClothes(8);
$tailor->setSalaryRate(100);
echo 'Tailor salarary is: ' . $tailor->calculateSalary($tailor->getNumberOfClothes()) .PHP_EOL;
?>
