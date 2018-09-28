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
Route::get('/zhuanmai','PhoneController@zhuanmai');
//登录路由
Route::get('/admin/login','AdminController@login');
//登录操作
Route::post('/admin/login','AdminController@dologin');

//用户管理
Route::group(['middleware'=>'admin'],function(){
	//后台路由

	//后台首页路由
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
	//广告管理
	Route::resource('advert','AdvertController');
	//退出登录
	Route::get('/admin/logout','AdminController@logout');
	//地址管理
	Route::resource('/url','UrlController@create');
	 //意见反馈后台
	Route::get('/hyjfk','PhoneController@hyjfk');
	//广告管理
	Route::resource('advert','AdvertController');
	//后台订单管理
	Route::resource('indent','IndentController');
});


//网站维护的路由
Route::get('/weihu','CenterController@weihu');
//网站维护路由组
Route::group(['middleware'=>'weihu'],function(){
	//前台路由
	
	//详情页
	Route::get('/{id}.html', 'PhoneController@show');
	//列表页
	Route::get('phones', 'PhoneController@list');
	//首页
	Route::get('/','PhoneController@shouyei');
	//前台购物车添加
	Route::post('add/{id}','PhoneController@add');
	//购物车商品删除
	Route::get('delete/{id}','PhoneController@delete');
	//购物车详细信息补全
	Route::post('save','PhoneController@save');
	//付款
	Route::get('fukuan','PhoneController@fukuan');
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
	//我的资料
	Route::get('/center/ziliao/{id}','CenterController@ziliao');
	//修改密码页面
	Route::get('/center/mima','CenterController@mima');
	//修改密码操作
	Route::put('/center/mima/save/{id}','CenterController@save');
	//我的地址
	Route::resource('/center/url','UrlController');
	//我的评价
    Route::get('/center/pingjia','PingjiaController@index');
    //去评价
    Route::get('/center/xiangqing','PingjiaController@create');
    //我的消息
    Route::get('/center/xiaoxi','PingjiaController@show');

	//我的资料更新
	Route::put('/center/ziliao/{id}', 'CenterController@update');
	//意见反馈的增加 
	Route::post('/ycreate','PhoneController@ycreate'); 
	//后台意见反馈的增加
	Route::post('/ycreate','PhoneController@ycreate');
	//后台意见反馈的删除
	Route::delete('/yjfk/{id}','PhoneController@scyjfk');
	//意见反馈前台
	Route::get('/yjfk','PhoneController@yjfk');


});	





