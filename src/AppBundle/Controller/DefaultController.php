<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * DefaultController
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @return Response
     */
    public function indexAction()
    {
        phpinfo();
    }

    /**
     * @Route("/is-prime/{number}", name="isprime")
     * @param int $number
     *
     * @return Response
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
