<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCatModel;

class ContactController extends Controller
{
    function ContactMe(){
        $subcats = SubCatModel::with(['category'])->get()->groupBy('cat_id');
        return view('Contact',['servicesAsome' => $subcats]);
    }
}
