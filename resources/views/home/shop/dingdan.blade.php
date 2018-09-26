<!DOCTYPE html>
<!-- saved from url=(0033)http://store.meizu.com/orders/add -->
<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>确认订单-魅族商城</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="icon" type="image/x-icon">
    <meta name="keywords" content="魅族魅族商城">
    <meta name="description" content="魅族商城">
    <!-- common css -->
    <link rel="stylesheet" href="/qiantai/css/site-base.css">
    <!--[if lt IE 9]>
<script>
  var c = ["log","debug","info","warn","exception","assert","dir","dirxml","trace","group","groupCollapsed","groupEnd","profile","profileEnd","count","clear","time","timeEnd","timeStamp","table","error"];
  window.console = {};
  for(var i = 0; i < c.length; i++){
    window.console[c[i]] = function(){

    }
  }
</script>
<![endif]-->
    <link rel="stylesheet" href="/qiantai/css/order.css">
    <link type="text/css" href="/qiantai/css/dialog.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/qiantai/css/citys.css">
    <link rel="stylesheet" href="/qiantai/css/order_add_new.css">
</head>

<body>
    <!-- common header -->
    <div class="site-topbar clearfix">
        <div class="mzcontainer">
            <div class="topbar-nav">
                <a href="/" target="_blank">魅族官网</a>
                <a href="/phones">魅族商城</a>
                <a href="http://www.flyme.cn/" target="_blank">Flyme</a>
                <a href="http://retail.meizu.com/index.html" target="_blank">专卖店</a>
                <a href="http://service.meizu.com/index.html" target="_blank">服务</a>
                <a href="http://bbs.meizu.cn/" target="_blank">社区</a>
            </div>
            <div class="topbar-right">
                <ul class="topbar-info">

                    <li class="topbar-order-msg">
                        <a class="topbar-link" href="/" target="_blank">
                        {{Session::get('name')}} &nbsp;用户</a>

                        <span class="msg-tag" id="MzOrderMsgTag"></span>
                    </li>
                    <li class="topbar-info-msg" id="MzTopbarMsg" style="display: list-item;">
                        <a class="topbar-link" href="http://store.meizu.com/member/message/index" target="_blank">消息</a>
                        <span class="msg-tag" id="MzMsgTag" style="display: inline;"></span>
                    </li>
                    <li class="topbar-order-msg">
                        <a class="topbar-link" href="/tianjia" target="_blank">我的订单</a>
                        <span class="msg-tag" id="MzOrderMsgTag"></span>
                    </li>
                    <li class="topbar-info-member" style="">
                        <a class="topbar-link" href="http://store.meizu.com/member/index" target="_blank">
                   <span id="MzUserName" class="site-member-name">
                  @if(Session::has('name'))

                        <img src="/qiantai/images/denglu.png">

                         @else
                        <img src="/qiantai/images/icon-user_d8bdb23.png">
                        @endif
                     </span>
                      </a>
                        <div class="site-member-items">
                            <a class="site-member-link" href="/center/url">地址管理</a>
                            <a class="site-member-link site-logout" href="/">退出登陆</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="site-header">
        <div class="mzcontainer">
            <div class="header-logo">
                <a href="/" target="_blank">
      <img src="/qiantai/img/logo-header.png" srcset="http://store.res.meizu.com/resources/php/store/images/logo-header@2x.png 2x" width="115" height="20" alt="魅族科技（中国）有限公司">
      </a>
            </div>
            <div class="header-cart">
                <a href="/tianjia" target="_blank">
                    <div class="header-cart-wrap">

                        <span class="header-cart-icon"></span> 购物车
                        <span >{{$cars->count()}}</span>
                        <!-- <div class="header-cart-spacer"></div> -->
                    </div>
                </a>
                        <div class="header-cart-spacer"></div>
                    </div>
                </a>
                <div class="header-cart-detail">
                    <div class="" data-load="正在加载购物车信息 ..." data-empty="购物车还没有商品，快购买吧！">快下单吧！</div>
                </div>

            </div>
        </div>
    </div>
    <!--MZstore-->
    <form method="post" action="/save" id="realFrom" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div id="storeContainer">
            <div class="mz_content clearfix">
                <div class="order_nav">
                    <div class="order_icons n1 active">1 我的购物车</div>
                    <div class="order_icons n2 active">2 填写核对订单信息</div>
                    <div class="order_icons n3">3 成功提交订单</div>
                </div>
                <div class="order_title">
                    收货人信息
                    <!--      <div class="update_tips">
        <i class="order_icons tips_icons"></i>
        因配送地址库升级，部分地址需升级后方可使用！
      </div>-->
                    <span class="err_msg address_error_tip"></span>
                </div>
                <div class="line"></div>
                <div class="user_msg">
                    <div class="address_list" id="addressList">
                        <!-- 用户地址列表 -->
                    </div>
                    <div class="user_address">
                        <div class="add_form" id="addFrom" style="margin-top:5px">
                        @if($dizhis == true)
                            <div class="tr">
                                <div class="th">
                                    <textarea name="xxxx" rows="7" cols="30">姓名:{{$dizhis->uname}}
                                                         手机号:{{$dizhis->stel}}
