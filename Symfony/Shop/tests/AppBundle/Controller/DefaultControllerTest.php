<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{

    /**
     * @test
     */
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }

    /**
     * @test
     */
    public function testProduct(){
        $client = static::createClient();

        $crawler = $client->request('GET', '/product/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Toyota Land Cruiser', $client->getResponse()->getContent());
    }
}
