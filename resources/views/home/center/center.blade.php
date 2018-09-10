@extends('home.center.top')
@section('content')
<div class="store-wrap">
    <div class="crumbs">
        <a href="http://store.meizu.com/">首页&gt;</a><a href="/qiantai/img/会员中心-我的商城 魅族商城.html" class="active">我的商城</a>
    </div>
    <div class="main clearfix">
        <div class="left-nav f-fl">
    <span class="title active"><a href="/qiantai/img/会员中心-我的商城 魅族商城.html" class="active">我的商城</a></span>
    <div class="nav-main">
        <a href="/qiantai/javascript:;" class="type-title"><i class="iconfont icon-orderCenter"></i>我的账户</a>
        <a href="http://store.meizu.com/member/myorder/index" class="ml ">我的资料</a>
        <a href="/qiantai/javascript:;" class="type-title"><i class="iconfont icon-orderCenter"></i>我的交易</a>
        <a href="http://store.meizu.com/member/myorder/index" class="ml ">我的订单</a>
        <a href="/url" class="ml ">地址管理</a>
        <a href="/ywb" class="ml ">意外保单</a>
    </div>

</div>        <div class="right-content f-fr">
            <div class="index-main">
                <div class="top clearfix">
                    <div class="information clearfix f-fl">
                        <div class="pic f-fl">
                                                        <img src="/qiantai/img/423ab7a3c1724a0aafaef7ff8a18f492z" alt="">
                                                    </div>
                        <div class="name f-fl">
                            <span>虚拟世界的我丶</span>
                            <span>欢迎您回来！</span>
                        </div>
                        <div class="info f-fl">
                            <ul>
                                <li>Flyme账号：<span>虚拟世界的我丶</span></li>
                                <li>绑定手机号：<span>未绑定</span></li>
                                <li class="emailText">绑定邮箱：<span>3****393@qq.com</span></li>
                            </ul>
                            <a class="edit" href="https://member.meizu.com/uc/webjsp/member/detail" target="_blank">修改个人信息 &gt;</a>
                        </div>
                    </div>
                </div>
				
                <div class="bottom clearfix">
                    <div class="orderState f-fl">
                        <div class="title clearfix">
                            <span class="f-fl">订单状态</span>
                            <a class="detail f-fr" href="http://store.meizu.com/member/myorder/index">查看全部订单 &gt;</a>
                        </div>
                        <div class="content">
                            <div class="waitPay clearfix">
                                    <span class="f-fl cercl">
                                        <i class="iconfont icon-waitingPay"></i>
                                    </span>
                                <div class="text f-fl">
                                    <p>待付款订单：<span class="num">0</span></p>
                                    <a class="detail" href="http://store.meizu.com/member/myorder/index?type=0">查看全部待付款订单 &gt;</a>
                                </div>
                            </div>
                            <div class="waitDeliver clearfix">
                                    <span class="f-fl cercl">
                                        <i class="iconfont icon-waitingDeliver"></i>
                                    </span>
                                <div class="text f-fl">
                                    <p>待发货订单：<span class="num">0</span></p>
                                    <a class="detail" href="http://store.meizu.com/member/myorder/index?type=1">查看全部待发货订单 &gt; </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="message f-fl">
                        <div class="title clearfix">
                            <span class="f-fl">活动消息</span>
                            <a class="f-fr detail" href="http://store.meizu.com/member/message/index">查看全部消息 &gt;</a>
                        </div>
                        <div id="tableList" class="list"><ul>
  <li class="clearfix">
      <p class="f-fl time">
          <input type="hidden" class="_timeFull" value="1458615811000">
          <span class="fullTime">2016-3-22</span>
          <span class="firstMounth">3-22</span>
          <span class="smallTime">11:03</span>
      </p>
      <p class="f-fl content">
          <a href="http://store.meizu.com/topic/spring.html?rc=xx" target="_blank"><i class="contentNum">【魅族春游季，赢“买一赠一”】春天来啦，来魅族商城购春游必备利器，最高...</i><span class="detail"> 点击查看详细 &gt;</span></a>
      </p>
  </li>
</ul>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
 

@include('home.center.footer')
   @endsection


