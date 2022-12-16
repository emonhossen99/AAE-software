<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCatModel;

class ServicesController extends Controller
{
    function AllServices(){
        $subcats = SubCatModel::with(['category'])->get()->groupBy('cat_id');
        return view('Services',['servicesAsome' => $subcats]);
    }
}
