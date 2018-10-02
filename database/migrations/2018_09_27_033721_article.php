<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Article extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //文章表
        Schema::create('article',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('homepage')->comment('首页图片');
            $table->string('hometitle')->comment('首页标题');
            $table->string('sort')->comment('文章分类');
            $table->string('homecon')->comment('首页描述');
            $table->string('title')->comment('文章标题');
            $table->text('content')->comment('文章内容');
            $table->string('source')->comment('文章来源');
            $table->string('author')->comment('文章作者');
            $table->integer('clicks')->comment('点击量');
            $table->timestamp('time')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('添加时间');
            $table->integer('check')->default(1)->comment('审核,默认1');
            $table->integer('slide')->default(0)->comment('轮播,默认0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
