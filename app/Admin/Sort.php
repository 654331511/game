<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Sort extends Model
{
    protected $table = 'sort';
    public $timestamps = false;
    public function getarticle()
    {
        return $this->hasMany('App\Admin\Article','sort');
    }
}
