<?php
/**
 * Created by IntelliJ IDEA.
 * User: sjarifhd
 * Date: 15/04/17
 * Time: 13:00
 */

namespace Tests\Unit;

use App\Service\WorldBankClient;
use Tests\TestCase;

class WorldBankClientTest extends TestCase
{
    private $worldBankClient;

    public function __construct()
    {
        $this->worldBankClient = new WorldBankClient();
    }

    public function testSetUrl()
    {
        $this->worldBankClient->setUrl('countries');
        $url = $this->worldBankClient->getUrl();
        $this->assertEquals('http://api.worldbank.org/countries?format=json', $url);
    }

    public function testSetUrlWithPage()
    {
        $this->worldBankClient->setUrl('countries');
        $this->worldBankClient->setPage(2);
        $url = $this->worldBankClient->getUrl();
        $this->assertEquals('http://api.worldbank.org/countries?format=json&page=2', $url);
    }
}