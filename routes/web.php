<?php

use App\Http\Controllers\TuwaiqController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/result/{value}', [TuwaiqController::class,'GetResult']);

Route::get('/phones', [TuwaiqController::class,'GetPhones']);