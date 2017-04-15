<?php
/**
 * Created by IntelliJ IDEA.
 * User: sjarifhd
 * Date: 15/04/17
 * Time: 14:05
 */

namespace tests\Unit;

use App\Service\WorldBankClient;
use App\WorldBank;
use Tests\TestCase;

class WorldBankTest extends TestCase
{
    private $worldBank;

    public function __construct()
    {
        $this->worldBank = new WorldBank();
    }

    public function testParamCountry()
    {
        $this->worldBank->getCountries();
        $param = $this->worldBank->getParam();
        $this->assertEquals('countries', $param);
    }

    public function testParamIncomeLevel()
    {
        $this->worldBank->getIncomeLevels('HIC');
        $param = $this->worldBank->getParam();
        $this->assertEquals('incomeLevels/HIC/countries', $param);
    }

    public function testParamIncomeLevelWithCountry()
    {
        $this->worldBank->getIncomeLevels('HIC');
        $this->worldBank->withCountry('ABW');
        $param = $this->worldBank->getParam();
        $this->assertEquals('incomeLevels/HIC/countries/ABW', $param);
    }

    public function testParamLendingType()
    {
        $this->worldBank->getLendingTypes('IDB');
        $param = $this->worldBank->getParam();
        $this->assertEquals('lendingTypes/IDB/countries', $param);
    }

    public function testParamLendingTypeWithCountry()
    {
        $this->worldBank->getLendingTypes('IDB');
        $this->worldBank->withCountry('BOL');
        $param = $this->worldBank->getParam();
        $this->assertEquals('lendingTypes/IDB/countries/BOL', $param);
    }

}