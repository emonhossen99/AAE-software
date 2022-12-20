<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCatModel;
use App\Models\subCatDetailsModel;
use Illuminate\Support\Facades\Validator;

class SubCatDetailsController extends Controller
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
        return view('admit.subCatdetalis.subCatdetalis', ["data" => $subcats]);
    }

    public function getSubCat($id)
    {

        $subcats = SubCatModel::join('cat_table', '_sub_cat_table.cat_id', '=', 'cat_table.id')
            ->select('_sub_cat_table.*', 'cat_table.cat_name')->where('cat_table.id', $id)
            ->get();
        return response()->json($subcats);
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
      $subCatTable = new subCatDetailsModel();
      $subCatTable->cat_id = $req->cat_id;
      $subCatTable->sub_cat_id= $req -> sub_cat_id;
      $subCatTable->overview = $req -> overview;
      $subCatTable->who_learn_course = $req -> who_learn_course;
      $subCatTable->certification= $req -> certification;
      $subCatTable->who_course_for = $req -> who_course_for;
      $subCatTable->modules = $req -> modules;
      $subCatTable->highlight = $req -> highlight;
      $subCatTable->software = $req -> software;
      $subCatTable->career = $req -> career;
      $subCatTable->topics = $req -> topics;
      $subCatTable->images = $req -> images;
      $subCatTable->after_price = $req -> after_price;
      $subCatTable->before_price = $req -> before_price;
      $subCatTable->class = $req -> class;
      if ($req->hasfile('images')) {
        $file = $req->file('images');
        echo $file;
        $extenstion = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extenstion;
        $file->move('uploads/couresImages/', $filename);
        $subCatTable->images = $filename;
    }														
    //   $subCatTable->save();
        echo  $req->file() ;
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
