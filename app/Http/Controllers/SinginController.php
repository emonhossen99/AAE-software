<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCatModel;

class SinginController extends Controller
{
    function Singin(){
        $subcats = SubCatModel::with(['category'])->get()->groupBy('cat_id');
        return view('Singin',['servicesAsome' => $subcats]);
    }
}
