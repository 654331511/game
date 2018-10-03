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
Route::get('/', 'IndexController@index');
Route::get('/{page}', 'IndexController@index')->where('page','[0-9]+');
Route::get('/news/{id}','IndexController@news');
Route::get('/danmu','IndexController@danmu');
//后台路由
Route::get('/man', function () {
    return view('man.index');
});
Route::get('/add', 'Admin\AddController@index');
Route::post('/insert', 'Admin\AddController@insert');
Route::get('/adv', function () {
    return view('man.adv');
});
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
Route::get('/adlogin', 'Admin\LoginController@index');
Route::post('/login', 'Admin\LoginController@login');
Route::get('/page', function () {
    return view('man.page');
});
Route::get('/pass', function () {
    return view('man.pass');
});
Route::get('/tips', function () {
    return view('man.tips');
});
