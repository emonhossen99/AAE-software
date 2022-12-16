<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCatModel;

class RegisterController extends Controller
{
    function Register(){
        $subcats = SubCatModel::with(['category'])->get()->groupBy('cat_id');
        return view('Register',['servicesAsome' => $subcats]);
    }
}
