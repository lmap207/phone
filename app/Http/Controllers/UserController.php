<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
          $users = User::orderBy('id','asc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->paginate(5);
        //解析模板显示用户数据
        return view('admin.user.index', ['users'=>$users]);
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
    
        if ($request->hasFile('pic')) {
            $user->pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }    
        //单向加密
        //验证密码是否正确见手册
        $user->password = Hash::make($request->password);
        //如果添加成功进行跳转  并做一下闪存   给用户一个提醒
        if($user ->save()){
            return redirect('/user')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          //获取用户的信息
        $user = User::findOrFail($id);
        //解析模板显示数据
        return view('admin.user.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //获取用户的信息
        $user = User::findOrFail($id);

        //更新
        $user -> name = $request->name;
         if ($request->hasFile('pic')) {
            $user->pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }

        if($user->save()){
            return redirect('/user')->with('success','更新成功');
        }else{
            return back()->with('error','更新失败');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $user = User::findOrFail($id);

        if($user->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败!');
        }
    }

   
}
