<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Vyuldashev\XmlToArray\XmlToArray;

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

Route::get('/',function(){
    $api = "https://data.bmkg.go.id/datamkg/MEWS/DigitalForecast/DigitalForecast-JawaTengah.xml";
        $response = Http::get($api); 
        //bikin xml element dri response
        $xml=simplexml_load_string($response) or die("Error: Cannot create object");

        // xml element to array
        $result = array();
foreach($xml as $k => $v) {
  $result[$k] = $v;
}                                  
//xml to json
$json = json_encode($xml);
$array_json = json_decode($json,TRUE);
    dd ($array_json);
});




