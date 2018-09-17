<?php

namespace App\Http\Controllers;

use App\Car;
use App\Url;
use App\User;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $urls = Url::where('sname',\Session::get('name'))->get();
        
        $cars = Car::where('username',$request->session()->get('name'))->count();
       
        return view('home.center.dizhi.create', ['urls' =>$urls,'cars'=>$cars]);
        //读取数据库 获取用户数据
        /*
        $url = Url::orderBy('id','asc')
            ->where('shname','like', '%'.request()->keywords.'%')
            ->get();
        */
        //解析模板显示用户数据
        //return view('home.center.url', ['url'=>$url]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.center.dizhi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $urls = new Url;
        $urls->uname = $request->uname;
        $urls->stel = $request->stel;
        $urls->xurl = $request->xurl;
        $urls -> sheng = $request->sheng;
        $urls -> shi = $request->shi;
        $urls -> qu = $request->qu;
        $urls -> user_id = \Session::get('id');
        $urls ->sname =  \Session::get('name');

        // dd($urls);
        if($urls -> save()){
            return back()->with('success', '添加成功');
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
        /*
        $url = Url::findOrFail($id);

        return view('home.center.url', ['url'=>$url]);
        */
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
        /*
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
        */    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $urls = Url::findOrFail($id);

        if($urls->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败!');
        }
    }
}
