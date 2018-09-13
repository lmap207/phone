@extends('layouts.home') @section('daohang')
<div class="site-header">
    <div class="mzcontainer">
        <div class="header-logo">
            <a href="http://www.meizu.com/" target="_blank">
                <img src="/qiantai/img/logo-header.png" srcset="/qiantai/img/logo-header@2x.png 2x" width="115" height="20" alt="魅族科技（中国）有限公司">
            </a>
        </div>
        <div class="header-nav">
            <ul class="nav-list">
                <!--
                <div class="nav clearfix" id="nav">
                    <ul class="clearfix">
                        @foreach ($brands as $v)
                        <li><a href="/phones?brand_id={{$v->id}}">{{$v->bname}}</a></li>
                        @endforeach
                    </ul>
                </div>
                -->
                <!--
                <li class="nav-item">
                    <a class="nav-item-link" href="javascrip:" onclick="return false" target="_blank">PRO手机</a>
                    <div class="nav-item-children">
                        <ul class="menu-product-list">
                            <li class="menu-product-item">
                                <a href="http://store.meizu.com/item/meizu_pro5.html?rc=sd" target="_blank">
                                    <div class="menu-product-figure">
                                        <img src="/qiantai/img/init-1x1.jpg" data-src="/qiantai/img/1450928403@126x126.png" width="100" height="150">
                                    </div>
                                    <p class="menu-product-name">PRO 5</p>
                                    <p class="menu-product-price">
                                        ¥
                                        <span>2799</span>
                                    </p>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                -->
            </ul>
        </div>
        <div class="header-cart" id="MzHeaderCart">
            <a href="http://store.meizu.com/cart" target="_blank" data-yoyi="2500">
                <div class="header-cart-wrap">
                    <span class="header-cart-icon"></span> 购物车
                    <span id="MzHeaderCartNum" class="header-cart-num" data-extcls="existence">0</span>
                    <div class="header-cart-spacer"></div>
                </div>
            </a>
            <div class="header-cart-detail">
                <div class="header-cart-empty" data-load="正在加载购物车信息 ..." data-empty="购物车还没有商品，快购买吧！">购物车还没有商品，快购买吧！</div>
            </div>
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
            <div class="current" style="display: block;">
                <ul class="goods-list-wrap clearfix">
                    <!-- 列表item Start -->
                    @foreach ($phones as $v)
                    <li class="gl-item">
                        <dl class="gl-item-wrap">
                            <dd class="mod-pic">
                                <a target="_blank" href="{{$v->id}}.html">
                                        <img width="220" height="220" class="err-product" src="{{$v['pic']}}">
                                    </a>
                            </dd>
                            <dd class="mod-name">
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
            
        </div>
        <!-- 商品列表 End -->
        <!-- 推荐 Start -->
        <div class="recommend">
            <div class="recommend-hd">
                <h2 class="mod-title">为您推荐</h2>
                <!--
                <div class="mod-control" id="recommendDirectionNav">
                    <a class="vm-prev flex-prev flex-disabled" href="http://store.meizu.com/topic/list.html?active=0#" id="J_recommendPrev" tabindex="-1">
                            <i> </i>
                        </a>
                    <a class="vm-next flex-next" href="http://store.meizu.com/topic/list.html?active=0#" id="J_recommendNext">
                            <i></i>
                        </a>
                </div>
                -->
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
    </div>
</div>
@endsection