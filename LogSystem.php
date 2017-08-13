<?php
function __autoload($className)
{
    $className = str_replace('..', '', $className);
    require_once("classes/$className.php");
}

$logger = new Logger();

$artist = new Artist();
$artist->setEmployeeId(1234);
$artist->setNumberOfHours(8);
$artist->setSalaryRate(200);
$artist->calculateSalary($artist->getNumberOfHours());
echo 'Artis salarary is: ' . $artist->getTotalSalary() .PHP_EOL;
$logger->writeToLog($artist);

$tailor = new Tailor();
$tailor->setEmployeeId(1235);
$tailor->setNumberOfClothes(8);
$tailor->setSalaryRate(100);
$tailor->calculateSalary($tailor->getNumberOfClothes());
echo 'Artis salarary is: ' . $tailor->getTotalSalary() .PHP_EOL;
$logger->writeToLog($tailor);


//debug
$logger->dumpLog();
?>
