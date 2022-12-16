<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCatTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_sub_cat_table', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id')->unsigned(); 
            $table->foreign('cat_id')->references('id') ->on('cat_table'); 
            $table->string('sub_cat_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_sub_cat_table');
    }
}
