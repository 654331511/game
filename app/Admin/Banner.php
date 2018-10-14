<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';
    public $timestamps = false;
    protected $fillable=['image','hometitle','url'];
}
