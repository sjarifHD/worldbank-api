<?php
/**
 * Created by IntelliJ IDEA.
 * User: sjarifhd
 * Date: 15/04/17
 * Time: 14:50
 */

namespace Tests\Feature;

use App\Service\WorldBankClient;
use App\WorldBank;
use Tests\TestCase;

class WorldBankGetDataTest extends TestCase
{
    private $worldBank;

    public function __construct()
    {
        $this->worldBank = new WorldBank();
    }

    public function testGetCountries()
    {
        $this->worldBank->getCountries();
        $response = $this->worldBank->getData();
        $this->assertJson($response);
    }

    public function testGetIncomeLevel()
    {
        $this->worldBank->getIncomeLevels('HIC');
        $response = $this->worldBank->getData();
        $this->assertJson($response);
    }

    public function testGetIncomeLevelWithCountry()
    {
        $this->worldBank->getIncomeLevels('HIC');
        $this->worldBank->withCountry('ABW');
        $response = $this->worldBank->getData();
        $this->assertJson($response);
    }

    public function testGetIncomeLevelWithPage()
    {
        $this->worldBank->getIncomeLevels('HIC');
        $this->worldBank->setPage(2);
        $response = $this->worldBank->getData();
        $this->assertJson($response);
    }
}