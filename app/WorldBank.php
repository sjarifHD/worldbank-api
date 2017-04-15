<?php
/**
 * Created by IntelliJ IDEA.
 * User: sjarifhd
 * Date: 14/04/17
 * Time: 19:30
 */

namespace App;

use App\Service\WorldBankClient;

/**
 * @property bool withCounry
 */
class WorldBank
{
    private $paramBuilder;
    private $withPage = false;
    private $page;

    public function setParam($param)
    {
        $this->paramBuilder = $param;
    }

    public function getParam()
    {
        return $this->paramBuilder;
    }

    public function withCountry($country)
    {
        $currentParam = $this->getParam();
        $this->paramBuilder = $currentParam.'/'.$country;
    }

    public function setPage($page)
    {
        $this->withPage = true;
        $this->page = $page;
    }

    public function getCountries()
    {
        $this->setParam('countries');
    }

    public function getIncomeLevels($incomeLevelType = null)
    {
        if ($incomeLevelType === null) {
            $this->setParam('incomeLevels');
        } else {
            $this->setParam("incomeLevels/$incomeLevelType/countries");
        }
    }

    public function getLendingTypes($lendingType = null)
    {
        if ($lendingType === null) {
            $this->setParam('lendingTypes');
        } else {
            $this->setParam("lendingTypes/$lendingType/countries");
        }
    }

    public function getData()
    {
        $param = $this->getParam();

        $wbClient = new WorldBankClient();
        $wbClient->setUrl($param);

        if ($this->withPage === true) {
           $wbClient->setPage($this->page);
        }

        return $wbClient->callWorldBankAPI();
    }
}