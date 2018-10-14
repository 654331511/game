<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Banner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('image')->comment('轮播图片');
            $table->string('hometitle')->comment('轮播标题');
            $table->string('url')->comment('轮播链接');
            $table->integer('check')->default(1)->comment('是否轮播,默认1');
            $table->timestamp('time')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('添加时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('banner');
    }
}
