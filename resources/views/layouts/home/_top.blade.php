<div class="site-topbar clearfix">
    <div class="mzcontainer">
        <div class="topbar-nav">
            <a href="/" target="_blank">魅族官网</a>
            <a href="http://store.meizu.com/">魅族商城</a>
            <a href="http://www.flyme.cn/" target="_blank">Flyme</a>
            <a href="http://retail.meizu.com/index.html" target="_blank">专卖店</a>
            <a href="http://service.meizu.com/index.html" target="_blank">服务</a>
            <a href="http://bbs.meizu.cn/" target="_blank">社区</a>
            <a href="/yjfk" target="_blank">意见反馈</a>
        </div>
        <div class="topbar-right">
            <ul class="topbar-info">
                <li class="topbar-order-msg">
                    <a class="topbar-link" href="http://store.meizu.com/member/myorder/index" target="_blank">{{Session::get('name')}} &nbsp; 用户</a>
                    <span class="msg-tag" id="MzOrderMsgTag"></span>
                </li>
                <li class="topbar-info-msg" id="MzTopbarMsg" style="display: list-item;">
                    <a class="topbar-link" href="http://store.meizu.com/member/message/index" target="_blank"> 消息 </a>
                    <span class="msg-tag" id="MzMsgTag" style="display: inline;"></span>
                </li>
                <li class="topbar-order-msg">
                    <a class="topbar-link" href="http://store.meizu.com/member/myorder/index" target="_blank">我的订单</a>
                    <span class="msg-tag" id="MzOrderMsgTag"></span>
                </li>
                <li class="mz_login" style="display: block;">
                    <a class="topbar-link " href="/home/denglu"  target="_blank">登录</a>
                </li>
                <li class="mz_login" style="display: block;">
                    <a class="topbar-link" href="/home/zc" target="_blank">注册</a>
                </li>
                <li class="topbar-info-member" style="">
                    <a class="topbar-link" href="http://store.meizu.com/member/index" target="_blank">
                        <span id="MzUserName" class="site-member-name">XXXXXX</span>

                    </a>
                    <div class="site-member-items">
                        <a class="site-member-link" href="/center/url" target="_blank">地址管理</a>
                        <a class="site-member-link site-logout" href="/home/denglu" data-href="http://store.meizu.com/accounts/logout.htm?useruri=">登录</a>
                        <a class="site-member-link site-logout" href="/home/logout" data-href="http://store.meizu.com/accounts/logout.htm?useruri=">退出</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>