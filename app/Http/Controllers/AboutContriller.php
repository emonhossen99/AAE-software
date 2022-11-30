<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutContriller extends Controller
{
    function About(){
        return view('About');
    }
}
