<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class DefaultControllerTest
 *
 * @package AppBundle\Tests\Controller
 */
class DefaultControllerTest extends WebTestCase
{
    /**
     * Request: load index page
     */
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isSuccessful(), 'Request for loading Default index page failed!');
    }
}
