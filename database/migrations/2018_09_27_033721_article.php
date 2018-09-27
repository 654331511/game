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
            $table->string('title')->comment('文章标题');
            $table->text('content')->comment('文章内容');
            $table->string('source')->comment('文章来源');
            $table->string('author')->comment('文章作者');
            $table->integer('clicks')->comment('点击量');
            $table->timestamp('time')->comment('添加时间');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
