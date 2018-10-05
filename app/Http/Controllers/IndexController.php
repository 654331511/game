<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\Article;
use App\Admin\Comment;
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
      public function danmu(Request $request)
      {
          $id = $request->input('id');
          $comment = Comment::select(['info'])->where('pid',0)->where('a_id',$id)->get();
          $num = rand(0,count($comment)-1);
          for ($i=0; $i <count($comment) ; $i++) {
              $comment[$i]['color'] = '#FFFFFF';
          }
          return $comment[$num];
      }
}
