<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\Article;
class IndexController extends Controller
{
      public function index()
      {
          $res = Article::select(['id','homepage','hometitle','homecon','time'])->where('check',1)->paginate(5);
          return view('index',['content' => $res]);
      }
      public function news($id)
      {
          $newsinfo = Article::select(['title','content','source','author','clicks','time','check'])->where('id',$id)->get();
          return view('news',['newsinfo' => $newsinfo]);
      }
}
