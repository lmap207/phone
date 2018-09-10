<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin');
    }

    public function login(){
    	return view('admin.login');
        
    }

    public function dologin(Request $request){
            //获取用户的数据
        $user = User::where('username', $request->username)->first();

        if(!$user){
            return back()->with('error','登陆失败!');
        }
        //校验密码
        if(Hash::check($request->password, $user->password)){
            //写入session
            session(['username'=>$user->username, 'id'=>$user->id]);
            return redirect('/admin')->with('success','登陆成功');
        }else{
            return back()->with('error','登陆失败!');
        
        }
    }
        //退出登录
      public function logout(Request $request)
      {
        $request->session()->flush();
        return redirect('/admin/login')->with('success','退出成功');
      }          
}
