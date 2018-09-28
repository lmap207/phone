<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class IndentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy('id','asc')
            ->where('username','like', '%'.request()->keywords.'%')
            ->paginate(10);

        return view('admin.indent.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('admin.indent.edit',['id'=>$id]);
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
        $cars = Car::findOrFail($id);
        
        $cars -> dizhi = $request ->dizhi;

        
        if($cars -> save()){
            return redirect('/indent')->with('success', '回复成功');
        }else{
            return back()->with('error','回复失败');
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
        $cars = Car::findOrFail($id);

        if($cars -> delete()){
            return redirect('/indent')->with('success', '删除成功');
        }else{
            return back()->with('error','删除失败');
        } 
    }
}
