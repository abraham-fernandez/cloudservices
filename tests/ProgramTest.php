<?php
namespace tests;

require __DIR__ . "/../classes/Calculate.php" ;
use classes\Calculate;
use PHPUnit\Framework\TestCase;

class ProgramTest extends TestCase
{

    public function testCalculatePrice()
    {

        $this->assertEquals(0.05,Calculate::getPercentage(2));
        $this->assertEquals(0.1,Calculate::getPercentage(3));
        $this->assertEquals(0.15,Calculate::getPercentage(4));
        $this->assertEquals(0.25,Calculate::getPercentage(5));
        $this->assertEquals(0.30,Calculate::getPercentage(6));
        $this->assertEquals(0.35,Calculate::getPercentage(7));
    }

    public function testGetPercentage()
    {
        $selection=["Service1"=>1,"Service2"=>2,"Service3"=>2,"Service4"=>2,"Service5"=>2,"Service6"=>1];
        $expected=[6=>1,4=>1];

        $actual=Calculate::calculatePrice($selection,8);

        print_r($actual);


    }
}
