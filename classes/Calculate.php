<?php

namespace classes;

class Calculate
{
    /**
     * Method to get percentage to apply
     * @param int $numServices
     * @return float|int
     */
    public static function getPercentage(int $numServices)
    {
        $percentageInit = 0.05;
        return $numServices < 5 ? ($percentageInit * $numServices)-$percentageInit : $percentageInit * $numServices;

    }

    /**
     * Method to calculate price of services
     * @param array $selection
     * @param int $priceLicense ;
     * @return float|int
     */
    public static function calculatePrice(array $selection,int $priceLicense)
    {

        $numServices = count($selection);
        $numLicences = array_sum($selection);
        $combinations = [];
        //Get combinations of services
        $combinations[$numServices] = intdiv($numLicences,$numServices);
        $combinations[$numLicences % $numServices] = 1;

        $total=0;
        foreach ($combinations as $numLicense=>$repetitions){
            $total+=$repetitions*(($numLicense*$priceLicense)*(1-self::getPercentage($numLicense)));
        }

        return $total;

    }


}