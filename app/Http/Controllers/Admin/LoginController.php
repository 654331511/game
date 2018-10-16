<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\User;
use Cookie;

class LoginController extends Controller
{
    public function index()
    {
        return view('man.login');
    }
    public function login(Request $request)
    {
        if ($request->input('name') == '' || $request->input('password') == '') {
            return '用户名和密码不能为空';
        }else {
            $users = User::where('name',$request->input('name'))->first();
            if (md5($request->input('password')) == $users->password){
                $admin = $users->isadmin()->get();
                if (!$admin->isEmpty()) {
                    Cookie::queue('admin',$admin,10080);
                    return redirect('/man');
                }else {
                    return '无权登录';
                }
            }else {
                return '密码错误';
            }
        }
    }
    public function adminout()
    {
        Cookie::queue(Cookie::forget('admin'));
        return redirect('/adlogin');
    }
}
