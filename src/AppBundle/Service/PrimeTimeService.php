<?php

namespace AppBundle\Service;

use RomainPrignon\Prime;

/**
 * PrimeTimeService
 */
class PrimeTimeService
{
    private $primeLib;

    /**
     * @param Prime $primeLib
     */
    public function __construct(Prime $primeLib)
    {
        $this->primeLib = $primeLib;
    }

    /**
     * @param int $number
     *
     * @return bool
     */
    public function isPrime($number)
    {
        return $this->primeLib->isPrime($number);
    }
}
