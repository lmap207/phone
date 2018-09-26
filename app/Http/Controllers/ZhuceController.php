<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Session; 

class ZhuceController extends Controller
{   
    //注册
    public function zhuce()
    {
        return view('home.zhuce');
    }
    
    //注册操作
    public function store(Request $request)
    {
        $user = new User;
        $user -> name = $request -> name;
        $user -> password = Hash::make($request->password);
        if($user -> save()){
            return redirect('/home/denglu')->with('success', '注册成功');
        }else{
            return back()->with('error','注册失败');
        }
    }
    
    //登录
    public function denglu()
    {
        return view('home.denglu');
    }
    
    //登陆操作
    public function dologin(Request $req)
    {
        //根据用户名读数据库
       
        $user=User::where('name',$req->name)->first();

        if($user == false){

             return back();
        }
        
        $userInput = \Request::get('captcha');


        $password = Hash::check($req->password,$user->password);

        if(Session::get('milkcaptcha') == $userInput){
            if($user && $password){
                session(['name'=>$user->name,'id'=>$user->id,'password'=>$user->password,'pic'=>$user->pic]);
                return redirect('/')->with('success','登陆成功');
            }else{
                return back()->with('error','用户名或密码错误');
            }
         }else{
        //     //echo '验证码错误';
            return back()->with('error','验证码错误');
         }

    }

    
    //验证码
    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 250, $height = 60, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
 
        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //dd($a);


        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        ob_clean();
        header('Content-Type: image/jpeg');
        $builder->output();
    }

    /*
     * 退出登录 
     */
    public function tuichu(Request $request)
    {
        $request->session()->flush();
        return redirect('/')->with('success','退出成功');
    }

}