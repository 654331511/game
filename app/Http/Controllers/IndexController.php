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
            return 1;//用户名密码为空
        }else {
            $users = User::where('name',$request->input('name'))->first();
            if (md5($request->input('password')) == $users->password){
                  $cookie = Cookie::queue('username',$request->input('name'),10080);
                  return 2;//登录成功
                }else {
                      return 3;//用户名或密码错误
                }
        }
      }
      //注册页面
      public function register()
      {
          return view('register');
      }
      //注册验证
      public function registercheck(Request $request)
      {
          $name = User::select(['name'])->where('name',$request->input('name'))->first();
          if ($name) {
              return 3;//用户已存在
          }else {
              $all = $request->all();
              $all['password'] = md5($all['password']);
              $res = User::create($all);
              if ($res) {
                  Cookie::queue('username',$request->input('name'),10080);
                  return 1;//注册成功
              }else {
                  return 2;//注册失败
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
