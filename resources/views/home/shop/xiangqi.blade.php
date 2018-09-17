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
            </ul>
        </div>
        <div class="header-cart" id="MzHeaderCart">
            <a href="#" target="_blank" data-yoyi="2500">
                <div class="header-cart-wrap">
                    <span>购物车</span> 
                    <span id="MzHeaderCartNum" class="header-cart-num" data-extcls="existence">{{$cars}}</span>
                </div>
            </a>
        </div>
    </div>
    
</div>
@endsection @section('content')
<main class="wrapper">
    <div class="container">
        <section class="crumbs clearfix">
            <a href="/">首页</a>&nbsp;&gt;&nbsp;
            <a href="/phones">商城列表</a>&nbsp;&gt;&nbsp;
            <a class="ellipsis crumbs-title">{{$phones->pname}}</a>
        </section>
        <form action="/add/{{$phones->id}}" method="post">
            {{csrf_field()}}
            <section class="row">
                <div class="preview" id="preview">
                    <div class="preview-booth">
                        <a href="javascript:;">
                            <img src="{{$phones->pic}}"  alt="" style="display: inline;margin-left:50px;margin-top:100px;width:400px;height:400px">
                        </a>
                    </div>
                  
                </div>
                <div class="property" id="property">
                    <div class="property-hd">
                        <h1>{{$phones->pname}}</h1>
                        <p class="mod-price">
                            <em class="vm-yen">¥</em>
                            <span class="vm-price">{{$phones->money}}</span>
                        </p>
                    </div>
                    <dl class="property-sale">
                        <dt class="vm-metatit">网络类型:</dt>
                        <dd>
                            <ul data-property="网络类型" class="clearfix">
                                @foreach ($types as $v)
                                <label>
                                    <input type="radio" value="{{$v['id']}}" name="tname" class="tname">
                                    <span style="margin-right:20px">{{$v['tname']}}</span>
                                </label>
                                @endforeach
                            </ul>
                        </dd>
                    </dl>
                    <!-- 鼠标点击事件 -->
                    <dl class="property-sale">
                        <dt class="vm-metatit">颜色分类:</dt>
                        <dd>
                            <ul data-property="颜色分类" class="clearfix">
                                @foreach ($colors as $v)
                                <!--  <li data-value="3:11" class="selected">
                            <input type="radio" value="{{$v->id}}" name="cname">
                            </li> -->
                                <label>
                                    <input type="radio" value="{{$v->id}}" name="cname" class="cname">
                                    <span style="margin-right:20px">{{$v['cname']}}</span>
                                </label> @endforeach
                            </ul>
                        </dd>
                    </dl>
                    <dl class="property-sale">
                        <dt class="vm-metatit">机身内存:</dt>
                        <dd>
                            <ul data-property="机身内存" class="clearfix">
                                @foreach ($memorys as $v)
                                <label>
                                    <input type="radio" name="mname" value="{{$v->id}}" class="mname">
                                    <span style="margin-right:20px">{{$v['mname']}}</span></label>
                                @endforeach
                            </ul>
                        </dd>
                    </dl>
                    <dl class="property-quantity">
                        <dt class="vm-metatit">数量:</dt>
                        <dd class="clearfix">
                            <div class="property-quantity-control">
                                <a title="减少" href="javascript:;" class="vm-minus">-</a>
                                <input type="text" value="1" id="J_quantity" data-max="5" name="shuliang">
                                <a title="增加" href="javascript:;" class="vm-plus">+</a>
                            </div>
                            <span id="J_Stock" class="vm-count"></span>
                        </dd>
                    </dl>
                    <dl class="property-info" id="propertyInfo">
                        <!--
                    <dt class="mod-title">
                        您已选择以下商品:
                    </dt>
                    <dd class="mod-summary">
                        <p id="J_summaryMain">魅蓝2 公开版 白色 16GB&nbsp;&nbsp;￥599</p>
                        <p id="J_summaryPackageName"></p>
                        <p id="J_sumaryPackageItemNames"></p>
                        <p>本商品由 魅族 负责发货，并由 魅族 提供售后服务</p>
                    </dd>
                    -->
                        <dd class="mod-total">
                            价格:<em class="vm-price">￥{{$phones->money}}</em>
                        </dd>
                    </dl>
                    <dl class="property-buy" id="J_BuyOrDiy">
                        <dt class="vm-message" id="J_message"></dt>
                        <dd>
                             @if(Session::has('name'))
                            <button class="btn btn-primary btn-lg">立即购买</button>
                             @else
                             <button class="btn btn-primary btn-lg" type="button" onclick="alert('请选登陆!!!')">立即购买</button>
                            @endif

                        </dd>
                    </dl>
                </div>
            </section>
        </form>
    </div>

    <section class="row detail" id="detail">
        <div style="height:62px;">
            <div class="detail-tab" id="detailTabFixed">
                <div class="fixed-container">
                    <ul class="clearfix">
                        <li class="current">
                            <a href="http://store.meizu.com/item/meilan2.html#">商品详情</a>
                        </li>
                        <li class="">
                            <a href="http://store.meizu.com/item/meilan2.html#">规格参数</a>
                        </li>
                        <li class="">
                            <a href="http://store.meizu.com/item/meilan2.html#">常见问题</a>
                        </li>
                    </ul>
                    <div class="shortcut trans">
                        <div class="mod-buy">
                            <a href="/tianjia" id="J_btnBuyShortcut" class="btn btn-primary btn-lg"><i></i>现在购买</a>
                        </div>
                        <div class="mod-total">
                            <em class="vm-price"><b style="color:red;">￥ {{$phones->money}}</b></em>
                        </div>
                        <div class="mod-title" style="color: red;">
                            <b>{{$phones->pname}}</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-content container">
            <!--
            <div class="introduce current" id="introduce" style="display: block;">
                <img class="lazy" data-original="/qiantai/img/1451371311-22741.jpg" width="1240" alt="" src="/qiantai/img/1451371311-22741.jpg" style="display: inline;">
                <img class="lazy" data-original="/qiantai/img/1451371325-70841.jpg" width="1240" alt="" src="/qiantai/img/1451371325-70841.jpg" style="display: inline;">
                <img class="lazy" data-original="/qiantai/img/1451371339-99629.jpg" width="1240" alt="" src="/qiantai/img/1451371339-99629.jpg" style="display: inline;">
                <img class="lazy" data-original="/qiantai/img/1451371355-50755.jpg" width="1240" alt="" src="/qiantai/img/1451371355-50755.jpg" style="display: inline;">
                <img class="lazy" data-original="/qiantai/img/1451371368-29830.jpg" width="1240" alt="" src="/qiantai/img/1451371368-29830.jpg" style="display: inline;">
            </div>
            -->
            <div class="id=" introduce current " id="introduce " style="display: block; ">{!!$phones->content!!}</div>
            <div class="standard " id="standard " style="display: none; ">
                <table class="standard-table ">
                    <tbody>
                        
                        <tr>
                            <th>品牌</th>
                            <td>{{$phones->pname}}</td>
                            
                        </tr>
                        <tr>
                            <th>型号</th>
                            <td>{{$phones->pname}}</td>
                        </tr>
                        <tr>
                            <th>电池容量</th>
                            <td>{{$parameters['capacity']}}</td>
                        </tr>
                        <tr>
                            <th>尺寸</th>
                            <td>{{$parameters['size'] .'英尺'}}</td>
                        </tr>
                        <tr>
                            <th>重量</th>
                            <td>{{$parameters['weight'].'g'}}</td>
                        </tr>
                        <tr>
                            <th>屏幕尺寸</th>
                            <td>{{$parameters['size'] .'英尺'}}</td>
                        </tr>
                        <tr>
                            <th>分辨率</th>
                            <td>{{$parameters['pixel']}}</td>
                        </tr>
                        <tr>
                            <th>运行内存（RAM）</th>
                            <td>{{$phones->memory['mname']}}</td>
                        </tr>
                        <tr>
                            <th>CPU</th>
                            <td>{{$parameters['CPU']}}</td>
                        </tr>
                        <tr>
                            <th>GPU</th>
                            <td>{{$parameters['GPU']}}</td>
                        </tr>
                        <tr>
                            <th>网络模式</th>
                            <td>双卡多模</td>
                        </tr>
                        <tr>
                            <th>前置摄像头</th>
                            <td>{{$parameters['front'].'万像素'}}</td>
                        </tr>
                        <tr>
                            <th>后置摄像头</th>
                            <td>{{$parameters['behind'] .'万像素'}}</td>
                        </tr>
                        <tr>
                            <th>系统版本</th>
                            <td>{{$parameters['edition']}}</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="question " id="question " style="display: none; ">
                <div class="question-list ">
                    <h2>热门回答</h2>
                    <dl class="mod-item ">
                        <dt class="vm-question ">
                            怎样才算购买成功？
                        </dt>
                        <dd class="vm-answer ">
                            由于系统设置为付款后减库存，所以拍下并不代表购买成功。为了确保购买成功，建议拍下后尽快完成付款。
                        </dd>
                    </dl>
                    <dl class="mod-item ">
                        <dt class="vm-question ">
                            魅蓝2用的是什么屏幕保护玻璃？
                        </dt>
                        <dd class="vm-answer ">
                            魅蓝2采用全球最大的两家屏幕玻璃厂商之一——旭硝子出品的“龙迹2代”强化玻璃，其强度是普通玻璃的6倍，在耐冲击、耐刮花方面都会远远超过普通玻璃。
                        </dd>
                    </dl>
                    <dl class="mod-item ">
                        <dt class="vm-question ">
                            魅蓝2可以插几张卡？都支持运营商的哪些网络？
                        </dt>
                        <dd class="vm-answer ">
                            魅蓝2为双卡双待设计，移动、联通版魅蓝2更公开版固件后支持移动联通双4G，电信版魅蓝2支持电信4G和移动联通2G。
                        </dd>
                    </dl>
                    <dl class="mod-item ">
                        <dt class="vm-question ">
                            魅蓝2支持TF卡扩展吗？
                        </dt>
                        <dd class="vm-answer ">
                            支持。您可以选择安装两张Nano SIM卡或者安装一张Nano SIM 一张Micro SD卡。
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
</main>
<h1 style="margin-left: 50px;margin-top: 30px;color:black;
font-family:等线;font-weight:bold;">推荐排行</h1>
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
@endsection