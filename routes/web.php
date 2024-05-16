<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ExampleController::class,'index']);

Route::get('/homepage', [ExampleController::class,'newRoute']);
Route::get('/about', [ExampleController::class,'aboutPage']);
Route::get('/single-post', [ExampleController::class,'singlePostPage']);



