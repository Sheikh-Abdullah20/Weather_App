<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;


Route::match(['get','post'],'/',[WeatherController::class, 'index'])->name('home');