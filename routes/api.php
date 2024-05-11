<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [ApiController::class,'login']);
Route::post('/register', [ApiController::class,'register']);
