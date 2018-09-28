@extends('layouts.home')@section('daohang') @endsection @section('content')
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
    <style type="text/css">
    .filter-list ul li {

        color: slategray;

        font-size: 18px;
    }
    .filter-list div:nth-of-type(1) {
        display: block;
    }
    </style>
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
        </div>
    </div>
    <div class="store-wrap">
        <div class="crumbs">
            <a href="/">首页&gt;</a><a href="/phones" class="active">我的订单</a>
        </div>
        <div class="main clearfix">
            <div class="left-nav f-fl">
                <span class="title active">
                </span>
                <div class="nav-main">
                    <a href="/center/ziliao/{{Session::get('id')}}" class="ml ">我的资料</a>
                    <a href="/center/mima" class="ml ">修改密码</a>
                    <a href="/center/url" class="ml ">我的地址</a>
                    <a href="/center/pingjia" class="ml">评价晒单</a>
                    <a href="/center/xiaoxi" class="active">我的消息</a>
                </div>
            </div>
            <div style="padding-left:280px" class="filter-list">
                <h2 style="color:slategray;line-height:80px;margin-top:0px;">我的消息</h2>
                <ul>
                    <li style="float:left;cursor:pointer;">全部消息</li>
                   
                </ul>
                
                <div style="height:50px"></div>
                <hr>
                 @foreach($xiaoxis as $v)
                <div id="xiaoxi">
                   
                    <p >{{$v->dizhi}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$v->updated_at}}</p>
                    <img src="{{$v->phone->pic}}">
                    <p style="color:red;margin-left:100px;">{{$v->phone->money}}元</p>
                    <button type="button" style="margin-left:80px;height:30px;width:90px;;background:#f25807;font-size: 12px; color: #fff;text-align:center;line-height:30px">删除
                    </button>
                  
                </div>
               @endforeach  
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $('.filter-list ul li').click(function() {

        $(this).css('color', 'tomato');

        $(this).siblings().css('color', '');
        

    })
    $('button').click(function(){


            $('#xiaoxi').css('display','none');
        })
    </script>
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
            hm.src = "/qiantai/js/analytics-min.js";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
        </script>
        <script type="text/javascript" charset="utf-8">
        var _hmt = _hmt || [];
        (function() {
                var hm = document.createElement("script");
                hm.src = ('https:' == document.location.protocol ? 'https://tongji-res.meizu.com' : '/qiantai/js/flow.js';
                    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s);
                })();
        </script>
        <script type="text/javascript">
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "/qiantai/js/hm.js?2a0c04774115b182994cfcacf4c122e9";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
        </script>
</body>