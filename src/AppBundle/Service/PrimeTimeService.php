<?php

namespace AppBundle\Service;

use RomainPrignon\Prime;

class PrimeTimeService
{
    private $primeLib;

    public function __construct(Prime $primeLib)
    {
        $this->primeLib = $primeLib;
    }

    public function isPrime($number)
    {
        return $this->primeLib->isPrime($number);
    }
}
