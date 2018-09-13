@extends('layouts.home') @section('content')
<div class="store-wrap">
    <div class="crumbs">
        <a href="">首页&gt;</a><a href="/center" class="active">我的商城</a>
    </div>
    <div class="main clearfix">
        <div class="left-nav f-fl">
            <span class="title active"><a href="/center" class="ml ">我的商城</a></span>
            <div class="nav-main">
                <a href="/center/ziliao" class="active">我的资料</a>
                <a href="#" class="ml ">我的订单</a>
                <a href="/center/url" class="ml ">地址管理</a>
                <a href="/ywb" class="ml ">意外保单</a>
            </div>
        </div>
        <!-- 我的资料表单 开始 -->
        <div class="right-content f-fr">
            <form action="">
                名字： <input type="text" value=""><br>
                密码： <input type="password" value=""> <br>
                头像： 
            </form>
        </div>
        <!-- 我的资料表单 结束 --> 
    </div>
</div>
@endsection @section('footer') @include('home.center.footer') @endsection