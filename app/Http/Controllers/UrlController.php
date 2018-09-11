<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        $url = Url::orderBy('id','asc')
            ->where('shname','like', '%'.request()->keywords.'%')
            ->get();
        //解析模板显示用户数据
        return view('home.center.url', ['url'=>$url]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = new Url;

        $url -> user_id = $request->user_id;
        $url -> shname = $request->shname;
        $url -> shtel = $request->shtel;
        $url -> shadd = $request->shadd;
        $url -> xadd = $request->xadd;

        if($url -> save()){
            return redirect('/url')->with('success', '添加成功');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $url = Url::findOrFail($id);

        return view('home.center.url', ['url'=>$url]);
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
        $url = Url::findOrFail($id);
        
        $url -> shname = $request -> shname;
        $url -> shtel = $request->shtel;
        $url -> shadd = $request->shadd;
        $url -> xadd = $request->xadd;
        
        if($url -> save()){
            return redirect('/url')->with('success', '更新成功');
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
         $url = Url::findOrFail($id);

        if($url -> delete()){
            return redirect('/url')->with('success', '删除成功');
        }else{
            return back()->with('error','删除失败');
        }   
    }
}
