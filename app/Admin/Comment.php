<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    public $timestamps = false;
    protected $fillable=['a_id','pid','name','info'];
    public function article()
    {
      return $this->belongsTo('Admin\App\Article');
    }

    public function replys()
    {
        return $this->hasMany('Admin\App\Comment', 'pid');
    }
}
