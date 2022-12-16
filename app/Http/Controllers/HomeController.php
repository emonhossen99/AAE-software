<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCatModel;

class HomeController extends Controller
{
    function Home(){
        $subcats = SubCatModel::with(['category'])->get()->groupBy('cat_id');
        return view('home',['servicesAsome' => $subcats]);
    }
}
