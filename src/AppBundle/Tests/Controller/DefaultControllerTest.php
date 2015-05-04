<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * DefaultControllerTest
 */
class DefaultControllerTest extends WebTestCase
{
    /**
     * testIndex
     */
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertTrue($crawler->filter('html:contains("Homepage")')->count() > 0);
    }

    /**
     * testPrime
     */
    public function testPrime()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/is-prime/2');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertTrue($crawler->filter('html:contains("1")')->count() == 1);

        $crawler = $client->request('GET', '/is-prime/4');
        $this->assertFalse($crawler->filter('html:contains("1")')->count() == 1);
    }
}
