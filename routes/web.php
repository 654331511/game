<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//前台路由
Route::get('/', 'IndexController@index');//主页
Route::get('/{page}', 'IndexController@index')->where('page','[0-9]+');//翻页
Route::get('/news/{id}','NewsController@news');//文章页
Route::get('/danmu','NewsController@danmu');//弹幕
Route::get('/ulogin','UserController@ulogin');//用户登录
Route::get('/register','UserController@register');//用户注册
Route::post('/registercheck','UserController@registercheck');//注册验证
Route::post('/ucheck','UserController@ucheck');//用户登录验证
Route::get('/logout','UserController@logout');//退出登录
Route::get('/comment','NewsController@getcomment');//获取评论
Route::post('/insertcomment','NewsController@insertComment');//发布评论


//后台路由
Route::group(['middleware' => ['adminlogin']],function () {
  Route::get('/man', function () {
      return view('man.index');
  });
  Route::get('/add', 'Admin\AddController@index');
  Route::post('/insert', 'Admin\AddController@insert');
  Route::get('/adv', 'Admin\AdvController@index');//轮播页控制器
  Route::post('/banneradd', 'Admin\AdvController@insert');
  Route::get('/book', function () {
      return view('man.book');
  });
  Route::get('/cate', function () {
      return view('man.cate');
  });
  Route::get('/cateedit', function () {
      return view('man.cateedit');
  });
  Route::get('/column', function () {
      return view('man.column');
  });
  Route::get('/info', function () {
      return view('man.info');
  });
  Route::get('/list', function(){
      return view('man.list');
  });
  Route::get('/page', function () {
      return view('man.page');
  });
  Route::get('/pass', function () {
      return view('man.pass');
  });
  Route::get('/tips', function () {
      return view('man.tips');
  });
});
Route::get('/adlogin', 'Admin\LoginController@index');//后台登录
Route::post('/login', 'Admin\LoginController@login');//登录验证
Route::get('/adminout', 'Admin\LoginController@adminout');//退出登录
