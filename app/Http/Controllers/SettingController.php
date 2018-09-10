<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //

     public function update(Request $request)
    {
        //

            $setting = Setting::first();
//dd($setting);
        if(!$setting){
            $setting = new Setting;
        }

        $setting -> title = $request->title;
        $setting -> sopen = $request->sopen;
        $setting -> keyword = $request->keyword;
        //dd($setting->sopen);
        //$setting->logo = '/'.$request->logo->store('uploads');

        if ($request->hasFile('logo')) {
            $setting->logo = '/'.$request->logo->store('uploads');
        }

        
        if($setting->save()){
            return back()->with('success','设置成功');
        }else{
            return back()->with('error','设置失败!!');
        }
    }

    public function setting()
    {
            $setting = Setting::first();
        //echo 111;
        return view('admin.setting', compact('setting'));
    }
}
