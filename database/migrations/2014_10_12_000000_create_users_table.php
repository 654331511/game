<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //用户表
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
        //角色表
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->default('');
            $table->string('name',30)->default('');
        });
        //权限表
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->default('');
            $table->string('name',30)->default('');
        });
        //角色权限表
        Schema::create('permission_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role_id');
            $table->string('permission_id');
        });
        //用户角色表
        Schema::create('role_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role_id');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('permission_roles');
        Schema::dropIfExists('role_user');
    }
}
