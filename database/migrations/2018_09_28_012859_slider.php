<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Slider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('slider',function(Blueprint $table)
      {
          $table->increments('id');
          $table->string('sliderimg')->comment('轮播图片');
          $table->string('slidertitle')->comment('轮播标题');
          $table->string('url')->comment('轮播url');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider');
    }
}
