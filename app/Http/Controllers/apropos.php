<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apropos extends Controller
{
    public function index(){
        return view('pages.apropos');
    }
}
