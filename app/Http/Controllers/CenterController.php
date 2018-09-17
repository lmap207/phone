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
		return view('home.center.index',['users'=>$users]);
	}


	/**
	 * 我的资料
	 */
	public function ziliao(Request $request, $id)
	{
		$users = $request->session()->all();
		
		$users = User::findOrFail($id);

		return view('home.center.ziliao.index',['users' =>$users]);
		
	}

	/**
	 * 我的资料更新
	 */
	public function update(Request $request, $id)
	{
       	$users = User::findOrFail($id);
       	$users -> name = $request -> name;
       	$users -> age = $request -> age;
		$users -> sex = $request -> sex;
		$users -> tel = $request -> tel;
		$users -> emil = $request -> emil;
		$users -> xueli = $request -> xueli;
		$users -> gongzuo = $request -> gongzuo;
		$users -> csny = $request -> csny;
		$users -> jtdz = $request -> jtdz;
		if ($request->hasFile('pic')) {
            $users->pic = '/'.$request->pic->store('uploads');
        }

        if($users->save()){
            return back()->with('success','设置成功');
        }else{
            return back()->with('error','设置失败!!');
        }

	}

}