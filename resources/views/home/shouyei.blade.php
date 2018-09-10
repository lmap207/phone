@extends('layouts.home') @section('daohang')
<div class="site-header">
    <div class="mzcontainer">
        <div class="header-logo">
            <a href="http://www.meizu.com/" target="_blank">
                <img src="/qiantai/img/logo-header.png" srcset="/qiantai/img/logo-header@2x.png 2x" width="115" height="20" alt="魅族科技（中国）有限公司">
            </a>
        </div>
        <div class="header-nav">
            <ul class="nav-list">
            </ul>
        </div>
        <div class="header-cart" id="MzHeaderCart">
            <a href="http://store.meizu.com/cart" target="_blank" data-yoyi="2500">
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
    <div id="MzNavMenu" class="header-nav-menu" style="">
        <div class="mzcontainer">
            <ul class="menu-product-list">
                <li class="menu-product-item">
                    <a href="http://store.meizu.com/item/meizu_pro5.html?rc=sd" target="_blank">
                        <div class="menu-product-figure">
                            <img src="/qiantai/img/1450928403@126x126.png" data-src="/qiantai/img/1450928403@126x126.png" width="100" height="150">
                        </div>
                        <p class="menu-product-name">PRO 5</p>
                        <p class="menu-product-price">
                            ¥
                            <span>2799</span>
                        </p>
                    </a>
                </li>
                <!-- more -->
            </ul>
        </div>
    </div>
</div>
@endsection @section('content')
<div class="home-category-wrap">
    <div class="mzcontainer home-category-position">
        <div class="home-category-list">
            <ul class="home-category-nav">
                <li class="home-category-nav-item">
                    <a class="category-nav-link" href="http://store.meizu.com/topic/list.html?active">
              <span>全部商品分类</span>
            </a>
                </li>
                <li class="home-category-nav-item">
                    <a class="category-nav-link" href="http://store.meizu.com/topic/list.html?active=0">
              <span>手机</span>
            </a>
                    <div class="category-nav-children nav-wrap-col-1">
                        <div class="nav-children-wrap">
                            <ul class="nav-children-left">
                                <li class="nav-children-item">
                                    <!-- <a href="http://store.meizu.com/item/meizu_pro5.html?rc=cb" target="_blank">
                      <img src="/qiantai/img/init-1x1(1).jpg" data-src="/qiantai/img/1450937811@50x50.png" width="50" height="50" alt="PRO 5"> -->
                                    <span>PRO 5</span>
                                    <!-- </a> -->
                                </li>
                            </ul>
                        </div>
                        <!--                <div class="category-item-ad">
                <a href="http://store.meizu.com/item/meizu_mx5.html?rc=cba" target="_blank">
                  <img src="/qiantai/img/1458096325-23293.jpg" width="296" height="480">
                </a>
              </div> -->
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="MzHomeSlider" class="home-slider">
    <div class="home-slider-items">
        <div class="bx-wrapper" style="max-width: 100%;">
            <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 480px;">
                <div class="bx-wrapper" style="max-width: 100%;">
                    <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 480px;">
                        <ul class="bxslider" style="width: auto; position: relative;">
                            <li data-bgcolor="#b4c843" style="float: none; list-style: none; position: absolute; width: 1349px; z-index: 0; display: none; background: rgb(180, 200, 67);">
                                <div class="mzcontainer">
                                    <a href="http://alad.meizu.com/hd/spring.html" target="_blank">
              <img src="/qiantai/img/1.jpg" width="1240" height="480">
            </a>
                                </div>
                            </li>
                            <li data-bgcolor="#c2f3fe" style="float: none; list-style: none; position: absolute; width: 1349px; z-index: 0; background: rgb(194, 243, 254); display: none;">
                                <div class="mzcontainer">
                                    <a href="http://store.meizu.com/topic/spring.html?rc=lb" target="_blank">
              <img src="/qiantai/img/1458546669-26155.png" width="1240" height="480">
            </a>
                                </div>
                            </li>
                            <li data-bgcolor="#f9f8fc" style="float: none; list-style: none; position: absolute; width: 1349px; z-index: 0; background: rgb(249, 248, 252); display: none;">
                                <div class="mzcontainer">
                                    <a href="http://store.meizu.com/item/meizu_mx5.html?rc=lb" target="_blank">
              <img src="/qiantai/img/1458285012-23841.jpg" width="1240" height="480">
            </a>
                                </div>
                            </li>
                            <li data-bgcolor="#ffffff" style="float: none; list-style: none; position: absolute; width: 1349px; z-index: 50; background: rgb(255, 255, 255); display: list-item;">
                                <div class="mzcontainer">
                                    <a href="http://store.meizu.com/item/meizu_hd50.html?rc=lb" target="_blank">
              <img src="/qiantai/img/1458263975-58259.jpg" width="1240" height="480">
            </a>
                                </div>
                            </li>
                            <li data-bgcolor="#262729" style="float: none; list-style: none; position: absolute; width: 1349px; z-index: 0; background: rgb(38, 39, 41); display: none;">
                                <div class="mzcontainer">
                                    <a href="http://store.meizu.com/item/meizu_pro5.html?rc=lb" target="_blank">
              <img src="/qiantai/img/1458541851-33151.jpg" width="1240" height="480">
            </a>
                                </div>
                            </li>
                            <li data-bgcolor="#eae9eb" style="float: none; list-style: none; position: absolute; width: 1349px; z-index: 0; background: rgb(234, 233, 235); display: none;">
                                <div class="mzcontainer">
                                    <a href="http://store.meizu.com/topic/spring.html?rc=lb6#n1pro" target="_blank">
              <img src="/qiantai/img/1458542539-29472.jpg" width="1240" height="480">
            </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="bx-controls bx-has-pager bx-has-controls-direction">
                        <div class="bx-pager bx-default-pager">
                            <div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link">1</a></div>
                            <div class="bx-pager-item"><a href="" data-slide-index="1" class="bx-pager-link">2</a></div>
                            <div class="bx-pager-item"><a href="" data-slide-index="2" class="bx-pager-link">3</a></div>
                            <div class="bx-pager-item"><a href="" data-slide-index="3" class="bx-pager-link active">4</a></div>
                            <div class="bx-pager-item"><a href="" data-slide-index="4" class="bx-pager-link">5</a></div>
                            <div class="bx-pager-item"><a href="" data-slide-index="5" class="bx-pager-link">6</a></div>
                        </div>
                        <div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection