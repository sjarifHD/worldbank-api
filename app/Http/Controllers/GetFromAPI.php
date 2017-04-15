<?php

namespace App\Http\Controllers;

use App\WorldBank;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GetFromAPI extends Controller
{
    private $worldBank;

    public function __construct(WorldBank $worldBank, Request $request)
    {
        $this->worldBank = $worldBank;

        if ($request->has('page')) {
            $page = $request->input('page');
            $this->worldBank->setPage($page);
        }
    }

    public function getCountries()
    {
        $this->worldBank->getCountries();
        $results = $this->worldBank->getData();

        return response($results)
            ->header('Content-Type', 'application/json');
    }

    public function getIncomeLevels($incomeLevelType = null, $country = null)
    {
        $this->worldBank->getIncomeLevels($incomeLevelType);

        if ($country !== null) {
            $this->worldBank->withCountry($country);
        }

        $results = $this->worldBank->getData();
        return response($results)
            ->header('Content-Type', 'application/json');
    }

    public function getLendingTypes($lendingType = null, $country = null)
    {
        $this->worldBank->getLendingTypes($lendingType);

        if ($country !== null) {
            $this->worldBank->withCountry($country);
        }

        $results = $this->worldBank->getData();
        return response($results)
            ->header('Content-Type', 'application/json');
    }

    public function getIncomeHIC($country = null)
    {
        $this->worldBank->getIncomeLevels('HIC');

        if ($country !== null) {
            $this->worldBank->withCountry($country);
        }

        $results = $this->worldBank->getData();
        return response($results)
            ->header('Content-Type', 'application/json');
    }

    public function getIncomeMIC($country = null)
    {
        $this->worldBank->getIncomeLevels('MIC');

        if ($country !== null) {
            $this->worldBank->withCountry($country);
        }

        $results = $this->worldBank->getData();
        return response($results)
            ->header('Content-Type', 'application/json');
    }

    public function getIncomeLIC($country = null)
    {
        $this->worldBank->getIncomeLevels('LIC');

        if ($country !== null) {
            $this->worldBank->withCountry($country);
        }

        $results = $this->worldBank->getData();
        return response($results)
            ->header('Content-Type', 'application/json');
    }

    public function getLendingIBD($country = null)
    {
        $this->worldBank->getLendingTypes('IBD');

        if ($country !== null) {
            $this->worldBank->withCountry($country);
        }

        $results = $this->worldBank->getData();
        return response($results)
            ->header('Content-Type', 'application/json');
    }

    public function getLendingIDB($country = null)
    {
        $this->worldBank->getLendingTypes('IDB');

        if ($country !== null) {
            $this->worldBank->withCountry($country);
        }

        $results = $this->worldBank->getData();
        return response($results)
            ->header('Content-Type', 'application/json');
    }

    public function getLendingIDX($country = null)
    {
        $this->worldBank->getLendingTypes('IDX');

        if ($country !== null) {
            $this->worldBank->withCountry($country);
        }

        $results = $this->worldBank->getData();
        return response($results)
            ->header('Content-Type', 'application/json');
    }
}
