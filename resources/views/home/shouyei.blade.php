@extends('layouts.home')
@section('daohang')
<div class="site-header">
    <div class="mzcontainer">
        <div class="header-logo">
            <a href="http://www.meizu.com/" target="_blank">
                <img src="/qiantai/img/logo-header.png" srcset="/qiantai/img/logo-header@2x.png 2x" width="115" height="20" alt="魅族科技（中国）有限公司">
            </a>
        </div>
        <div class="header-nav">
        </div>
        <div class="header-cart" id="MzHeaderCart">
            <a href="http://store.meizu.com/cart" target="_blank" data-yoyi="2500">
                <div class="header-cart-wrap">
                    <span>购物车</span>
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
@endsection 

@section('content')
<style>
* {
    margin: 0px;
    padding: 0px;
    list-style: none;
}

#slide {
    width: 1520px;
    height: 670px;
    border: solid 1px #ddd;
    margin: 0px auto;
    position: relative;
    overflow: hidden;
}

#images {
    width: 2250px;
    position: absolute;
}

#images li {
    width: 1520px;
    height: 670px;
    left: 0px;
    top: 0px;
    float: left;
}

#dots {
    width: 200px;
    height: 20px;
    position: absolute;
    left: 750px;
    bottom: 5px;
}

#dots li {
    width: 10px;
    height: 10px;
    background: #aef;
    float: left;
    margin-right: 5px;
    border-radius: 50%;
}

#dots .active {
    background: black;
}
</style>
<div id="slide">
    <ul id="images">
        <li><a href="/3.html"><img src="https://fms.res.meizu.com/dms/2018/09/12/1bb6243c-74fa-49e1-907d-a7d577fdd890.jpg" width="1560" height="670" alt=""></a></li>
        <li><img src="https://fms.res.meizu.com/dms/2018/08/08/052c55de-5aec-461b-8976-32f407ac3ff6.jpg" width="1560" height="670" alt=""></li>
        <li><img src="https://openfile.meizu.com/group1/M00/05/B1/Cgbj0FtfzY-AAFkmAAIKhxCNW4Q048.jpg" width="1560" height="670" alt=""></li>
        <li><img src="https://fms.res.meizu.com/dms/2018/09/13/6a7a3ab4-65cc-4be2-beaf-a1d5bc64a488.jpg" width="1560" height="670" alt=""></li>
        <li><img src="https://fms.res.meizu.com/dms/2018/09/05/6bb901e1-3ea5-4a02-94d2-4323743e0404.jpg" width="1560" height="670" alt=""></li>
    </ul>
    <ul id="dots">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script>
var index = -1;
var timer = null;

$('#dots li').mouseover(function() {
    //清除定时器
    clearInterval(timer);
    //修改图片的显示的内容
    index = $(this).index();
    //显示当前索引的图片和点
    show(index);
}).mouseout(function() {
    // 启动定时器
    autoRun();
});

//自动变化
function autoRun() {
    timer = setInterval(function() {
        index++;
        //显示当前索引对应 图片和点
        show(index);
        //判断
        if (index >= $('#images li').length - 1) {
            index = -1;
        }
    }, 4000);
}
//显示当前索引对应图片和点
function show(index) {
    //点样式发生改变
    $('#dots li').removeClass('active');
    $('#dots li').eq(index).addClass('active');
    //切换图片
    //使其他索引的元素隐藏
    $('#images>li').fadeOut(); //siblings  
    //使当前索引的元素显示
    $('#images>li').eq(index).fadeIn();
}
autoRun();
</script>
<div>
    <h1 style="margin-left: 50px;margin-top: 30px;color:black;
font-family:等线;font-weight:bold;">新款手机</h1> 
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
    <img src="/qiantai/img/1458815029-31254.jpg" style="margin-left: 140px;margin-top: 30px;">
    <a href="/7.html" class="hot-point" style="width: 620px; height: 120px; left: 0px; top: 0px;" target="_blank" title="MX5"></a>
    <a href="/7.html" class="hot-point" style="width: 620px; height: 120px; left: 620px; top: 0px;" target="_blank" title="PRO5"></a>
</div>
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
<!--这里是广告效果-->
<div id="div1" style="position:fixed;right:10px;top:80%;margin-top:-100px;width:200px;height:200px;border:0px #cd1b1b solid; display: block">
    <button id="gg_1" style="position:absolute;right:0px" onclick="qx()">×</button>
    <a href="#"><img src="{{$adverts->adpic}}" style="width:200px;height:200px" ></a>
</div>
<script type="text/javascript">
function qx() {
    document.getElementById('div1').style.display = 'none';
}
</script>
<div id="div2" style="position:fixed;left:10px;top:80%;margin-top:-100px;width:200px;height:200px;border:0px #cd1b1b solid; display: block">
    <button id="gg_2" style="position:absolute;right:0px"></button>
    <a href="#"><img src="{{$adverts->adpic}}" style="width:200px;height:200px" ></a>
</div>
<script>
setTimeout(function() {
    document.getElementById('div2').style.display = 'none';
}, 7000);
</script>
<!--广告结束-->