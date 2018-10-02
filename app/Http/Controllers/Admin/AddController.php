<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Sort;
use App\Admin\Article;
class AddController extends Controller
{
      public function index()
      {
          $sort = Sort::all();
          $name = array();
          foreach ($sort as $key) {
              array_push($name,$key->name);
          }
          return view('man.add',['sortname' => $name]);
      }
      public function insert(Request $request)
      {
          $all = $request->all();
          $pic = $request->file('homepage');
          $name = $pic->getClientOriginalName();
          $ext= $pic->getClientOriginalExtension();
          $fileName = md5(uniqid($name));
          $fileName = $fileName.'.'.$ext;
          $pic->move('./uploads/',$fileName);
          $all['homepage'] = '/uploads/'.$fileName;
          $res = Article::create($all);
          if ($res) {
              return '发布成功';
          }else {
              return '发布失败';
          }
      }
}
