<?php

require(__DIR__ . '/vendor/autoload.php');
$application = new \Cmslz\GaodeMap\Application('e10418beefc79ac3f34ac3eaf724f61c');
//$result = $application->webServerApi()->geoCodeGeo('北京市朝阳区阜通东大街6号');
//$result = $application->webServerApi()->geoCodeReGeo('116.482086,39.990496');
//$result = $application->webServerApi()->directionWalkingV3('116.434307,39.90909', '116.434446,39.90816');
//$result = $application->webServerApi()->directionWalkingV5('116.434307,39.90909', '116.434446,39.90816');
//$result = $application->webServerApi()->directionBusV3('116.434307,39.90909', '116.434446,39.90816','广州');
//$result = $application->webServerApi()->directionBusV5('116.434307,39.90909', '116.434446,39.90816', '110101', '110101');
//$result = $application->webServerApi()->directionDrivingV3('116.434307,39.90909', '116.434446,39.90816', 'all');
//$result = $application->webServerApi()->directionDrivingV5('116.434307,39.90909', '116.434446,39.90816');
//$result = $application->webServerApi()->directionBicyclingV4('116.434307,39.90909', '116.434446,39.90816');
//$result = $application->webServerApi()->directionBicyclingV5('116.434307,39.90909', '116.434446,39.90816');
//$result = $application->webServerApi()->directionEtdDrivingV4('116.434307,39.90909', '116.434446,39.90816', time() + 6400, 10, 10);
//$result = $application->webServerApi()->directionDistanceV3('116.434307,39.90909', '116.434446,39.90816');
//$result = $application->webServerApi()->directionElectrobikeV5('116.434307,39.90909', '116.434446,39.90816');
//$result = $application->webServerApi()->district(['keywords'=>'阜通东大街']);
//$result = $application->webServerApi()->placeTextV3('阜通东大街');
//$result = $application->webServerApi()->placeTextV5('阜通东大街');
//$result = $application->webServerApi()->placeAroundV3('116.473168,39.993015');
//$result = $application->webServerApi()->placeAroundV5('116.473168,39.993015');
//$result = $application->webServerApi()->placePolygonV3('116.460988,40.006919|116.48231,40.007381|116.47516,39.99713|116.472596,39.985227|116.45669,39.984989|116.460988,40.006919');
//$result = $application->webServerApi()->placePolygonV5('116.460988,40.006919|116.48231,40.007381|116.47516,39.99713|116.472596,39.985227|116.45669,39.984989|116.460988,40.006919');
//$result = $application->webServerApi()->placeDetailV3('B000A7HS3L');
//$result = $application->webServerApi()->placeDetailV5('B000A7HS3L');
//$result = $application->webServerApi()->aoiPolyline('B000A7HS3L');
//$result = $application->webServerApi()->ip();
//$result = $application->webServerApi()->staticMap(10,'116.434307,39.90909')->getResult();
//$result = $application->webServerApi()->convert('116.481499,39.990475');
//$result = $application->webServerApi()->weatherInfo('110101');
//$result = $application->webServerApi()->inputTips('北京');
$result = $application->webServerApi()->driving([
    [
        "x" => 116.478928,
        "y" => 39.997761,
        "sp" => 19,
        "ag" => 0,
        "tm" => 1478031031
    ],
    [
        "x" => 116.478907,
        "y" => 39.998422,
        "sp" => 10,
        "ag" => 0,
        "tm" => 2
    ],
    [
        "x" => 116.479384,
        "y" => 39.998546,
        "sp" => 10,
        "ag" => 110,
        "tm" => 3
    ],
    [
        "x" => 116.481053,
        "y" => 39.998204,
        "sp" => 10,
        "ag" => 120,
        "tm" => 4
    ],
    [
        "x" => 116.481793,
        "y" => 39.997868,
        "sp" => 10,
        "ag" => 120,
        "tm" => 5
    ],
    [
        "x" => 116.482898,
        "y" => 39.998217,
        "sp" => 10,
        "ag" => 30,
        "tm" => 6
    ],
    [
        "x" => 116.483789,
        "y" => 39.999063,
        "sp" => 10,
        "ag" => 30,
        "tm" => 7
    ],
    [
        "x" => 116.484674,
        "y" => 39.999844,
        "sp" => 10,
        "ag" => 30,
        "tm" => 8
    ]
]);
var_dump($result);