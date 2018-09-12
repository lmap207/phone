
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
//登录路由
Route::get('/admin/login','AdminController@login');
//登录操作
Route::post('/admin/login','AdminController@dologin');

//用户管理
Route::group(['middleware'=>'admin'],function(){
//后台路由
Route::get('/admin', 'AdminController@index');
//用户管理
Route::resource('user','UserController');
//手机管理
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

//友情链接
Route::resource('link','LinkController');
// 设置
Route::get('/admin/settings', 'SettingController@setting');
Route::post('/admin/settings', 'SettingController@update');
//地址管理
Route::resource('/url','UrlController@create');
 //意见反馈后台
Route::get('/hyjfk','PhoneController@hyjfk');
//广告管理
Route::resource('advert','AdvertController');
//退出登录
Route::get('/admin/logout','AdminController@logout');
});
//前台路由
//详情页  
Route::get('/{id}.html', 'PhoneController@show');
//列表页
Route::get('phones', 'PhoneController@list');
//首页
Route::get('/','PhoneController@shouyei');
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
//注册
Route::get('/home/zc','ZhuceController@zhuce');
//验证注册
Route::post('/home/zhuce','ZhuceController@store');
//登录
Route::get('/home/denglu','ZhuceController@denglu');
Route::get('/captcha/{tmp}','ZhuceController@captcha');
//验证登录
Route::post('/','ZhuceController@dologin');
//退出登录
Route::get('home/logout','ZhuceController@tuichu');
//个人中心
Route::get('/center','CenterController@index');
//我的资料
Route::get('/center/ziliao','CenterController@ziliao');
//我的地址
Route::resource('/center/url','UrlController');
//个人中心
Route::get('/center','CenterController@center');
Route::get('/center/url','CenterController@url');
Route::get('/ywb','CenterController@ywb');
//意见反馈的增加
Route::post('/ycreate','PhoneController@ycreate');
//意见反馈前台
Route::get('/yjfk','PhoneController@yjfk');






