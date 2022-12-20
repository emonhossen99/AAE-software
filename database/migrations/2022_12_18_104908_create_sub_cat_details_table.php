<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCatDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_cat_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('cat_table');
            $table->integer('sub_cat_id')->unsigned();
            $table->foreign('sub_cat_id')->references('id')->on('_sub_cat_table');
            $table->longText('overview')->default('');
            $table->longText('who_learn_course')->default('');
            $table->longText('certification')->default('');
            $table->longText('who_course_for')->default('');
            $table->longText('modules')->default('');
            $table->longText('highlight')->default('');
            $table->longText('topics')->default('');
            $table->longText('software')->default('');
            $table->longText('career')->default('');
            $table->string('images')->default('');
            $table->string('after_price')->default('');
            $table->string('before_price')->default('');
            $table->string('class')->default('');
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
        Schema::dropIfExists('sub_cat_details');
    }
}
