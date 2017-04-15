<?php
/**
 * Created by IntelliJ IDEA.
 * User: sjarifhd
 * Date: 14/04/17
 * Time: 19:10
 */

namespace App\Service;


class WorldBankClient
{
    private $baseUrl = 'http://api.worldbank.org/';
    private $url;

    public function setUrl($param)
    {
        $this->url = $this->baseUrl.$param.'?format=json';
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setPage($page)
    {
        $currentUrl = $this->getUrl();
        $this->url = $currentUrl.'&page='.$page;
    }

    public function callWorldBankAPI()
    {
        return file_get_contents($this->getUrl());
    }
}