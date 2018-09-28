<?php
namespace App\Http\Controllers;
use App\Advert;
use App\Brand;
use App\Car;
use App\Color;
use App\Memory;
use App\Parameter;
use App\Phone;
use App\Setting;
use App\Type;
use App\Url;
use App\Xinghao;
use App\Yjfk;
use App\link;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;



class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
    $phones = Phone::orderBy('id','desc')
            ->where('pname','like', '%'.request()->keywords.'%')
            ->paginate(10);
   
        //解析模板显示用户数据
        return view('admin.phone.index', ['phones'=>$phones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $brand = Brand::all();
        //型号
        $xinghao = Xinghao::all();
        //手机类型
        $type = Type::all();
        //颜色
        $color = Color::all();
         //
        $memory = Memory::all();

        return view('admin.phone.create', compact('brand','xinghao','type','color','memory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phones = new Phone;

        $phones -> pname = $request -> pname;
        $phones -> brand_id = $request -> brand_id;
        $phones -> xinghao_id = $request -> xinghao_id;
        $phones -> color_id = $request -> color_id;
        $phones -> memory_id = $request -> memory_id;
        $phones -> type_id = $request -> type_id;
        $phones -> money = $request -> money;
        $phones -> content = $request -> content;

        if ($request->hasFile('pic')) {
            $phones->pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }

        if($phones->save()){
            return redirect('/phone')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $phones = Phone::findOrFail($id);
        $phones->view += 1;
        $phones -> save();
        $types = Type::all();
        $colors = Color::all();
        $memorys = Memory::all();


        //$views = Phone::orderBy('views','desc')->take(8)->get();
        // $recoms = Article::where('recom','1')->take(8)->orderBy('id','desc')->get();

        //if($request->id == Parameter::all(); 
        // dd($parameters);

        $parameters=Parameter::where('phone_id',$id)->first();

        $cars = Car::where('username',$request->session()->get('name'))->count();
        $recoms = Phone::where('recom','1')->take(6)->orderBy('id','desc')->get();
        return view('home.shop.xiangqi', compact('phones','types','colors','memorys','cars','parameters','recoms'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phones = Phone::findOrFail($id);

        $brand = Brand::all();
        $xinghao = Xinghao::all();
        $type = Type::all();
        $color = Color::all();
        $memory = Memory::all();

        return view('admin.phone.edit', compact('phones','brand','xinghao','type','color','memory'));

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
        $phones = Phone::findOrFail($id);

        $phones -> pname = $request -> pname;
        $phones -> brand_id = $request -> brand_id;
        $phones -> xinghao_id = $request -> xinghao_id;
        $phones -> color_id = $request -> color_id;
        $phones -> memory_id = $request -> memory_id;
        $phones -> type_id = $request -> type_id;
        $phones -> money = $request -> money;
        $phones -> content = $request -> content;

        if ($request->hasFile('pic')) {
            $phones->pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }

        if($phones->save()){
            return redirect('/phone')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败!');
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
        $phones = Phone::findOrFail($id);

        if($phones->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败!');
        }
    }

    /**
     * 商品列表
     */
    public function list(Request $request)
    {   

        $phones = Phone::all();
        $brands = Brand::all();
        //推荐
        $recoms = Phone::where('recom','1')->take(5)->orderBy('id','desc')->get();
        //排行
        $views = Phone::orderBy('view','desc')->take(5)->get();

        if(!empty($request->brand_id)){
            $phones = Phone::where('brand_id', $request->brand_id)->orderBy('id','desc')->paginate(10);
        }

        $cars = Car::where('username',$request->session()->get('name'))->count();
        return view('home.shop.list', ['phones' => $phones, 'brands' => $brands, 'recoms'=>$recoms,'cars'=>$cars,'views'=>$views]);

    }

    /**
     * 商品首页
     */
    public function shouyei(Request $request)
    {
        $adverts=Advert::first();
        $recoms=Phone::where('recom','1')->take(6)->orderBy('id','desc')->get();
        $links = link::all();
        $settings = Setting::all();
        $shoujis = Phone::take(8)->orderBy('id','desc')->get();
        $cars = Car::where('username',$request->session()->get('name'))->count();
        $phones = Phone::all();
        return view('home.shouyei',compact('links','settings','shoujis','adverts','recoms','cars','phones'));  
    }

   /*
   *购物车添加
   */
    public function add(Request $request,$id)
    {
       
        $tname_id = $request ->tname;

        $cars = new Car;
       

        $tname = Type::findOrFail($tname_id);

        $cars->tname = $tname->tname;

        $color_id = $request ->cname;

        $cname = Color::findOrFail($color_id);
         
        $cars->cname = $cname->cname;
        $mname_id = $request ->mname;

        $mname = Memory::findOrFail($mname_id);
        $cars->mname = $mname->mname;

        $cars->shuliang = $request ->shuliang;

        $cars->phone_id = $id;

        $phones = Phone::findOrFail($id);

        $cars->money = intval($phones['money'])* intval($request->shuliang);


        $username = $request->session()->get('name');

        $cars->username = $username;
  
       if($cars->save()){

          return redirect('/tianjia');
       }else{

         return back();
       }      

        
    }

    /*
    *添加购物车到数据库
    */
    public function tianjia(Request $request)
    {
       
       
       $cars = Car::where('username',$request->session()->get('name'))->get();

       $data = $cars->ToArray();
       $money = 0;
       
       foreach($data as $v){
        
        
        $money += $v['money'];
       }
       
        $dizhis = Url::where('sname',\Session::get('name'))->orderBy('id','desc')->first();    

        return view('home.shop.dingdan',compact('cars','money','dizhis'));

    }

    /*
    * 购物车里的表补全详细信息
    */
    public function save(Request $request)
    {

       $cars = DB::table('cars')->where('username',\Session::get('name') )->update(['xxxx' => request()->xxxx]);
        return view('home.shop.fukuan');
    }

    /*
    * 付款
    */
    public function fukuan(Request $request)
    {
        
        $cars = Car::where('username',$request->session()->get('name')); 
        return view('home.shop.fukuan',compact('cars'));
    }

    /*
    *删除购物车商品
    */
    
     public function delete($id)
     {

         $cars = Car::findOrFail($id);

        if($cars->delete()){
            return back();
        }else{
            return back();
        }
     }
    public function captcha($tmp)

    {

    //生成验证码图片的Builder对象，配置相应属性

    $builder = new CaptchaBuilder;

    //可以设置图片宽高及字体

    $builder->build($width = 100, $height = 40, $font = null);

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



public function dologin(Request $req){

    //根据用户名读数据库

    $user=User::where('name',$req->name)->first();

    $userInput = \Request::get('captcha');

     if(Session::get('milkcaptcha') == $userInput){
     
      return redirect('#')->with('success','登陆成功');

        

 }else{

    //echo '验证码错误';

    return back()->with('error','验证码错误');

    }
}

    //意见反馈
    public function yjfk()
    {
        return view('home.yjfk');    

    } 
    //意见反馈添加 
    public function ycreate(Request $request)
    {
        $yjfk = new Yjfk;
        
        $a = \Session::get('name');
        if(empty($a)){
            return back()->with('error','请先登录!!');
        }

        if($a == $request->uemail){
            $yjfk -> uemail = $request -> uemail;
            $yjfk -> yijian = $request -> yijian;

            if($yjfk->save()){
                return redirect('/')->with('success','添加成功');
            }else{
                return back()->with('error','添加失败');
            }
        }else{
            return back()->with('error','请输入你的用户名！！');
        }

    } 

    //后台意见反馈
    public function hyjfk()
    {
        $yjfks =Yjfk::orderBy('id','desc')
        ->where('uemail','like', '%'.request()->keywords.'%')
        ->paginate(10);
        
        return view('admin.yjfk.index',['yjfks'=>$yjfks]);
    }

    //后台意见反馈删除
    public function scyjfk($id)
    {
        $yjfks = Yjfk::findOrFail($id);

        if($yjfks->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败!');
        }
    }




    public function zhuanmai()
    {
        return view('home.shop.zhuanmai');
    }


}