<?php

namespace App\Http\Controllers;

use App\Url;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CenterController extends Controller
{

	//网站维护
	public function weihu()
	{
		return '网站维护中！！！';
	}
	/**
	 * 个人中心
	 * [index description]
	 * @return [type] [description]
	 */
	public function index(Request $request)
	{
		$users = $request->session()->all();
		// $password = Hash::check($request->password);
		// dd($users);

		return view('home.center.index',['users'=>$users]);
	}

	/**
	 * 我的资料
	 */
	public function ziliao(Request $request)
	{
		
		$users = $request->session()->all();
		
		//$users = User::all();
		
		//dd($users);


		return view('home.center.ziliao.index',['users' =>$users]);
		
	}















	public function dizhi()
	{
		$uid = \Session::get('id');
		$url = Url::all();

		return view('home.center.dizhi.create',compact('dizhi'));
	}

	/*public function ywb()
	{
		return view('home.center.ywb');
	}*/
}