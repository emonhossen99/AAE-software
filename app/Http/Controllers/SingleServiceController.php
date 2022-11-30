<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleServiceController extends Controller
{
    function SingleService($id){
        return view('SingleService',['idKey' => $id]);
    }
}
