<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\Article;
use App\Admin\Banner;

class IndexController extends Controller
{
      //主页
      public function index()
      {
          $banner = Banner::select(['image','hometitle','url'])->where('check',1)->orderBy('id','desc')->take(5)->get();
          $res = Article::select(['id','homepage','hometitle','homecon','time'])->where('check',1)->paginate(10);
          return view('index')->with('content',$res)->with('banner',$banner);
      }
}
