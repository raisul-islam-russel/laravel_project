<?php

use App\Http\Controllers\api\ProcessController;
use Illuminate\Support\Facades\Route;


Route::post('process_booking' , [ProcessController::class , 'index']);





