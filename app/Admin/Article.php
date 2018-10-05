<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    public $timestamps = false;
    protected $fillable=['homepage','hometitle','sort','homecon','title','content','source','author','clicks'];
    public function getcomment()
    {
        return $this->hasMany('App\Admin\Comment','a_id');
    }
}
