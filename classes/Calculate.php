<?php

namespace classes;

class Calculate
{
    /**
     * Method to get percentage to apply
     * @param int $numServices
     */
    public function getPercentage(int $numServices)
    {

        $percentageInit = 5;
        return ($numServices * $numServices) - $percentageInit;

    }

    /**
     * Method to calculate price of services
     * @param array $selection
     */
    public static function calculatePrice(array $selection)
    {


        $numServices = count($selection);
        $numLicences = array_sum($selection);
        $combinations = [];
        $combinations[$numServices] = intdiv($numLicences,$numServices);
        $combinations[$numLicences % $numServices] = 1;


        return $combinations;

    }


}