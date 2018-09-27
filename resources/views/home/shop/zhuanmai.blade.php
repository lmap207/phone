@extends('layouts.home') @section('daohang')
<div class="site-header">
    <div class="mzcontainer">
        <div class="header-logo">
            <a href="http://www.meizu.com/" target="_blank">
                <img src="/qiantai/img/logo-header.png" srcset="/qiantai/img/logo-header@2x.png 2x" width="115" height="20" alt="魅族科技（中国）有限公司">
            </a>
        </div>
        <div class="header-nav">
        </div>
        <div class="header-cart">
            <a href="" target="_blank" data-yoyi="2500">
                <div class="header-cart-wrap">
                    <span>购物车</span>
                    <span id="MzHeaderCartNum" class="header-cart-num" data-extcls="existence"></span>
                    <div class="header-cart-spacer"></div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection @section('content')
<img src="//retail2.res.meizu.com/static/cn/index/images/index_banner_f56ffa4.jpg" width="100%">

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=TGHcjFv74zmQDHjPIsZYOp0Cj3hfcpPj"></script>
<h2 style="color:#999999">亲爱的童靴在这里你可以找到我们的体验店哦</h2>
<!--百度地图容器-->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=RpXeiBrxfijq8F2p5mhrZAiIwYeTtm6z"></script>
  <div style="height: 30px"></div>
<div id="allmap" style="left:300px;height:500px;width:800px;text-align:center"></div>
<script type="text/javascript">
// 百度地图API功能
var map = new BMap.Map("allmap");
map.centerAndZoom(new BMap.Point(116.404, 39.915), 5);

var local = new BMap.LocalSearch(map, {
  renderOptions:{map: map}
});
local.searchInBounds("北京魅族", map.getBounds());

map.addEventListener("dragend",function(){
    map.clearOverlays();
    local.searchInBounds("北京魅族", map.getBounds());
});
</script>


@endsection