<?php

namespace App\Http\Controllers;

use App\Models\categoryModel;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getData = new categoryModel();
        $cat_data = $getData->get();
        return view('admit.category', ['getData' => $cat_data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $main_cat = $req->main_category;
        $insert_data = new categoryModel();
        $insert_data->cat_name = $main_cat;
        $insert_data->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat_model = new categoryModel();
        $cat_data = $cat_model->where('id', $id)->get();
        // dd($cat_data[0]['cat_name']);
        return view('admit.categoryupdate', ['getData' => $cat_data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $getData)
    {

        $cat_name = $req -> update_cat;
        $cat_model = categoryModel::find($getData);
        $cat_model->cat_name = $cat_name;
        $cat_model->save();
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat_id = $id;
        $cat_delete = categoryModel::find($cat_id);
        $cat_delete->delete();
        return redirect('/category');
    }
}

