<?php

namespace App\Http\Controllers;

use App\Advert;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        $adverts = advert::orderBy('id','asc')
            ->where('adname','like', '%'.request()->keywords.'%')
            ->get();
        //解析模板显示用户数据
        return view('admin.advert.index', ['adverts'=>$adverts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advert.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $advert = new Advert;

        $advert -> adname = $request->adname;
        $advert -> adcontent = $request->adcontent;
        $advert -> adtime = $request->adtime;
       if ($request->hasFile('adpic')) {
        $advert->adpic = '/'.$request->adpic->store('upload');
        }

        if($advert -> save()){
            return redirect('/advert')->with('success', '添加成功');
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
        $adverts = Advert::findOrFail($id);

        return view('admin.advert.edit', ['adverts'=>$adverts]);
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
        $adverts = Advert::findOrFail($id);
        
        $adverts -> adname = $request->adname;
        $adverts -> adcontent = $request->adcontent;
        $adverts -> adtime = $request->adtime;
       if ($request->hasFile('adpic')) {
        $adverts->adpic = '/'.$request->adpic->store('upload');
        }

        if($adverts -> save()){
            return redirect('/advert')->with('success', '更新成功');
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
         $adverts = Advert::findOrFail($id);
         
        if($adverts -> delete()){
            return redirect('/advert')->with('success', '删除成功');
        }else{
            return back()->with('error','删除失败');
        } 
    }
}
