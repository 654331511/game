<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Banner;

class AdvController extends Controller
{
    public function index()
    {
        return view('man.adv');
    }
    public function insert(Request $request)
    {
        $all = $request->all();
        $pic = $request->file('image');
        $name = $pic->getClientOriginalName();
        $ext= $pic->getClientOriginalExtension();
        $fileName = md5(uniqid($name));
        $fileName = $fileName.'.'.$ext;
        $pic->move('./uploads/',$fileName);
        $all['image'] = '/uploads/'.$fileName;
        $res = Banner::create($all);
        if ($res) {
            return '发布成功';
        }else {
            return '发布失败';
        }
    }
}
