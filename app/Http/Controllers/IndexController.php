<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use App\Admin\Article;
use App\Admin\User;

class IndexController extends Controller
{
      //主页
      public function index()
      {
          $res = Article::select(['id','homepage','hometitle','homecon','time'])->where('check',1)->paginate(10);
          return view('index',['content' => $res]);
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
