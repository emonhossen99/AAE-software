<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCatModel;

class AboutContriller extends Controller
{
    function About(){
        $subcats = SubCatModel::with(['category'])->get()->groupBy('cat_id');
        return view('About',['servicesAsome' => $subcats]);
    }
}
