<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index(){
        $data = [
            'title' => 'topensando',
        ];

        return view('home', $data);
    }
}
