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
      public function danmu()
      {
          // $array = array('msg'=>'添加失败!','status'=>'false');
          // return json_encode($array);
          $barrages=
          array(
          	array(
          		'info'   => '第一条弹幕',
              'color'  =>  '#FFFFFF',
          		),
          	array(
          		'info'   => '第二条弹幕',
          		'color'  =>  '#FFFFFF',
          		),
          	array(
          		'info'   => '第三条弹幕',
          		'bottom' => 70 ,
              'color'  =>  '#FFFFFF',

          		),
          	array(
          		'info'   => '第四条弹幕',
          		'close'  =>false,
              'color'  =>  '#FFFFFF',
          		),
          	);
          echo  json_encode($barrages[array_rand($barrages)]);
      }
}
