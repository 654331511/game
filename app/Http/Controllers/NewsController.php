<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\Article;
use App\Admin\Comment;
use Cookie;
class NewsController extends Controller
{
    //显示文章
    public function news($id)
    {
        $newsinfo = Article::select(['id','title','content','source','author','clicks','time','check'])->where('id',$id)->get();
        $title = $newsinfo[0]['title'];//获取标题
        $comment = $this->getcomment($id);//获取评论
        $num = count($comment);
        return view('news')->with("newsinfo",$newsinfo)->with("title",$title)->with("comment",$comment)->with("num",$num);
    }

    //获取弹幕
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

    //获取评论
    public function getcomment($id)
    {
        $comments = Comment::where('pid', 0)->where('a_id',$id)->orderBy('time', 'desc')->get();
        return $comments;
    }

    //添加评论
    public function insertComment(Request $request)
    {
        if (!Cookie::get('username')) {
            return 2;
        }else {
            $all = $request->all();
            $all['name'] = Cookie::get('username');
            $res = Comment::create($all);
            if ($res) {
                return 1;
            }else {
                return 0;
            }
        }
    }
}
