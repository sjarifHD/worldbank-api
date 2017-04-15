<?php
/**
 * Created by IntelliJ IDEA.
 * User: sjarifhd
 * Date: 15/04/17
 * Time: 15:25
 */

namespace tests\Feature;

use Tests\TestCase;

class APITest extends TestCase
{
    private $headers = ['Authorization' => 'Basic YWRtaW5AbWFpbC5jb206YWRtaW4xMjM='];

    public function testGetCountry()
    {
        $response = $this->get('/api/countries', $this->headers);

        $response->assertStatus(200);
    }

    public function testGetCountryWithPage()
    {
        $response = $this->get('/api/countries?page=2', $this->headers);

        $response->assertStatus(200);
    }

    public function testGetIncomeLevel()
    {
        $response = $this->get('/api/incomelevels', $this->headers);

        $response->assertStatus(200);
    }

    public function testGetIncomeLevelWithPage()
    {
        $response = $this->get('/api/incomelevels/HIC/countries?page=2', $this->headers);

        $response->assertStatus(200);
    }

    public function testGetIncomeLevelSearchCountry()
    {
        $response = $this->get('/api/incomelevels/HIC/countries/ABW', $this->headers);

        $response->assertStatus(200);
    }
}