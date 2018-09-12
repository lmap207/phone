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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//用户管理
Route::resource('user','UserController');

//手机
Route::resource('phone', 'PhoneController');

//参数
Route::resource('parameter', 'ParameterController');

//型号
Route::resource('xinghao', 'XinghaoController');

//网络类型
Route::resource('type', 'TypeController');

//颜色
Route::resource('color', 'ColorController');

//品牌
Route::resource('brand', 'BrandController');

//内存
Route::resource('memory', 'MemoryController');


//前台路由
//详情页
Route::get('/{id}.html', 'PhoneController@show');
//列表页
Route::get('phones', 'PhoneController@list');
//首页
Route::get('/','PhoneController@shouyei');
//前台购物车添加
Route::post('add/{id}','PhoneController@add');

//前台添加购物车到数据库

Route::get('tianjia','PhoneController@tianjia');
//验证码
Route::get('/captcha/{tmp}','PhoneController@captcha');




//后台路由
Route::get('/admin', 'AdminController@index');
//登录路由
Route::get('/admin/login','AdminController@login');
//登录操作
Route::post('/admin/login','AdminController@dologin');
//退出登录
Route::get('/admin/logout','AdminController@logout');


