<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index() {

        return view('welcome');
    }

    public function newRoute(){
        // sample we loaded data from database

        $ourName = 'Romer Jsaen Jimenez';
        $animals = [
            'Bark',
            'mewo',
            'samd'
        ];

        return view('homepage',[
            'allanimals' => $animals,
            'name' => $ourName,
            'catName' => 'Meowsalot'
        ]);
    }

    public function aboutPage() {
        return view('about');
    }

    public function singlePostPage(){
        return view('single-post');
    }

}