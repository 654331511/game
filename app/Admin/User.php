<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    public $timestamps = false;
    public function isadmin()
    {
        return $this->hasOne('App\Admin\Role_user');
    }
}
