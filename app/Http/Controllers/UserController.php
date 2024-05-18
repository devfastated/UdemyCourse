<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'password'=> 'required',
        ]);
        User::create($incomingFields);
        return 'Successfull';
    }
}
