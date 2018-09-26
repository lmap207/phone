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
            <div class="header-cart">
                <a href="" target="_blank">
                    <div class="header-cart-wrap">
                        <span class="header-cart-icon"></span> 购物车
                        <span >{{$cars}}</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="store-wrap">
        <div class="crumbs">
            <a href="/">首页&gt;</a><a href="/phones" class="active">商城列表</a>
        </div>
        <div class="main clearfix">
            <div class="left-nav f-fl">
                <span class="title active">
                </span>
                <div class="nav-main">
                    <a href="/center/ziliao/{{Session::get('id')}}" class="ml ">我的资料</a>
                
                    <a href="/center/url" class="active">我的地址</a>
                    <a href="/center/pingjia" class="ml ">我的评价</a>
                </div>
            </div>
            <div class="right-content f-fr">
                <!-- 三级联动 -->
                <link href="http://www.jq22.com/jquery/bootstrap-3.3.4.css" rel="stylesheet">
                <form class="form-inline" action="/center/url" method="post">
                    <div data-toggle="distpicker">
                        <div class="form-group">
                            地址信息: <label class="sr-only" for="province3">Province</label>
                            <select class="form-control" name="sheng" id="province3" data-province="浙江省"></select>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="city3">City</label>
                            <select class="form-control" name="shi" id="city3" data-city="杭州市"></select>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="district3">District</label>
                            <select class="form-control" name="qu" id="district3" data-district="西湖区"></select>
                        </div><br><br>
                        <div class="form-group">
                            详细地址: <label class="sr-only"></label>
                            <input  type="text" class="form-control" name="xurl">
                        </div><br><br>
                        <div class="form-group">
                            收件人: &nbsp;<label class="sr-only"></label>
                            <input  type="text" class="form-control" name="uname">
                        </div><br><br>
                        <div class="form-group">
                            手机号: &nbsp;<label class="sr-only"></label>
                            <input  type="text" class="form-control" name="stel">
                        </div><br><br>
                        {{csrf_field()}}
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="form-group">
                            <button>提交</button>
                        </div>
                    </div>
                </form>
                <script src="http://www.jq22.com/jquery/1.11.1/jquery.min.js"></script>
                <script src="http://www.jq22.com/jquery/bootstrap-3.3.4.js"></script>
                <script src="/sjld/js/distpicker.data.js"></script>
                <script src="/sjld/js/distpicker.js"></script>
                <script src="/sjld/js/main.js"></script>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p style="color: cyan; center">收货地址栏</p>
                <div class="col-md-8" style="margin: 0px;padding: 0px;width:900px">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="120">用户名</th>
                                <th width="120">收货人</th>
                                <th width="120">手机号</th>
                                <th width="280">收货地址(省)</th>
                                <th width="400">收货地址(市)</th>
                                <th width="200">收货地址(区)</th>
                                <th width="200">详细地址</th>
                                <th width="100">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($urls as $v)
                            <tr class="active">
                                <th scope="row">{{$v['sname']}}</th>
                                <th>{{$v['uname']}}</th>
                                <th>{{$v['stel']}}</th>
                                <th>{{$v['sheng']}}</th>
                                <th>{{$v['shi']}}</th>
                                <th>{{$v['qu']}}</th>
                                <th>{{$v['xurl']}}</th>
                                
                                <th>
                                    <form style="float:left" action="/center/url/{{$v['id']}}" method="post">
                                        {{method_field('DELETE')}} {{csrf_field()}}
                                        <button>删除</button>
                                    </form>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
    <scre( "common:lib/jquery/jquery-migrate-1.2.1"), window.$=$ , window.jQuery=$ , window.jquery=$ , $(function() { require( "common:widgets/site-topbar/topbar"), require( "common:widgets/site-header/header") }); </script>
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