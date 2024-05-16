<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ExampleController::class,'index']);

Route::get('/newroute', [ExampleController::class,'newRoute']);
