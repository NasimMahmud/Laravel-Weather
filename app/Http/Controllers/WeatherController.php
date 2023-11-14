<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class WeatherController extends Controller
{
    function displayLocationDetails(){
$location= [
    "name"=> "Dhaka",
    "country"=> "Bangladesh",
    "population"=> "200000000",
    "timezone"=> "GMT+6"
];
return $location;
    }

    function location(){
        $location= [
            "name"=> "Dhaka",
            "country"=> "Bangladesh",
            "population"=> "200000000",
            "timezone"=> "GMT+6"
        ];
        // return view("lc", ["location"=>$location]);
        return view("lc", $location);

    }


    function weather($location){
        $weatherDetails= Http::get("https://wttr.in/{$location}?format=j1")->json();
        $currentTemp= $weatherDetails["current_condition"][0]["temp_C"];
        $currentCondition= $weatherDetails["current_condition"][0]["weatherDesc"][0]["value"];
       
        return view("weather", compact("currentTemp","currentCondition", "location"));
    }

}
