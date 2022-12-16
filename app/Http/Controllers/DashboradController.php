<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCatModel;

class DashboradController extends Controller
{
    function Dashborad(){
        $subcats = SubCatModel::with(['category'])->get()->groupBy('cat_id');
        return view('Dashborad',['servicesAsome' => $subcats]);
    }
}
