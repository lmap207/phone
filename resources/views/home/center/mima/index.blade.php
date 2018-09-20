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
                        <span ></span>
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
                    <a href="/center/mima/{{Session::get('id')}}" class="active">修改密码</a>
                    <a href="/center/url" class="ml ">我的地址</a>
                </div>
            </div>

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
                <br>
                <form action="/center/mima/save/{{Session::get('id')}}" method="post">
                    <ul>
                        <li>
                            <label for="passwd" class="input-tips2">旧 密 码：</label>
                            <div class="inputOuter2">
                                <input type="password" id="passwd" name="jpassword" maxlength="16" class="inputstyle2" />
                                <span></span>
                            </div>
                        </li>

                        <li>
                            <label for="passwd" class="input-tips2">新 密 码：</label>
                            <div class="inputOuter2">
                                <input type="password" id="passwd" name="password" maxlength="16" class="inputstyle2" />
                                <span></span>
                            </div>
                        </li>
                        <li>
                            <label for="passwd2" class="input-tips2">确认密码：</label>
                            <div class="inputOuter2">
                                <input type="password" id="passwd2" name="repassword" maxlength="16" class="inputstyle2" />
                                <span></span>
                            </div>
                        </li>
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <li>
                            <div class="inputArea">
                                <button type="reset" style="margin-top:10px;margin-left:15px;" class="button_blue" value=重置 "/>重置</button>
                                <button style="margin-top:10px;margin-left:50px;" class="button_blue" value=修改 "/>修改</button>
                            </div>
                        </li>
                    </ul>
                </form>
                <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js "></script>
                <script>
                var CPASS = false; var CREPASS = false;

                //密码
                $('input[name=password]').focus(function() {
                    //边框颜色
                    $(this).addClass('active');
                    //提示语显示
                    $(this).next().show().html('6~20非空白字符');
                }).blur(function() {
                    $(this).removeClass('active');
                    //获取用户的输入值
                    var v = $(this).val();
                    //正则
                    var reg = /^\S{6,20}$/;

                    if (!reg.test(v)) {
                        //边框
                        $(this).addClass('error');
                        //文字提醒
                        $(this).next().html('<span style="color:red ">格式不正确</span>').show();
                        CPASS = false;
                    } else {
                        //边框
                        $(this).removeClass('error');
                        //文字提醒
                        $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold ">&nbsp;&nbsp;√</span>').show();
                        CPASS = true;

                    }
                })

                //确认密码
                $('input[name=repassword]').focus(function() {
                    //边框颜色
                    $(this).addClass('active');
                    //提示语显示
                    $(this).next().show().html('再次输入密码');
                }).blur(function() {
                    $(this).removeClass('active');
                    //获取用户的输入值
                    var v = $(this).val();

                    if (v != $('input[name=password]').val()) {
                        //边框
                        $(this).addClass('error');
                        //文字提醒
                        $(this).next().html('<span style="color:red ">两次密码不一致</span>').show();
                        CREPASS = false;
                    } else {
                        //边框
                        $(this).removeClass('error');
                        //文字提醒
                        $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold ">&nbsp;&nbsp;√</span>').show();
                        CREPASS = true;

                    }
                })

                //表单的提交事件
                $('form').submit(function() {
                    //触发错误提醒
                    $('input').trigger('blur');
                    //判断输入值是否都正确
                    if (CPASS && CREPASS) {
                        return true;
                    } else {
                        return false;
                    }
                });
                </script>
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