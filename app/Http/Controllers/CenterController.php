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
	 * 我的资料
	 */
	public function ziliao(Request $request, $id)
	{
		// $users = $request->session()->all();
		
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

	/**
	 * 修改密码
	 */
	public function mima()
	{
		// echo 'aaa';
		return view('home.center.mima.index');
	}

	public function save(Request $request, $id)
	{
		$users = User::findOrFail($id);

		if(!$users = Hash::check($request->jpassword,$users->password)){
			return back()->with('error','旧密码不正确');
		}else{
			$users = User::findOrFail($id);
			// dd($users);
			$users -> password = Hash::make($request->repassword);
			if($users->save()){
            	return back()->with('success','修改密码成功！！');
        	}else{
            	return back()->with('error','修改密码失败!!');
        	}
		}		

	}

}