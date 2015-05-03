<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/is-prime/{number}", name="isprime")
     */
    public function primeAction($number)
    {
        $primeTimeService = $this->get('primetime');

        $isPrime = $primeTimeService->isPrime($number);

        return $this->render('default/prime.html.twig', array(
            'isPrime' => $isPrime,
        ));
    }
}
