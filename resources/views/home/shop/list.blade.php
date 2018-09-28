@extends('layouts.home') @section('daohang')
<div class="site-header">
    <div class="mzcontainer">
        <div class="header-logo">
            <a href="http://www.meizu.com/" target="_blank">
                <img src="/qiantai/img/logo-header.png" srcset="/qiantai/img/logo-header@2x.png 2x" width="115" height="20" alt="魅族科技（中国）有限公司">
            </a>
        </div>
        <div class="header-cart">
            <a href="http://store.meizu.com/cart" target="_blank" data-yoyi="2500">
                <div class="header-cart-wrap">
                    <span>购物车</span> 
                    <span id="MzHeaderCartNum" class="header-cart-num" data-extcls="existence">{{$cars}}</span>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection @section('content')
<div class="wrapper" id="main">
    <div class="crumbs" style="margin-left:50px">
        <a href="/">首页&nbsp;&gt;&nbsp;</a><a href="/phones">全部商品</a>
    </div>
    <div class="container">
        <!-- 导航栏 Start -->
        <div class="nav clearfix" id="nav">
            <ul class="clearfix">
                @foreach ($brands as $v)
                <li><a href="/phones?brand_id={{$v->id}}">{{$v->bname}}</a></li>
                @endforeach
                <script type="text/javascript">
                    var imgs = document.getElementsByTagName('li');
                    for(var i = 1;i<imgs.length;i++){
                        imgs[i].onmouseover = function(){
                            this.style.background = 'cyan'; 
                        }
                        imgs[i].onmouseout = function(){
                            this.style.background = '';
                        }
                    }
                </script>
            </ul>
        </div>
        <!-- 头部导航 End -->
        <!-- 商品列表 Start -->
        <div class="goods-list" id="goodsList">
            <!-- 手机列表 Start -->
            <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
            <div class="current" style="display: block;">
                <ul class="goods-list-wrap clearfix">
                    <!-- 列表item Start -->
                    @foreach ($phones as $v)
                    <li class="gl-item" style="">
                        <dl class="gl-item-wrap">
                            <dd class="mod-pic">
                                <a class="rs-item-wrap" target="_blank" href="{{$v->id}}.html">
                                    <img width="220" height="220" class="err-product" src="{{$v['pic']}}">
                                </a>
                            </dd>

                            <dd style="margin-top: 55px;" class="mod-name">
                                <a target="_blank" href="{{$v->id}}.html">
                                    {{$v['pname']}}
                                </a>
                            </dd>
                            
                            <dd class="mod-price">
                                <p class="vm-price-oldprice"></p>
                                <p class="vm-price">
                                    ¥&nbsp;<span>{{$v['money']}}</span>
                                </p>
                            </dd>
                        </dl>
                    </li>
                    @endforeach
                    <!-- 列表item End -->
                </ul>
            </div>  
            <script>
                $('img').lazyload();
            </script> 
        </div>
        <!-- 商品列表 End -->
        <!-- 推荐 Start -->
        <div class="recommend">
            <div class="recommend-hd">
                <h2 class="mod-title">为您推荐</h2>
            </div>
            <div class="recommend-slider" id="J_recommendSlider">
                <!-- 推荐商品列表 Start -->
                <!-- 推荐商品列表 End -->
                <div class="flex-viewport" style="overflow: hidden; position: relative;"></div>
                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                    <ul class="recommend-slider-wrap" style="width: 1800%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                        <!-- 列表item Start  -->
                        @foreach($recoms as $v)
                        <li class="rs-item" style="width: 245px; margin-right: 5px; float: left; display: block;">
                            <a class="rs-item-wrap" href="{{$v->id}}.html" target="_blank">
                                <div class="mod-pic">
                                    <img src="{{$v->pic}}" width="180" height="180" draggable="false">
                                </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title">{{$v->pname}}</h4>
                                    <p class="vm-price-oldprice"></p>
                                    <p class="vm-price">
                                        ¥&nbsp;<span>{{$v->money}}</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                        @endforeach
                        <!-- 列表item End -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- 推荐 End -->

        <!-- 排行开始 -->
        <div class="recommend">
            <div class="recommend-hd">
                <h2 class="mod-title">商品排行</h2>
            </div>
            <div class="recommend-slider" id="J_recommendSlider">
                <!-- 推荐商品列表 Start -->
                <!-- 推荐商品列表 End -->
                <div class="flex-viewport" style="overflow: hidden; position: relative;"></div>
                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                    <ul class="recommend-slider-wrap" style="width: 1800%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                        <!-- 列表item Start  -->
                        @foreach($views as $v)
                        <li class="rs-item" style="width: 245px; margin-right: 5px; float: left; display: block;">
                            <a class="rs-item-wrap" href="{{$v['id']}}.html" target="_blank">
                                <div class="mod-pic">
                                    <img src="{{$v['pic']}}" width="180" height="180" draggable="false">
                                </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title">{{$v['pname']}}</h4>
                                    <p class="vm-price-oldprice"></p>
                                    <p class="vm-price">
                                        ¥&nbsp;<span>{{$v['money']}}</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                        @endforeach
                        <!-- 列表item End -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- 排行结束 -->
    </div>
</div>
@endsection