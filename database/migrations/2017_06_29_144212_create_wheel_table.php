<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWheelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wheel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('picname',200);//轮播图描述
            $table->string('picurl',200);//轮播图名字
            $table->increments('sort');//轮播图顺序
            $table->string('path',255);//轮播图路径
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
        Schema::drop('wheel');
    }
}
