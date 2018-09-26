@extends('layouts.home') @section('content')
<!DOCTYPE html>
<!-- saved from url=(0035)http://store.meizu.com/member/index -->
<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Access">
    <meta charset="utf-8">
    <meta name="viewport" content="width=1080">
    <title>会员中心-我的商城 魅族商城</title>
    <meta name="keywords" content="魅族魅族商城">
    <meta name="description" content="会员中心，我的商城">
    <!--<base href="http://store.meizu.com">-->
    <base href=".">
    <link rel="stylesheet" href="/qiantai/css/site-base.css">
    <link rel="stylesheet" href="/qiantai/css/aio.css">
    <!-- 表格 -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="site-header">
        <div class="mzcontainer">
            <div class="header-logo">
                <a href="/" target="_blank">
      <img src="/qiantai/img/logo-header.png" srcset="http://store.res.meizu.com/resources/php/store/images/logo-header@2x.png 2x" width="115" height="20" alt="魅族科技（中国）有限公司">
      </a>
            </div>
            <div class="header-nav">
                <ul class="nav-list">
                </ul>
            </div>
            <div class="header-cart" id="MzHeaderCart">
                <a href="" target="_blank">
                    <div class="header-cart-wrap">
                        <span class="">购物车</span>
                        <span id="MzHeaderCartNum" class="header-cart-num" data-extcls="existence">0</span>
                        <div class="header-cart-spacer"></div>
                    </div>
                </a>
                <div class="header-cart-detail">
                    <div class="" data-load="正在加载购物车信息 ..." data-empty="购物车还没有商品，快购买吧！">购物车还没有商品，快购买吧！</div>
                </div>
            </div>
        </div>
    </div>
    <div class="store-wrap">
        <div class="crumbs">
            <a href="/">首页&gt;</a><a href="/phones" class="active">商城列表</a>
        </div>
        <div class="main clearfix">
            <div class="left-nav f-fl">
                <div class="nav-main">
                    <a href="/center/ziliao/{{Session::get('id')}}" class="active">我的资料</a>
                    <a href="/center/mima" class="ml ">修改密码</a>
                    <a href="/center/url" class="ml ">地址管理</a>
                    <a href="/center/pingjia/" class="ml ">我的评价</a>
                </div>
            </div>
            <!-- 我的资料表单 开始 -->
            <div class="right-content f-fr">
                @if (Session::Has('success'))
                <h3 style="color: cyan;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    {{Session::get('success')}}
                </h3>  
                @endif
                @if (Session::Has('error'))
                <h3 style="color: red;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    {{Session::get('error')}}
                </h3>  
                @endif
                <form action="/center/ziliao/{{Session::get('id')}}" method="post" enctype="multipart/form-data">
                    <div class="col-md-5">
                        <table class="table table-striped table-bordered table-hover">
                
                            <tbody>
                                <!-- tr的五个场景 -->
                                <!-- 密码： <input type="password" value=""> <br> -->
                                <tr class="active">              
                                    <th>头像： </th>
                                    <td> 
                                        <img src="{{$users->pic}}" name="pic" width="180" height="50" alt="">
                                        <input type="file" name="pic" value="">
                                    </td>       
                                </tr>
                                <tr class="success">          
                                    <th>名字： </th>
                                    <td><input type="text" name="name" value="{{$users->name}}"></td>        
                                </tr>
                                <tr class="info">                    
                                    <th>年龄： </th>
                                    <td><input type="text" name="age" value="{{$users->age}}"></td>          
                                </tr>
                                 <tr class="warning">
                                    <th>性别： </th>
                                    <td>
                                        <input type="radio" name="sex" value="1" {{$users['sex'] == 1 ? 'checked' : '' }} >男 &nbsp; &nbsp;
                                        <input type="radio" name="sex" value="2" {{$users['sex'] == 2 ? 'checked' : '' }} >女 
                                    </td>
                                </tr>
                                <tr class="active">
                                    <th>电话： </th>
                                    <td><input type="text" name="tel" value="{{$users->tel}}"></td>               
                                </tr>
                                <tr class="success">
                                    <th>邮箱： </th>
                                    <td><input type="text" name="emil" value="{{$users->emil}}"></td>
                                </tr>
                                <tr class="info">
                                    <th>学历： </th>
                                    <td><input type="text" name="xueli" value="{{$users->xueli}}"></td>
                                </tr>
                                 <tr class="warning">
                                    <th>工作： </th>
                                    <td><input type="text" name="gongzuo" value="{{$users->gongzuo}}"></td>
                                </tr>
                                <tr class="active">
                                    <th>家庭地址： </th>
                                    <td><input type="text" name="jtdz" value="{{$users->jtdz}}"></td>
                                </tr>
                                <tr class="success">
                                    <th>出生年月日： </th>
                                    <td><input type="date" name="csny" value="{{$users->csny}}"></td>
                                </tr>
                                
                                <tr class="info">
                                    <td></td>
                                    <td><input type="submit" value="提交"> &nbsp; &nbsp; <input type="reset" value="重置"></td>
                                </tr>                                
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                            </tbody>
                        </table>
                    </div>        

                </form>

            </div>
            <!-- 我的资料表单 结束 --> 
        </div>
    </div>
@endsection 