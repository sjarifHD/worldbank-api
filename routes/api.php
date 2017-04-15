<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth.basic'], function () {
    // list countries
    Route::get('/countries', 'GetFromAPI@getCountries');

    // list available income level
    Route::get('/incomelevels', 'GetFromAPI@getIncomeLevels');

    // spesific income level
    Route::get('/income-hic/countries/{country?}', 'GetFromAPI@getIncomeHIC');
    Route::get('/income-mic/countries/{country?}', 'GetFromAPI@getIncomeMIC');
    Route::get('/income-lic/countries/{country?}', 'GetFromAPI@getIncomeLIC');

    // list available lending types
    Route::get('/lendingtypes', 'GetFromAPI@getLendingTypes');

    // spesific lending typs
    Route::get('/lending-ibd/countries/{country?}', 'GetFromAPI@getLendingIBD');
    Route::get('/lending-idb/countries/{country?}', 'GetFromAPI@getLendingIDB');
    Route::get('/lending-idx/countries/{country?}', 'GetFromAPI@getLendingIDX');

    // country search with certain income level
    Route::get('/incomelevels/{type}/countries/{country?}', 'GetFromAPI@getIncomeLevels');

    // country search with certain lending type
    Route::get('/lendingtypes/{type}/countries/{country?}', 'GetFromAPI@getLendingTypes');
});


