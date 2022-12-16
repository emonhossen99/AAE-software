<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoryModel;
use App\Models\SubCatModel;

class SubCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $subcats = SubCatModel::with(['category'])->get()->groupBy('cat_id');
            // dd($subcats);
            return view('admit.subCatAdmit.subCat',["data"=> $subcats]);
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
        $cat_id = $req -> cat_id;
        $sub_cat_name = $req->sub_cat_name;  
        $insetSubTable = new SubCatModel();
        $insetSubTable->cat_id = $cat_id;
        $insetSubTable->sub_cat_name = $sub_cat_name;
        $insetSubTable->save();
        return redirect('/subcats');
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
  
        $cat_model = new SubCatModel();
        $cat_data = $cat_model->where('id', $id)->get();
        return view('admit.subCatAdmit.subCatupdate',['cat_data' => $cat_data]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $cat_data)
    {
        $sub_cat_name = $req -> update_cat;
        $cat_model = SubCatModel::find($cat_data);
        $cat_model->sub_cat_name = $sub_cat_name;
        $cat_model->save();
        return redirect('/subcats');
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
        $cat_delete = SubCatModel::find($cat_id);
        $cat_delete->delete();
        return redirect('/subcats');
    }
}
