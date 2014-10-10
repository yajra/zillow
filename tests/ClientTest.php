<?php

/*
 * This file is part of the Zillow package.
 *
 * (c) Arjay Angeles <aqangeles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zillow\Tests;

use yajra\Zillow\ZillowClient;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Message\Response as GuzzleResponse;
use GuzzleHttp\Stream\Stream;
use GuzzleHttp\Subscriber\History;
use GuzzleHttp\Subscriber\Mock;
use GuzzleHttp\Post\PostFile;

/**
 * Goutte Client Test
 *
 * @author Arjay Angeles <aqangeles@gmail.com>
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    protected $history;
    protected $mock;

    protected function getGuzzle()
    {
        $this->history = new History();
        $this->mock = new Mock();
        $this->mock->addResponse(new GuzzleResponse(200, array(), Stream::factory('<html><body><p>Hi</p></body></html>')));
        $guzzle = new GuzzleClient(array('redirect.disable' => true, 'base_url' => ''));
        $guzzle->getEmitter()->attach($this->mock);
        $guzzle->getEmitter()->attach($this->history);

        return $guzzle;
    }

    public function testCreatesDefaultClient()
    {
        $client = new ZillowClient('xxxxx');
        $this->assertInstanceOf('GuzzleHttp\\ClientInterface', $client->getClient());
    }

    public function testUsesCustomClient()
    {
        $guzzle = new GuzzleClient();
        $client = new ZillowClient('xxxxx');
        $this->assertSame($client, $client->setClient($guzzle));
        $this->assertSame($guzzle, $client->getClient());
    }

    public function testZWSID()
    {
    	$client = new ZillowClient('xxxxx');
        $this->assertSame('xxxxx', $client->getZWSID());
    }
}