收货地址:{{$dizhis->sheng}} {{$dizhis->shi}} {{$dizhis->qu}}    {{$dizhis->xurl}} 
                                    </textarea>
                                </div>   
                            </div> 
                         @else 
                         <div class="tr">
                                <div class="th">
                                    
                                     <a href="center/url"><img src="/qiantai/images/tianjia.png">添加地址</a>
                                   
                                </div>   
                            </div>
                            @endif 
                        </div>
                    </div>
                </div>
                <div class="order_title">
                    确认订单信息
                </div>
                <table cellpadding="0" cellspacing="0" class="product_table">
                    <thead>
                        <tr>
                            <th width="200">商品</th>
                            <th width="300" class="supplier">
                                <div class="title">
                                    <div class="title">
                                        供应商：魅族 <span class="supplier_tips">
                  <span class="order_icons triangle"></span>
                                        <span class="content">由“魅族”负责发货，并提供售后服务</span>
                                        </span>
                                    </div>
                                </div>
                            </th>
                            <th width="200">单价</th>
                            <th width="200">数量</th>
                            <th width="200">小计</th>
                            <th width="200">操作</th>
                        </tr>
                    </thead>
                    @if((count($cars) < 1))
                    <tbody>
                    
                        <tr>
                            <td class="img"></td>
                            
                            <td class="price"><span style="font-size:25px;color:#ddd">你还没有选择商品,你去前面买点商品吧!<img src="/qiantai/images/noData-31ec95ea89.png"></span></td>
                               
                            <td></td>
                            <td class="price"></td>
                            <td class="del"></td>
                        </tr> 
                       
                    </tbody>

                    @endif
                    <tbody>
                    @foreach($cars as $v)
                        <tr>
                            <td class="img"><img src="{{$v->phone['pic']}}"></td>
                            <td class="detial">
                                <p class="title">
                                    <a target="_blank" href="http://store.meizu.com/item/meizu_mx5.html">
                                        <!--如果是套餐则显示套餐-->
                                        {{$v->phone['pname']}}&nbsp; {{$v->cname}}&nbsp; {{$v->tname}}&nbsp; {{$v->mname}}</a>
                                </p>
                            </td>
                            <td class="price">
                                ¥&nbsp;{{$v->phone['money']}}</td>
                            <td>{{$v->shuliang}}</td>
                            <td class="price">¥&nbsp;{{$v->money}}</td>
                            <td><a href="delete/{{$v->id}}"><u>删除</u></a></td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                <div class="order_total">
                    <div class="tr">
                        <div class="th">总金额</div>
                        <div class="td">¥&nbsp;{{$money}}</div>
                    </div>
                    <div class="tr">
                        <div class="th">优惠总额</div>
                        <div class="td subtract">-&nbsp;¥&nbsp;0.00</div>
                    </div>
                    <!--<div class="tr">
        <div class="th">店铺优惠</div>
        <div class="td subtract">-&nbsp;¥&nbsp;</div>
      </div>-->
                    <div class="tr">
                        <div class="th">回购券优惠</div>
                        <div class="td subtract">-&nbsp;¥&nbsp;<span id="buyBackPrice">0.00</span></div>
                    </div>
                    <!--<div class="tr">
        <div class="th">商城积分 <span class="integral"><input type="text" name="integral"> 点（可用10000点）</span></div>
        <div class="td subtract">-&nbsp;¥&nbsp;<span>0.00</span></div>
      </div>-->
                    <div class="tr">
                        <div class="th">运费</div>
                        <div class="td">¥&nbsp;0.00</div>
                    </div>
                    <div class="line"></div>
                    <div class="tr">
                        <div class="th">应付：</div>
                        <div class="td total_price">¥&nbsp;<span id="totalPrice">{{$money}}</span></div>
                    </div>
                    <div class="tr" style="display: none">
                        <div class="th">可获得商城积分：</div>
                        <div class="td">0 分</div>
                    </div>
                    <div class="tr verifica">
                        验证码
                        <input name="captcha" type="text" align="center" style="height:30px">
                        <a onclick="javascript:re_captcha();">
                         <img src="{{ URL('/captcha/1') }}"  alt="验证码" title="刷新图片" width="150" height="60" id="c2c98f0de5a04167a9e427d883690ff6" border="0" align="center" onclick="this.src='{{ URL('/captcha/1') }} ?d='+Math.random();">
                        </a>
                    </div>
                    <div class="tr">
                        <input class="order_btn primary" id="submitFrom" type="submit">
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" value="个人" name="companyItem" maxlength="50" class="companyItem">
        <!-- 发票抬头 -->
        <input type="hidden" value="" name="consId">
        <!-- 地址id -->
        <input type="hidden" value="107" name="sku_id">
        <input type="hidden" value="1" name="numbers">
        <input type="hidden" value="" name="package_id">
        <input type="hidden" value="" name="package_list">
        <input type="hidden" name="formtoken" value="7535ba71c96a5b9eda04d6a13dbab44d" id="formtoken">
        <!-- token -->
    </form>
    <script>
    function re_captcha() {

        $url = "{{ URL('/captcha') }}";

        $url = $url + "/" + Math.random();

        document.getElementById('captchaid').src = $url;

    }
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/amazeui.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- common js -->
    <script charset="utf-8" src="/qiantai/js/v.js"></script>
    <script src="/qiantai/js/hm.js"></script>
    <script src="/qiantai/js/flow.js"></script>
    <script src="/qiantai/js/analytics-min.js"></script>
    <script charset="utf-8" src="/qiantai/js/site-lib.js"></script>
    <script type="text/javascript" src="/qiantai/js/site-base.js"></script>
    <script>
    var $ = require("common:lib/jquery/jquery-1.11.3");
    require("common:lib/jquery/jquery-migrate-1.2.1"), window.$ = $, window.jQuery = $, window.jquery = $, $(function() { require("common:widgets/site-topbar/topbar"), require("common:widgets/site-header/header") });
    </script>
    <script type="text/javascript" src="/qiantai/js/common.js"></script>
    <script type="text/javascript">
    var formtoken = "7535ba71c96a5b9eda04d6a13dbab44d"
    var endPrice = "1499.00";
    var useCouponPrice = "1499.00";
    var defaultAddress = "";
    defaultAddress && $("[data-id=" + defaultAddress + "]").addClass("active"); //选上默认地址
    </script>
    <script type="text/javascript" src="/qiantai/js/citys.js"></script>
    <script type="text/javascript" src="/qiantai/js/order_add_new.js"></script>
    <div class="ui-selectmenu-menu ui-front">
        <ul aria-hidden="true" aria-labelledby="ui-id-1-button" id="ui-id-1-menu" class="ui-menu ui-widget ui-widget-content ui-corner-bottom" role="listbox" tabindex="0" aria-activedescendant="ui-id-17" aria-disabled="false">
            <li class="ui-menu-item ui-state-focus" id="ui-id-17" tabindex="-1" role="option">省份/直辖市</li>
        </ul>
    </div>
    <div class="ui-selectmenu-menu ui-front">
        <ul aria-hidden="true" aria-labelledby="ui-id-2-button" id="ui-id-2-menu" class="ui-menu ui-widget ui-widget-content ui-corner-bottom" role="listbox" tabindex="0" aria-activedescendant="ui-id-18" aria-disabled="false">
            <li class="ui-menu-item ui-state-focus" id="ui-id-18" tabindex="-1" role="option">城市</li>
        </ul>
    </div>
    <div class="ui-selectmenu-menu ui-front">
        <ul aria-hidden="true" aria-labelledby="ui-id-3-button" id="ui-id-3-menu" class="ui-menu ui-widget ui-widget-content ui-corner-bottom" role="listbox" tabindex="0" aria-activedescendant="ui-id-19" aria-disabled="false">
            <li class="ui-menu-item ui-state-focus" id="ui-id-19" tabindex="-1" role="option">区/县</li>
        </ul>
    </div>
    <div class="ui-selectmenu-menu ui-front">
        <ul aria-hidden="true" aria-labelledby="ui-id-4-button" id="ui-id-4-menu" class="ui-menu ui-widget ui-widget-content ui-corner-bottom" role="listbox" tabindex="0" aria-activedescendant="ui-id-20" aria-disabled="false">
            <li class="ui-menu-item ui-state-focus" id="ui-id-20" tabindex="-1" role="option">乡镇/街道</li>
        </ul>
    </div>
    <!-- common footer -->
    <div class="site-footer">
        <div class="mzcontainer">
            <div class="site-footer-service">
                <ul class="clearfix">
                    <li class="service-item">
                        <span class="service-icon service-icon-seven"></span>
                        <p class="service-desc">
                            <span class="service-desc-bold">7天</span>
                            <span class="service-desc-normal">无理由退货</span>
                        </p>
                    </li>
                    <li class="service-split-line">
                        <span></span>
                    </li>
                    <li class="service-item">
                        <span class="service-icon service-icon-fifty"></span>
                        <p class="service-desc">
                            <span class="service-desc-bold">15天</span>
                            <span class="service-desc-normal">换货保障</span>
                        </p>
                    </li>
                    <li class="service-split-line">
                        <span></span>
                    </li>
                    <li class="service-item">
                        <span class="service-icon service-icon-one"></span>
                        <p class="service-desc">
                            <span class="service-desc-bold">1年</span>
                            <span class="service-desc-normal">免费保修</span>
                        </p>
                    </li>
                    <li class="service-split-line">
                        <span></span>
                    </li>
                    <li class="service-item">
                        <span class="service-icon service-icon-by"></span>
                        <p class="service-desc">
                            <span class="service-desc-bold">全场</span>
                            <span class="service-desc-normal">包邮</span>
                        </p>
                    </li>
                    <li class="service-split-line">
                        <span></span>
                    </li>
                    <li class="service-item">
                        <span class="service-icon service-icon-map"></span>
                        <p class="service-desc">
                            <span class="service-desc-bold">2000多家</span>
                            <span class="service-desc-normal">专卖店</span>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="site-footer-navs clearfix">
                <div class="footer-nav-item">
                    <h4 class="footer-nav-title">帮助说明</h4>
                    <ul>
                        <li><a href="http://store.meizu.com/explain/payment_help.html" target="_blank">支付方式</a></li>
                        <li><a href="http://store.meizu.com/explain/deliverynote.html" target="_blank">配送说明</a></li>
                        <li><a href="http://store.meizu.com/explain/warranty_services.html" target="_blank">售后服务</a></li>
                        <li><a href="http://store.meizu.com/explain/payment_helps.html" target="_blank">付款帮助</a></li>
                    </ul>
                </div>
                <div class="footer-nav-item">
                    <h4 class="footer-nav-title">Flyme OS</h4>
                    <ul>
                        <li><a target="_blank" href="https://cloud.flyme.cn/">云服务</a></li>
                        <li><a target="_blank" href="http://www.flyme.cn/firmware.jsp">固件下载</a></li>
                        <li><a target="_blank" href="http://app.flyme.cn/">软件商店</a></li>
                        <li><a target="_blank" href="http://finder.flyme.cn/">查找手机</a></li>
                    </ul>
                </div>
                <div class="footer-nav-item">
                    <h4 class="footer-nav-title">关于我们</h4>
                    <ul>
                        <li><a target="_blank" href="http://www.meizu.com/about.html">关于魅族</a></li>
                        <li><a target="_blank" href="http://hr.meizu.com/">加入我们</a></li>
                        <li><a target="_blank" href="http://www.meizu.com/contact.html">联系我们</a></li>
                        <li><a target="_blank" href="http://www.meizu.com/legalStatement.html">法律声明</a></li>
                    </ul>
                </div>
                <div class="footer-nav-item">
                    <h4 class="footer-nav-title">关注我们</h4>
                    <ul>
                        <li><a target="_blank" href="http://weibo.com/meizumobile">新浪微博</a></li>
                        <li><a target="_blank" href="http://t.qq.com/meizu_tech">腾讯微博</a></li>
                        <li><a target="_blank" href="http://user.qzone.qq.com/2762957059">QQ空间</a></li>
                        <li>
                            <a class="meizu-footer-wechat">
              官方微信
              <img src="/qiantai/img/weixin.png" alt="微信二维码">
            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-nav-custom">
                    <h4 class="nav-custom-title">24小时全国服务热线</h4>
                    <a href="tel:400-788-3333"><h3 class="nav-custom-number">400-788-3333</h3></a>
                    <a class="nav-custom-btn" href="javascript:void(0);" onclick="window.open(&#39;http://live-i.meizu.com/live800/chatClient/chatbox.jsp?companyID=8957&amp;configID=4&amp;enterurl=&#39;+ encodeURIComponent(document.URL) + &#39;&amp;pagereferrer=&#39; + encodeURIComponent(document.referrer) + &#39;&amp;info=&amp;k=1&#39;, &#39;_blank&#39;,&#39;height=775,width=1200,fullscreen=3,top=100,left=100,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no,fullscreen=no&#39;);">
          <img src="/qiantai/img/20x21xiaoshi.png" width="20" height="21">
          24小时在线客服
        </a>
                </div>
            </div>
            <div class="site-footer-end">
                <p>
                    ©2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.
                    <a target="_blank" href="http://www.miitbeian.gov.cn/" hidefocus="true">备案号：粤ICP备13003602号-2</a>
                    <a target="_blank" href="http://www2.res.meizu.com/zh_cn/images/common/icp2.jpg" hidefocus="true">经营许可证编号：粤B2-20130198</a>
                    <a target="_blank" href="http://www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" hidefocus="true">营业执照</a>
                    <a target="_blank" rel="nofollow" href="http://210.76.65.188/" hidefocus="true">
          <img src="/qiantai/img/footer-copy-1.png">
        </a>
                    <a target="_blank" rel="nofollow" href="http://210.76.65.188/webrecord/innernet/Welcome.jsp?bano=4404013010531" hidefocus="true">
          <img src="/qiantai/img/footer-copy-2.png">
        </a>
                    <a target="_blank" rel="nofollow" href="https://credit.szfw.org/CX20151204012550820380.html" hidefocus="true">
          <img src="/qiantai/img/trust-icon.png">
        </a>
                </p>
            </div>
        </div>
    </div>
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