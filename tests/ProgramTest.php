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
        $selection=["Service1"=>1,"Service2"=>2,"Service3"=>2,"Service4"=>2,"Service5"=>2,"Service6"=>1];
        $expected=[6=>1,4=>1];

        $actual=Calculate::calculatePrice($selection);
        $this->assertEquals($expected,$actual);


    }
}
