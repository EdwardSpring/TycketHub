<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{

    public function index()    {
        $data = [
            'title' => 'My Home',
            'services' => [
                'Web Dev',
                'Graphics',
                'Programming'
            ]
        ];
        // return view('pages.landing')->with($data);
        echo "boy";
    }
}