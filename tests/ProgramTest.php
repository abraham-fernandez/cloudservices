<?php
namespace tests;

require __DIR__ . "/../classes/Calculate.php" ;
use classes\Calculate;
use PHPUnit\Framework\TestCase;

class ProgramTest extends TestCase
{

    public function testCalculatePrice()
    {

    }

    public function testGetPercentage()
    {
        $selection=["Service1"=>1,"Service2"=>2];

        $actual=Calculate::calculatePrice($selection);
        var_dump($actual);


    }
}
