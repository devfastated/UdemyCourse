<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function newRoute(){
        return view('newroute');
    }
}
