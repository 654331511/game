<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use App\Admin\Article;
use App\Admin\Comment;
use App\Admin\User;
class IndexController extends Controller
{
      //主页
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
      //用户登录
      public function ulogin($value='')
      {
          return view('ulogin');
      }
      //登录验证
      public function ucheck(Request $request)
      {
        if ($request->input('name') == '' || $request->input('password') == '') {
            return '用户名和密码不能为空';
        }else {
            $users = User::where('name',$request->input('name'))->first();
            if (md5($request->input('password')) == $users->password){
                  $cookie = Cookie::queue('username',$request->input('name'),10080);
                  return redirect('/');
                }else {
                      return '密码错误';
                }
        }
      }
      //退出
      public function logout()
      {
          Cookie::queue(Cookie::forget('username'));
          return redirect('/');
      }
}
