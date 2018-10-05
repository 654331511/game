<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('a_id')->comment('文章ID');
            $table->integer('pid')->default(0)->comment('上级评论ID,若是顶级评论则为0');
            $table->string('name')->comment('评论人');
            $table->text('info')->comment('评论内容');
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
        Schema::dropIfExists('comment');
    }
}
