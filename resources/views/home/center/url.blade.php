@extends('home.center.top') @section('content')
<div class="store-wrap">
    <div class="crumbs">
        <a href="http://store.meizu.com/">首页&gt;</a><a href="http://store.meizu.com/member/index">我的商城&gt;</a><a href="./img/会员中心-地址管理 魅族商城.html" class="active">地址管理</a>
    </div>
    <div class="main clearfix">
        <div class="left-nav f-fl">
            <span class="title "><a href="http://store.meizu.com/member/index">我的商城</a></span>
            <div class="nav-main">
                <a href="/qiantai/javascript:;" class="type-title"><i class="iconfont icon-orderCenter"></i>我的账户</a>
                <a href="http://store.meizu.com/member/myorder/index" class="ml ">我的资料</a>
                <a href="/qiantai/javascript:;" class="type-title"><i class="iconfont icon-orderCenter"></i>我的交易</a>
                <a href="http://store.meizu.com/member/myorder/index" class="ml ">我的订单</a>
                <a href="/center/url" class="ml ">地址管理</a>
            </div>
        </div>
        <div class="right-content f-fr">
            <div class="address-main">
                <div class="title">地址管理<span class="gray">（您目前已有地址<i class="already">0</i>个，最多还可以增加<i class="settle">10</i>个）</span></div>
                <div class="main">
                    <div class="row">
                        <span class="title rollit">新增收货地址</span>
                    </div>
                    <form id="valid-form" action="/url" method="post">
                        {{csrf_field()}}
                        <!-- 修改地址时要用的地址id -->
                        <input class="addressId" type="hidden" value="">
                        <div class="content">
                            <div class="row namePhone clearfix">
                                <div class="f-fl addressName">
                                    <span>收货人姓名<i class="mark">*</i></span>
                                    <input id="shname" class="varify" name="shname" type="text" placeholder="长度不超过12个字" maxlength="12">
                                </div>
                                <div class="f-fl addressPhone">
                                    <span>收货人手机号<i class="mark">*</i></span>
                                    <input id="phone" name="shtel" class="varify" type="text" placeholder="请输入11位手机号" maxlength="11">
                                </div>
                            </div>
                            <div class="row detailAddress">
                                <span class="f-fl">收货人地址<i class="mark">*</i></span>
                                <input id="phone" name="shadd" class="varify" type="text" placeholder="请输入收货地址" maxlength="100">
                            </div>
                            <div class="row  detailAddress">
                                <span>详细地址<i class="mark">*&nbsp;&nbsp;&nbsp;</i></span>
                                <input id="detailAddress" name="xadd" class="varify errorRed" type="text" placeholder="请输入不超过50个字的详细地址，例如：路名，门牌号" maxlength="50">
                                <span class="error">请详细填写地址信息</span></div>
                            <div class="opreat">
                                <label for="default">
                                    <input id="default" class="setDefault" type="checkbox" name="isDefault">设为默认
                                </label>
                                <button style="margin-top:10px;margin-left:85px;" class="button_blue" value=提交 "/>提交</button>
                            </div>
                        </div>
                    </form>
                    
                    <div class="list ">
                        <div class="row ">
                            <div class="title ">
                                <div>已有地址</div>
                               
                                <div class="upload hide ">
                                    <i class="iconfont icon-zhuyi "></i>
                                    <span>因配送地址库数据升级，请点击地址进行升级，让您享受更好的配送服务！</span>
                                </div>
                            </div>
                        </div>
                      
                        <div class="listHead ">
                            <span class="center w15 ">收货人姓名</span>
                            <span class="center w15 ">收货人手机号</span>
                            <span class="center w20 ">收货人地址</span>
                            <span class="center w20 ">详细地址</span>
                            <span class="center w20 ">操作</span>
                        </div>
                        @foreach($url as $v)
                            <div class="listHead ">
                                <span class="center w15 ">{{$v['shname']}}</span>
                                <span class="center w15 ">{{$v['shtel']}}</span>
                                <span class="center w20 ">{{$v['shadd']}}</span>
                                <span class="center w20 ">{{$v['xadd']}}</span>
                                <span class="center w20 "> 
                                    <div class="am-btn-group am-btn-group-xs ">
                                        <a href="/center/url "><span class="am-icon-pencil-square-o "></span> 编辑</a>
                                        <form style="float:left " action=" " method="post ">
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only "><span class="am-icon-trash-o "></span> 删除</button>
                                        </form>
                                    </div>
                                </span>
                            </div>
                        @endforeach
                        <ul id="tableList " class=" "></ul>
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