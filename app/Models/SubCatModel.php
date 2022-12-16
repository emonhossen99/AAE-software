<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCatModel extends Model
{
    use HasFactory;
    protected $table = '_sub_cat_table';
    function category(){
        return $this->belongsTo(categoryModel::class,'cat_id');
    }
}
