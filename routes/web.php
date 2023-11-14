<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use Illuminate\Routing\RouteRegistrar;



Route::get('/', function () {return view('welcome');});

Route::get("/location",[WeatherController::class, 'location']);
ROute::get("/weather/{location}", [WeatherController::class,"weather"]);