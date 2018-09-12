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
                <a href="http://store.meizu.com/cart" target="_blank">
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
    <div class="store-wrap">
        <div class="crumbs">
            <a href="/">首页&gt;</a><a href="/center/ziliao" class="active">我的资料</a>
        </div>
        <div class="main clearfix">
            <div class="left-nav f-fl">
                <span class="title active">
                </span>
                <div class="nav-main">
                    <a href="/center/ziliao" class="active">我的资料</a>
                    <a href="http://store.meizu.com/member/myorder/index" class="ml ">我的订单</a>
                    <a href="/center/url" class="ml ">我的地址</a>
                </div>
            </div>
            <div class="right-content f-fr">
              用 &nbsp;户 &nbsp;名： <input type="text" name="name" value="{{$users['name']}}"><br>
              用户密码： <input type="password" name="password" value=""><br>
              用户头像： 
            </div>
        </div>
    </div>
    @endsection
    <!-- common footer -->
    <!-- common js -->
    <script charset="utf-8" src="/qiantai/js/v.js"></script>
    <script src="/qiantai/js/hm.js"></script>
    <script src="/qiantai/js/flow.js"></script>
    <script src="/qiantai/js/analytics-min.js"></script>
    <script charset="utf-8" src="/qiantai/js/site-lib.js"></script>
    <script type="text/javascript" src="/qiantai/js/site-base.js"></script>
    <scre("common:lib/jquery/jquery-migrate-1.2.1"), window.$ = $, window.jQuery = $, window.jquery = $, $(function() { require("common:widgets/site-topbar/topbar"), require("common:widgets/site-header/header") });
    </script>
    <!--ignipt>
    var $ = require("common:lib/jquery/jquery-1.11.3");
    requirore-->
    <script type="text/javascript" src="/qiantai/js/memberCommon.js"></script>
    <script type="text/javascript" src="/qiantai/js/index.js"></script>
    <script>
    require('member:app/script/page/index');
    </script>
    <!-- common tongji code -->
    <script>
    var __mzt = __mzt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "http://sccom.res.meizu.com/js/analytics-min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    </script>
    <script type="text/javascript" charset="utf-8">
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = ('https:' == document.location.protocol ? 'https://tongji-res.meizu.com' : 'http://tongji-res1.meizu.com') + '/resources/tongji/flow.js';
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    </script>
    <script type="text/javascript">
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?2a0c04774115b182994cfcacf4c122e9";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    </script>
</body>

</html>